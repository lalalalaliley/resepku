@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="dashboard" style="width: 100%">
        <h5 class="judul">Resep Terbaru</h5>
        <div class="recipe-container">
            @foreach ($reseps as $resep)
                <div class="recipe-item">
                    <a href="{{ route('resepmakanan.show', $resep->id) }}">
                        <img src="{{ asset('storage/' . $resep->foto_makanan) }}" alt="Foto Makanan" style="max-width:300px;">
                    </a>
                    <!-- Tampilkan jumlah suka -->
                    <p class="suka">{{ $resep->sukaResep->count() }} Orang Menyukai ini</p>
                    <h3>{{ $resep->judul }}</h3>
                    <p>{{ $resep->deskripsi }}</p>
                    @if (auth()->check() && auth()->user()->id == $resep->user_id)
                        <!-- Hanya tampilkan tombol suka jika user sudah login -->
                        <form method="post" action="{{ route('resepmakanan.suka', $resep->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-light">Suka</button>
                        </form>
                    @endif
                </div>
            @endforeach
        </div>

    </div>
@endsection
