<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class HelloController extends Controller
{
    /**
     * @Route("/hello", name="hello")
     */
    public function index()
    {

        $a=2;
        $b=3;
        $c=$a+$b;
/*
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Hello World !');

        $writer = new Xlsx($spreadsheet);
        $writer->save('/app/downloads/1.xlsx');
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load('/app/downloads/2.xlsx');
        $spreadsheet->setActiveSheetIndex(0);
        $sheet= $spreadsheet->getActiveSheet();
        $data=$sheet->toArray();
*/

        return $this->render('hello/index.html.twig', [
            'controller_name' => 'HelloController',
        ]);
    }
}
