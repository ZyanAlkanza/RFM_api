<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataImport;
use App\Exports\DataExport;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function import(Request $request) {
        try {
            Excel::import(new DataImport, $request->file);
    
            return response()->json([
                'status'    => true,
                'message'   => 'Data berhasil diupload!'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status'    => false,
                'message'   => 'Data gagal diupload!',
                'error'     => $th->getMessage()
            ], 400);
        }
    }

    public function export() {
        try {
            return Excel::download(new DataExport, 'data.xlsx');

            return response()->json([
                'status'    => true,
                'message'   => 'Data berhasil didownload!'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status'    => false,
                'message'   => 'Data gagal didownload!',
                'error'     => $th->getMessage()
            ], 400);
        }
    }
}
