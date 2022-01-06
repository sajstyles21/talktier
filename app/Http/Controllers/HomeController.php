<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Twilio\Rest\Client;

class HomeController extends Controller
{
    public function addNumber(Request $request)
    {
        $receiverNumber = '+'.$request->number;
        $message = "Thank you for requesting Early Access to TalkTier, we'll Message you when it Launches! Reply STOP to opt out of receiving future messages.";
  
        try {
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");
  
            $client = new Client($account_sid, $auth_token);
            $message = $client->messages->create($receiverNumber, [
                'from' => $twilio_number,
                'body' => $message]);

            if ($message) {
                //load spreadsheet
                $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load("iINrSDYS7SEdhmiZIfkIjo9AVyxvtNLw7f1KUppq+z4=.xlsx");

                $sheet = $spreadsheet->getActiveSheet();
                $sheet->insertNewRowBefore(1, 1);
                $sheet->setCellValue('A1', $request->number);

                $writer = new Xlsx($spreadsheet);
                $writer->save('iINrSDYS7SEdhmiZIfkIjo9AVyxvtNLw7f1KUppq+z4=.xlsx');

                echo json_encode(['success'=>true]);
                die();
            }
            echo json_encode(['success'=>false]);
            die();
        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
            echo json_encode(['success'=>false]);
            die();
        }
    }

    public function termsService(Request $request)
    {
        return view('terms-conditions', [
        ]);
    }

    public function cookiePolicy(Request $request)
    {
        return view('cookie-policy', [
        ]);
    }

    public function privacyPolicy(Request $request)
    {
        return view('privacy-policy', [
        ]);
    }
}
