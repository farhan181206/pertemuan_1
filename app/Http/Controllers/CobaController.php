<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        // contoh tipe data untuk string
        $string = "nama saya muhammad farhan dan umur saya";

        //cintoh tipe data untuk integer
        $integer = 21;

        //float
        $tinggi_saya = 183.20;

        //boolean 

        //ini yang gampang
        $isTrue = true;
        $isFalse = false;

        // dd("benar = $isTrue, salah = $isFalse");

        //ini boolean versi susah
        // $x = false;

        // if($x == true){
        //     dd("variable x beda seperti pembandingnya");
        // }else{
        //     dd("variable x sama seperti pembandingnya");
        // }

        //hasil
        // $hasil = $string . $integer . " dan tinggi saya " . $tinggi_saya;


        // CONTOH OPERATOR  

        // CONTOH OPERATOR ARITMARIKA
        // 1. tambah

        // Penjumlahan
        $nilai1 = 10;
        $nilai2 = 5;
        $hasil = $nilai1 + $nilai2;

        echo "Hasil penjumlahan $nilai1 dan $nilai2 adalah: $hasil <br>";


        // 2. kurang
    
        $nilai_pengurangan1 = 100;
        $nilai_pengurangan2 = 5;
        $hasil_pengurangan = $nilai_pengurangan1 - $nilai_pengurangan2;

        echo "Hasil pengurangan $nilai_pengurangan1 dengan $nilai_pengurangan2 adalah: $hasil_pengurangan <br>";

        // 3. kali
        $nilai_perkalian1 = 100;
        $nilai_perkalian2 = 5;
        $hasil_perkalian = $nilai_perkalian1 * $nilai_perkalian2;

        echo "Hasil perkalian $nilai_perkalian1 dengan $nilai_perkalian2 adalah: $hasil_perkalian <br>";

        // 4. bagi
        $nilai_pembagian1 = 10;
        $nilai_pembagian2 = 5;
        $hasil_pembagian = $nilai_pembagian1 / $nilai_pembagian2;

        echo "Hasil pembagian $nilai_pembagian1 dengan $nilai_pembagian2 adalah: $hasil_pembagian <br>";


        // 5. modulus
        $nilai_modulus1 = 100;
        $nilai_modulus2 = 10;
        $hasil_modulus = $nilai_modulus1 % $nilai_modulus2;

        echo "Sisa pembagian $nilai_modulus1 dengan $nilai_modulus2 adalah: $hasil_modulus <br>";


        // CONTOH ARITMATIKA YANG AGAK SUSAH / LOGIKA

        // RUMUS UNTUK MEMUNCULKAN NILAI GANJIL GENAP
        
        $number = 3;

        if ($number % 2 == 0) {
            return "$number adalah bilangan genap";
        } else {
            return "$number adalah bilangan ganjil";
        }



        // OPERATOR PEMBANDING DI LARAVEL

        // SAMA DENGAN
        $nilai1 = 10;
        $nilai2 = 5;

        if ($nilai1 == $nilai2) {
            echo "$nilai1 sama dengan $nilai2";
        } else {
            echo "$nilai1 tidak sama dengan $nilai2";
        }

        // TIDAK SAMA DENGAN
        $nilai1 = 10;
        $nilai2 = 5;

        if ($nilai1 != $nilai2) {
            echo "$nilai1 tidak sama dengan $nilai2";
        } else {
            echo "$nilai1 sama dengan $nilai2";
        }

        // KURANG DARI
        $nilai1 = 10;
        $nilai2 = 5;

        if ($nilai1 < $nilai2) {
            echo "$nilai1 kurang dari $nilai2";
        } else {
            echo "$nilai1 tidak kurang dari $nilai2";
        }

        // LEBIH DARI
        $nilai1 = 10;
        $nilai2 = 5;

        if ($nilai1 > $nilai2) {
            echo "$nilai1 lebih dari $nilai2";
        } else {
            echo "$nilai1 tidak lebih dari $nilai2";
        }

        // KURANG DARI ATAU SAMA DENGAN 
        $nilai1 = 10;
        $nilai2 = 5;

        if ($nilai1 <= $nilai2) {
            echo "$nilai1 kurang dari atau sama dengan $nilai2";
        } else {
            echo "$nilai1 tidak kurang dari atau sama dengan $nilai2";
        }

        // LEBIH DARI ATAU SAMA DENGAN 
        $nilai1 = 10;
        $nilai2 = 5;

        if ($nilai1 >= $nilai2) {
            echo "$nilai1 lebih dari atau sama dengan $nilai2";
        } else {
            echo "$nilai1 tidak lebih dari atau sama dengan $nilai2";
        }


        // OPERATOR LOGIKA

        // && DAN
        $nilai1 = 10;
        $nilai2 = 5;
        $nilai3 = 7;

        if ($nilai1 > $nilai2 && $nilai1 > $nilai3) {
            echo "$nilai1 adalah nilai terbesar";
        } else {
            echo "$nilai1 bukanlah nilai terbesar";
        }

        // || ATAU
        $nilai_atau1 = 10;
        $nilai_atau2 = 5;
        $nilai_atau3 = 7;

        if ($nilai_atau1 == $nilai_atau2 || $nilai_atau1 == $nilai_atau3) {
            echo "$nilai_atau1 adalah salah satu dari $nilai_atau2 atau $nilai_atau3";
        } else {
            echo "$nilai_atau1 bukanlah $nilai_atau2 atau $nilai_atau3";
        }

        // ! TIDAK
        $nilai_tidak1 = 10;
        $nilai_tidak2 = 5;

        if (!($nilai_tidak1 == $nilai_tidak2)) {
            echo "$nilai_tidak1 tidak sama dengan $nilai_tidak2";
        } else {
            echo "$nilai_tidak1 sama dengan $nilai_tidak2";
        }


        // OPERATOR PENUNGASAN

        // OPERATOIR PENUNGASAN GABUNGAN

        $nilai_penungasan = 10;

        // Penambahan
        $nilai_penungasan += 5; // $nilai sekarang bernilai 15

        // Pengurangan
        $nilai_penungasan -= 3; // $nilai sekarang bernilai 12

        // Perkalian
        $nilai_penungasan *= 2; // $nilai sekarang bernilai 24

        // Pembagian
        $nilai_penungasan /= 4; // $nilai sekarang bernilai 6


        // OPERATOR PENUNGASAN STRING

        $nama_string = "John";
        $nama_string .= " Doe"; // $nama sekarang bernilai "John Doe"

        // OPERATOR PENUNGASAN INCREMENT ++ DAN DECREMENT --

        $nilai_increment = 10;

        // Increment
        $nilai_increment++; // $nilai sekarang bernilai 11

        // Decrement
        $nilai_increment--; // $nilai sekarang bernilai 10 kembali
         


        // dd($modulus);

    }


    public function percobaan()
    {
        return view('coba',['coba' => 'ini adalah prefix']);
    }
}
