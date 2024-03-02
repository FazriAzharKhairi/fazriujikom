@extends('layouts.dashboardadmin')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Menu</h4>
                <a href="{{ route('menu.create') }}">Tambah data</a>
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Nama Makanan </th>
                                <th> Deskripsi </th>
                                <th> Harga </th>
                                <th> Image </th>
                                <th> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menus as $m)
                                <tr>
                                    <td> {{ $loop->iteration }}</td>
                                    <td> {{ $m->nama_makanan }}</td>
                                    <td> {{ $m->deskripsi }}</td>
                                    <td> {{ $m->harga }} </td>
                                    <td>
                                        <img src="{{ asset('gambar/' . $m->image) }}" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ url('menu/' . $m->id . '/edit') }}"
                                            class="btn btn-warning btn-sm">edit</a>
                                        <form action="{{ url('menu/' . $m->id) }}" method="POST"
                                            enctype="multipart/form-data" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('yakin ingin menghapus data ini?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
