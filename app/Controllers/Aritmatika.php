<?php

namespace App\Controllers;

class Aritmatika extends BaseController
{
    public function index_baru()
    {
        $uri = service('uri');
        if($uri->getSegment(3)!="" && $uri->getSegment(4)!=""){
            $bil1 = $uri->getSegment(3);
            $bil2 = $uri->getSegment(4);
        }
        else {
            $bil1 = 20;
            $bil2 = 10;
        }

        $penjumlahan = $bil1+$bil2;
        $perkalian = $bil1*$bil2;
        $pengurangan = $bil1-$bil2;
        $pembagian = $bil1/$bil2;

        $data = [
            'bil1' => $bil1,
            'bil2' => $bil2,
            'hasilJumlah' => $penjumlahan,
            'hasilKurang' => $pengurangan,
            'hasilKali' => $perkalian,
            'hasilBagi' => $pembagian,
        ];

        return view('Belajar_aritmatika/Welcome_aritmatika', $data);
    }
}
