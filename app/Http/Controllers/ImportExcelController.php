<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Imports\CatalogueImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportExcelController extends Controller
{
    public function fileImportExport()
    {
       return view('import');
    }

    public function importExcel(Request $request)
    {
        Excel::import(new CatalogueImport, $request->file('file'));

        return back();
    }
}
