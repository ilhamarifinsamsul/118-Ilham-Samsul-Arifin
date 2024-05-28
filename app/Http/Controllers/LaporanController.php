<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Laporan::all();

        return view('pages.laporanview.index', [
            'laporan' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();

        return view('pages.laporanview.create', [
            'kategori' => $kategori
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payload = $request->all();

        $rules = [
            'description' => 'required',
            'date' => 'required',
            'kategori_id' => 'required',
        ];

        if ($request->hasFile('picture')) {
            $rules['picture'] = 'required|image|mimes:jpeg,jpg,png|max:2048';
        }

        $request->validate($rules);

        $laporan = new Laporan();

        $laporan->description = $payload['description'];
        $laporan->date = $payload['date'];

        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageName = time() . "-" . $image->hashName();
            $image->move("assets/upload/laporan", $imageName);
            $laporan->picture = $imageName;
        }

        $laporan->kategori_id = $payload['kategori_id'];


        return redirect()->route('laporanview.index');
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
