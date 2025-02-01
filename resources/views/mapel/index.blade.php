@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #fff;
        margin: 0;
        padding: 0;
    }
    .header {
        background-color: #C48A8A;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .header img {
        height: 50px;
    }
    .header h1 {
        margin: 0;
        font-size: 24px;
        color: #000;
    }
    .header nav a {
        margin-left: 20px;
        text-decoration: none;
        color: #000;
        font-size: 18px;
    }
    .container {
        padding: 20px;
    }
    .table-container {
        background-color: #FBCBCB;
        padding: 20px;
        border-radius: 10px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
        text-align: left;
        border: 1px solid #000;
    }
    th {
        background-color: #D99A9A;
        color: #000;
    }
    td {
        background-color: #D99A9A;
    }
    .add-button {
        background-color: #8B5A5A;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        font-size: 16px;
        margin-bottom: 20px;
        display: inline-block;
    }
    .back-arrow {
        position: absolute;
        top: 20px;
        left: 20px;
    }
    .back-arrow i {
        font-size: 24px;
        color: #C48A8A;
    }
</style>

<div class="container">
    <a href="{{ route('mapel.create') }}" class="add-button">TAMBAH MAPEL</a>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mapel</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mapels as $key => $mapel)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mapel->namaMapel }}</td>
                    <td class="text-center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('mapel.destroy', $mapel->id) }}" method="POST">
                            <a href="{{ route('mapel.edit', $mapel->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">
                        <div class="alert alert-warning">
                            Tidak ada data mapel tersedia.
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
