<?php

namespace App\Http\Controllers;

use App\Models\ResepMakanan;
use App\Models\SukaResep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResepMakananController extends Controller
{
    public function index()
    {
        $reseps = ResepMakanan::latest()->get();

        return view('resepmakanan.dashboard', compact('reseps'));
    }

    public function tambah()
    {
        return view('resepmakanan.tambah');
    }

    public function show($id)
    {
        $resep = ResepMakanan::findOrFail($id);

        return view('resepmakanan.show', compact('resep'));
    }


    public function simpan(Request $request)
    {

        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'bahan_makanan' => 'required|array',
            'bahan_makanan.*' => 'required|string',
            'langkah_pembuatan' => 'required|array',
            'langkah_pembuatan.*' => 'required|string',
            'foto_makanan' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user_id = auth()->user()->id;

        $fotoMakananPath = null;
        if ($request->hasFile('foto_makanan')) {
            $fotoMakananPath = $request->file('foto_makanan')->store('foto_makanan');
        }

        ResepMakanan::create([
            'judul' => $validatedData['judul'],
            'user_id' => $user_id,
            'deskripsi' => $validatedData['deskripsi'],
            'bahan_makanan' => json_encode($validatedData['bahan_makanan']),
            'langkah_pembuatan' => json_encode($validatedData['langkah_pembuatan']),
            'foto_makanan' => $fotoMakananPath,
        ]);

        return redirect()->back();
    }

    public function sukaResep($id)
    {
        $resep = ResepMakanan::findOrFail($id);

        SukaResep::create([
            'user_id' => auth()->user()->id,
            'resep_id' => $resep->id,
        ]);

        return redirect()->back()->with('success', 'Resep disukai!');
    }
}
