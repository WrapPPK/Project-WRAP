<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log; 

class UploadController extends Controller
{
    public function uploadCsv(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        $file = $request->file('file');
        $filePath = $file->getPathname();
        $fileName = $file->getClientOriginalName();

        Log::info('Sending request to Flask:', [
            'method' => 'POST',
            'url' => 'http://127.0.0.1:5000/upload-csv',
            'file' => $fileName,
        ]);

        try {
            $response = Http::attach(
                'file', file_get_contents($filePath), $fileName
            )->post('http://127.0.0.1:5000/upload-csv');

            if ($response->successful()) {
                $complianceData = $response->json();
                return redirect()->back()->with('complianceData', $complianceData)->with('success', 'File uploaded successfully.');
            } else {
                Log::error('Flask response not successful', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);
                return redirect()->back()->with('error', 'File upload failed: ' . $response->body());
            }
        } catch (\Exception $e) {
            Log::error('Error sending file to Flask:', ['exception' => $e]);
            return redirect()->back()->with('error', 'File upload failed: ' . $e->getMessage());
        }
    }
}
