<?php

namespace App\Http\Controllers;

use App\Models\Qrcode;
use Illuminate\Http\Request;

class QRController extends Controller
{
    public function viewQR($qr)
    {
        return view('viewqrcode', ['qr' => $qr]);
    }
    private function generateRandomString($length = 10)
    {
        $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $result = null;
        for ($i = 0; $i < $length / 2; $i++) {
            $result .= $letters[rand(0, strlen($letters) - 1)];
            $result .= $numbers[rand(0, strlen($numbers) - 1)];
        }
        return $result;
    }
    public function generateQR(Request $request): string
    {
        $qr = $request->get('qr');
        $pass = $request->get('pass');

        do {
            $code = $this->generateRandomString();
            $qrEntry = Qrcode::find($code);
        } while ($qrEntry != null);

        try {
            $qrEntry = new Qrcode();
            $qrEntry->input = $qr;
            $qrEntry->code = $code;
            $qrEntry->pass = '123';
            $qrEntry->save();
        } catch (\Throwable $th) {
            return "Limit has reached.";
        }
        return $qrEntry->code;
    }
}
