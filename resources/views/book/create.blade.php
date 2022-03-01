@extends('template.template')
@section('judul_halaman', 'Tambah Buku')
@section('konten')
    <form action="{{ route('book.store') }}" method="POST">
        @csrf
        <div class="mt-2">
            <label for="fieldJudul">Judul</label>
            <input type="text" id="fieldJudul" name="judul">
        </div>
        <div class="mt-2">
            <label for="fieldNamaPemilik">Nama Pemilik</label>
            <input type="text" id="fieldNamaPemilik" name="nama_pemilik">
        </div>
        <div class="mt-2">
            <button type="submit">Kirim</button>
        </div>
    </form>
@endsection
