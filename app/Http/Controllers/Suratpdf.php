<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Suratpdf extends Controller
{
    public function showSurat()
    {
        $tanggal = "15 Juni 2023";
        $alamat = "Jalan Contoh, Kota Contoh";

        return view('livewire.kaprodi.terbuka.view')
            ->with('tanggal', $tanggal)
            ->with('alamat', $alamat);
    }
}
