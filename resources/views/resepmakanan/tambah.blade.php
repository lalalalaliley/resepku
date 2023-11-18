@extends('layouts.app')
@section('title', 'Tambah Resep')
@section('content')
    <div class="tambah_resep">
        <form method="post" action="{{ route('resepmakanan.tambah.simpan') }}" enctype="multipart/form-data">
            @csrf
            <h5>Tulis Resepmu ...</h5>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control">
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label ">Deskripsi</label>
                <textarea type="text" name="deskripsi" class="form-control"></textarea>
            </div>
            <!-- Bagian Bahan Makanan -->
            <div class="mb-3 ">
                <h6 for="bahan_makanan" class="form-label">Bahan Bahan</h6>
                <input type="text" name="bahan_makanan[]" class="form-control" style="margin-bottom: 10px;">
            </div>
            <p onclick="addBahan()" style="cursor: pointer; color: rgb(0, 0, 0); margin-bottom: 10px;"> + Item Bahan</p>
            <!-- Bagian Langkah Pembuatan -->
            <div class="mb-3">
                <h6 for="langkah_pembuatan" class="form-label ">Langkah Pembuatan</h6>
                <input type="text" name="langkah_pembuatan[]" class="form-control" style="margin-bottom: 10px;">
            </div>
            <p onclick="addLangkah()" style="cursor: pointer; color: rgb(0, 0, 0); margin-bottom: 10px;">+ Item Langkah</p>

            <div class="mb-3">
                <label for="foto" class="form-label">Upload Foto Masakan</label>
                <input type="file" name="foto_makanan" class="form-control">
            </div>
            <button type="submit" class="btn btn-light">Terbitkan Resep</button>
        </form>
    </div>
    <script>
        function addBahan() {
            var bahanContainer = document.querySelector('[name="bahan_makanan[]"]').parentNode;
            var bahanInput = document.createElement("input");
            bahanInput.type = "text";
            bahanInput.name = "bahan_makanan[]";
            bahanInput.className = "form-control";
            bahanInput.style.marginBottom = "10px"; // Atur spasi di sini
            bahanContainer.appendChild(bahanInput);
        }

        function addLangkah() {
            var langkahContainer = document.querySelector('[name="langkah_pembuatan[]"]').parentNode;
            var langkahInput = document.createElement("input");
            langkahInput.type = "text";
            langkahInput.name = "langkah_pembuatan[]";
            langkahInput.className = "form-control";
            langkahInput.style.marginBottom = "10px"; // Atur spasi di sini
            langkahContainer.appendChild(langkahInput);
        }
    </script>
@endsection
