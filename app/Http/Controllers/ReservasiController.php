<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservasiController extends Controller
{

    private function checkdataakhir($tanggal){

    }
    public function index()
    {
        $lastantri = "2022-01-28";
        $today = today()->toDateString();
        if ($today !== $lastantri){
            echo "kampret";
        }
        echo "sjot";
    }
}
