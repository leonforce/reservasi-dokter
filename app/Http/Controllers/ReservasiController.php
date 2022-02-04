<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservasiRequest;
use App\Models\Antrians;
use App\Models\Reservators;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{

    public function index(){
        return view('antrian.antrian');
    }

    public function store(ReservasiRequest $request)
    {
        $noantri = 9;
        $reservator = Reservators::create([
            'nama' => $request->nama,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'jenis' => $request->jenis,
        ]);
        return redirect(route('home'),['message' => 'shit']);
//
//        if (!$this->checkdataakhir("2022-01-22")) {
//            $maxjumlahantri = 20;
//        } else {
//            echo "ISI ANTRIAN";
//        }
//        $data = [
//            'nama' => 'yudha',
//            'jumlah' => $maxjumlahantri,
//        ];
    }

    private function checkdataakhir($tanggal)
    {

        if (today()->toDateString() !== $tanggal) {
            return false;
        }
        return true;
    }
}
