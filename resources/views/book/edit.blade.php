@extends('template.template')
@section('judul_halaman', 'Edit Buku')
@section('konten')
    <form action="{{ route('book.update', $data->id) }}" method="POST">
        @csrf
        @method('patch')
        <div class="mt-2">
            <label for="fieldJudul">Judul</label>
            <input type="text" value="{{ $data->judul }}" id="fieldJudul" name="judul">
        </div>
        <div class="mt-2">
            <label for="fieldNamaPemilik">Nama Pemilik</label>
            <input type="text" value="{{ $data->nama_pemilik }}" id="fieldNamaPemilik" name="nama_pemilik">
        </div>
        <div class="mt-2">
            <button type="submit">Update</button>
        </div>
    </form>
@endsection
