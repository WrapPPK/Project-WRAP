<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\WaktuMinum; // Assuming this is the model for your waktu_minum table
use Illuminate\Support\Facades\Response;

class KepatuhanController extends Controller
{
    public function show($id)
    {
        $pasien = Pasien::find($id);

        if ($pasien) {
            $medicationTimes = explode(',', $pasien->medication_times);
            return response()->json(['medicationTimes' => $medicationTimes]);
        }

        return response()->json(['error' => 'Patient not found'], 404);
    }

    public function downloadCsv($id)
    {
        $waktuMinumRecords = WaktuMinum::where('id', $id)->get(['hari', 'sudah_minum', 'tanggal_minum', 'waktu_minum']);

        if ($waktuMinumRecords->isEmpty()) {
            return response()->json(['error' => 'No medication times found for this patient'], 404);
        }

        $csvContent = "Hari,Sudah Minum,Tanggal Minum,Waktu Minum\n";
        foreach ($waktuMinumRecords as $record) {
            $csvContent .= $record->hari . ',' . $record->sudah_minum . ',' . $record->tanggal_minum . ',' . $record->waktu_minum . "\n";
        }

        $fileName = 'medication_times_' . $id . '.csv';

        return Response::make($csvContent, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$fileName\""
        ]);
    }
}
