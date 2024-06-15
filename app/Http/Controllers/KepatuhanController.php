<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\WaktuMinum;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
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

    public function downloadExcel($id)
    {
        $waktuMinumRecords = WaktuMinum::where('id', $id)->get(['hari', 'sudah_minum', 'tanggal_minum', 'waktu_minum']);

        if ($waktuMinumRecords->isEmpty()) {
            return response()->json(['error' => 'No medication times found for this patient'], 404);
        }

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        
        // Set header
        $sheet->setCellValue('A1', 'Hari');
        $sheet->setCellValue('B1', 'Sudah Minum');
        $sheet->setCellValue('C1', 'Tanggal Minum');
        $sheet->setCellValue('D1', 'Waktu Minum');

        // Populate data
        $row = 2;
        foreach ($waktuMinumRecords as $record) {
            $sheet->setCellValue('A' . $row, $record->hari);
            $sheet->setCellValue('B' . $row, $record->sudah_minum);
            $sheet->setCellValue('C' . $row, $record->tanggal_minum);
            $sheet->setCellValue('D' . $row, $record->waktu_minum);
            $row++;
        }

        $writer = new Xlsx($spreadsheet);
        $fileName = 'medication_times_' . $id . '.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        $writer->save($temp_file);

        return response()->download($temp_file, $fileName)->deleteFileAfterSend(true);
    }
}
