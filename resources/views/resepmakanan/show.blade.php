@extends('layouts.app')
@section('title', $resep->judul)
@section('content')
    <div>
        <img src="{{ asset('storage/' . $resep->foto_makanan) }}" alt="Foto Makanan" style="max-width: 100%; max-height: 600px; width: 1060px;">
        <h3>{{ $resep->judul }}</h3>
        <p>{{ $resep->deskripsi }}</p>
        <h4>Bahan - Bahan</h4>
        <dl>
            @foreach(json_decode($resep->bahan_makanan) as $bahan)
                <dd>{{ $bahan }}</dd>
            @endforeach
        </dl>
        <h4>Langkah Pembuatan</h4>
        <ol>
            @foreach(json_decode($resep->langkah_pembuatan) as $langkah)
                <li>{{ $langkah }}</li>
            @endforeach
        </ol>
    </div>
@endsection
