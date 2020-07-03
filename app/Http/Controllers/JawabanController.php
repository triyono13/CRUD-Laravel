<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use App\Jawaban;

class JawabanController extends Controller
{
    public function index($id)
    {
        $pertanyaan = Pertanyaan::findorfail($id);
        $jawaban = Jawaban::with('pertanyaan')->get();
        return view ('items.jawaban.index', compact('pertanyaan', 'jawaban'));
    }

    public function store($id, Request $request)
    {
    	$jawaban = Jawaban::create([
            'isi' => $request->isi,
            'pertanyaan_id' => $id
        ]);
        return redirect()->back();
        //return view ('items.jawaban.index', compact('pertanyaan', 'jawaban'));
    }
}
