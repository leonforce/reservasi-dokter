<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class ReservasiController extends Controller
{

    private function checkdataakhir($tanggal)
    {

        if (today()->toDateString() !== $tanggal) {
            return false;
        }
        return true;
    }

    public function index()
    {

        if (!$this->checkdataakhir("2022-01-22")) {
            $maxjumlahantri = 20;
        } else {
//            ISI ANTRIAN
        }
        $data = [
            'nama' => 'yudha',
            'jumlah' => $maxjumlahantri,
        ];
        dd($data);
    }
}
