<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Laporan;
use App\Models\User;
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
        $user = User::all();

        return view('pages.laporanview.create', [
            'kategori' => $kategori,
            'user' => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payload = $request->all();

        $rules = [
            'user_id' => 'required',
            'description' => 'required',
            'date' => 'required',
            'kategori_id' => 'required'
        ];

        if ($request->hasFile('picture')) {
            $rules['picture'] = 'required|image|mimes:jpeg,jpg,png|max:2048';
        }

        $request->validate($rules);

        $laporan = new Laporan();

        $laporan->user_id = $payload['user_id'];
        $laporan->description = $payload['description'];
        $laporan->date = $payload['date'];

        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageName = time() . "-" . $image->hashName();
            $image->move("assets/upload/laporan", $imageName);
            $laporan->picture = $imageName;
        }

        $laporan->kategori_id = $payload['kategori_id'];

        $laporan->save();

        return redirect()->route('laporanview.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Laporan::find($id);

        return view('pages.laporanview.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Laporan::find($id);
        $kategori = Kategori::all();
        $user = User::all();

        return view('pages.laporanview.edit', [
            'data' => $data,
            'kategori' => $kategori,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payload = $request->all();
        $laporan = Laporan::find($id);

        $rules = [
            'description' => 'required',
            'kategori_id' => 'required'
        ];

        $request->validate($rules);

        $laporan->description = $payload['description'];
        $laporan->date = $payload['date'];

        // $laporan->kategori_id = $payload['kategori_id'];

        $laporan->save();

        return redirect()->route('laporanview.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Laporan::findOrFail($id);

        $data->delete();

        return redirect()->route('laporanview.index');
    }
}
