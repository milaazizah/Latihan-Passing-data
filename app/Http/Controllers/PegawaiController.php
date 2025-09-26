<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
    {
        // Data contoh
        $name = "Mila Azizah";
        $birthDate = Carbon::create(2005, 8, 30);
        $my_age = $birthDate->age;

        $hobbies = ["Membaca", "Handcraft", "Menyanyi", "Olahraga","Memasak"];

        $tgl_harus_wisuda = Carbon::create(2028, 10, 10); 
        $today = Carbon::now();
        $time_to_study_left = $today->diffInDays($tgl_harus_wisuda);


        $current_semester = 3;
        $future_goal = "Menjadi Software Engineer di Perusahaan Besar Dunia";


        if ($current_semester < 3) {
            $motivasi = "Masih Awal, Kejar TAK";
        } else {
            $motivasi = "Jangan main-main, kurangi main game!";
        }

        // Kirim data ke view
       return view('pegawai', compact(
    'name',
    'my_age',
    'hobbies',
    'tgl_harus_wisuda',
    'time_to_study_left',
    'current_semester',
    'motivasi',
    'future_goal'
));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
