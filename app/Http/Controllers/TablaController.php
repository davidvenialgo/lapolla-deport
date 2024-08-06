<?php

namespace App\Http\Controllers;

use PhpOffice\PhpSpreadsheet\IOFactory;

class TablaController extends Controller
{
    public function excel()
    {
        $inputFileName = "https://docs.google.com/spreadsheets/d/1P1nPtXT8c2SL8m8SF3c9Jx9D-1jt2BOe/export?format=xlsx";
        $tempFilePath = tempnam(sys_get_temp_dir(), 'excel');
        file_put_contents($tempFilePath, file_get_contents($inputFileName));

        try {
            $spreadsheet = IOFactory::load($tempFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
            $shit = $worksheet;
            $data = [];
            foreach ($shit->toArray() as $key => $row) {
                if($key!=1){
                    $data[] = [
                        'A' => $worksheet->getCell('A' . $key)->getValue(),
                        'B' => $worksheet->getCell('B' . $key)->getValue(),
                        'C' => $worksheet->getCell('C' . $key)->getValue(),
                    ];
                }
            }

            // Eliminar el archivo temporal
            unlink($tempFilePath);

            return view('index', compact('data'));
        } catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
            echo 'Error al cargar el archivo: ', $e->getMessage();
        }
    }

    public function resultados()
    {
        $inputFileName = "https://docs.google.com/spreadsheets/d/1P1nPtXT8c2SL8m8SF3c9Jx9D-1jt2BOe/export?format=xlsx";
        $tempFilePath = tempnam(sys_get_temp_dir(), 'excel');
        file_put_contents($tempFilePath, file_get_contents($inputFileName));

        try {
            $spreadsheet = IOFactory::load($tempFilePath);
            $worksheet = $spreadsheet->getActiveSheet();

            $datas = [];
            $highestRow = $worksheet->getHighestRow();

            foreach ($worksheet->toArray() as $key => $row) {
                if($row != '')
                {
                    $datas[] = [
                        'D' => $worksheet->getCell('D' . $key)->getValue(),
                        'E' => $worksheet->getCell('E' . $key)->getValue(),
                        'F' => $worksheet->getCell('F' . $key)->getValue(),
                        'G' => $worksheet->getCell('G' . $key)->getValue(),
                    ];
                }
            }
            // Eliminar el archivo temporal
            unlink($tempFilePath);
            return view('quienes_somos', compact('datas'));
        } catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
            return response()->json(['error' => 'Error al cargar el archivo: ' . $e->getMessage()], 500);
        }
    }

    public function mensual()
    {
        $inputFileName = "https://docs.google.com/spreadsheets/d/1P1nPtXT8c2SL8m8SF3c9Jx9D-1jt2BOe/export?format=xlsx";
        $tempFilePath = tempnam(sys_get_temp_dir(), 'excel');
        file_put_contents($tempFilePath, file_get_contents($inputFileName));

        try {
            $spreadsheet = IOFactory::load($tempFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
            $shit = $worksheet;
            $datasm = [];
            foreach ($shit->toArray() as $key => $row) {
                if($key!=1){
                    $datasm[] = [
                        'I' => $worksheet->getCell('I' . $key)->getValue(),
                        'J' => $worksheet->getCell('J' . $key)->getValue(),
                    ];
                }
            }

            // Eliminar el archivo temporal
            unlink($tempFilePath);

            return view('mensual', compact('datasm'));
        } catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
            echo 'Error al cargar el archivo: ', $e->getMessage();
        }
    }
}