<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // MACAM-MACAM ORM

        // all()
        // untuk memanggil semua data di dalam table user tanpa terkecuali
        $user = User::all();

        //create()
        // membuat data dan memasukkan ke dalam data base dan bisa menggunakan array
        $user = USer::create([
            'name' => 'Laptop',
            'email' => 'farhan@gmail.com',
        ]);

        //save()
        // untuk menyimpan perubahan mau itu create / update apapun yang berubah
        $user = User::find(1);
        $user->price = 1300;
        $user->save();

        //update()
        // untuk mengedit data kita 
        User::where('name', 'paang')->update(['email' => '12121@gmail.com']);

        //find()
        // untuk menangkap nilai yang di kirimkan yang berisi integer
        $user = User::find(1);

        //findOrFail()
        // mirip dengan find cuma ketika ngk di temukan akan memunculkan not found
        $user = User::findOrFail(1);

        //first()
        // unutk mengambil data satu record atau cuma sekali tidak bisa data looping yang di kembalikan harus satuan
        $user = User::where('category', 'Electronics')->first();


        //delete()
        //digunakan untuk menghapus data
        $user = User::find(1);
        $user->delete();


    }
}
