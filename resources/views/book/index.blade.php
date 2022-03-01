@extends('template.template')
@section('judul_halaman', 'Data Buku')
@section('konten')
    <table border="1" >
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Nama Pemilik</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
            {{-- fungsi foreach diatas adalah untuk merubah $datas yang berupa array menjadi $data yang isinya bukan merupakan array --}}
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    {{-- $loop->iteration adalah property bawaan blade untuk membuat auto number berdasarkan hasil looping --}}
                    <td>{{ $data->judul }}</td>
                    <td>{{ $data->nama_pemilik }}</td>
                    <td>
                        <a href="{{ route('book.edit', $data->id) }}">Edit</a>
                        <br>
                        <form action="{{ route('book.destroy', $data->id) }}" method="post">
                        @csrf
                        @method('delete')
                            <button type="submit" onclick="return confirm('Hapus Data Ini?')">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection



