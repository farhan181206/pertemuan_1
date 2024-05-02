<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopingController extends Controller
{
    public function index()
    {
        // PERULANGAN 

        // Counted Loop

        // For
        for ($i = 0; $i < 10; $i++){
            echo "<h2>Ini perulangan ke-$i</h2>";
        }

        // Foreach

        $books = [
            "Panduan Belajar PHP untuk Pemula",
            "Membangun Aplikasi Web dengan PHP",
            "Tutorial PHP dan MySQL",
            "Membuat Chat Bot dengan PHP"
        ];
        
        echo "<h5>Judul Buku PHP:</h5>";
        echo "<ul>";
        foreach($books as $buku){
            echo "<li>$buku</li>";
        }
        echo "</ul>";


        // PERULANGAN UNCOUNTED LOOP

        // WHILE

        $ulangi_while = 0;

        while($ulangi_while < 10){
            echo "<p>Ini adalah perulangan while ke-$ulangi_while</p>";
            $ulangi_while++;
        }

        // Do/While

        $ulangi = 10;

        do {
            echo "<p>ini adalah perulangan do while ke-$ulangi</p>";
            $ulangi--;
        } while ($ulangi > 0);


    }
}
