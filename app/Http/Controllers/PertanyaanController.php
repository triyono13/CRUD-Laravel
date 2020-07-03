<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaan = Pertanyaan::paginate(10);
        return view ('items.pertanyaan.index', compact('pertanyaan'));
    }

    public function create()
    {
        return view ('items.pertanyaan.create', compact('category'));
    }

    public function store(Request $request)
    {
        $pertanyaan = Pertanyaan::create([
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);
        return redirect('pertanyaan');
    }
}
