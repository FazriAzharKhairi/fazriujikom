@extends('layouts.dashboardadmin')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Chef</h4>
                <a href="{{ route('chef.create') }}">Tambah data</a>
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Nama Chef </th>
                                <th> Keahlian </th>
                                <th> Image </th>
                                <th> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($chefs as $c)
                                <tr>
                                    <td> {{ $loop->iteration }}</td>
                                    <td> {{ $c->nama }}</td>
                                    <td> {{ $c->keahlian }}</td>
                                    <td>
                                        <img src="{{ asset('gambar/' . $c->image) }}" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ url('chef/' . $c->id . '/edit') }}"
                                            class="btn btn-warning btn-sm">edit</a>
                                        <form action="{{ url('chef/' . $c->id) }}" method="POST"
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
