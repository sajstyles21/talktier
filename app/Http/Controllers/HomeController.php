<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class HomeController extends Controller
{
    public function addNumber(Request $request)
    {
        //load spreadsheet
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load("numbers.xlsx");

        $sheet = $spreadsheet->getActiveSheet();
        $sheet->insertNewRowBefore(1, 1);
        $sheet->setCellValue('A1', $request->number);

        $writer = new Xlsx($spreadsheet);
        $writer->save('numbers.xlsx');

        return back();
    }
}
