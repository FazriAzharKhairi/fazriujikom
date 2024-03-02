@extends('layouts.dashboardadmin')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample" action="{{ url('menu/' . $menu->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf 
                    @method('PUT')
                  <div class="form-group">
                    <label for="nama_makanan">Nama</label>
                    <input type="text" class="form-control" id="nama_makanan" placeholder="nama_makanan" name="nama_makanan" value="{{ $menu->nama_makanan }}">
                  </div>
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" name="deskripsi" value="{{ $menu->deskripsi }}">
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" placeholder="harga" name="harga" value="{{ $menu->harga }}">
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label" >Upload Image</label>
                    <img src="{{ asset("gambar/$menu->image") }}" alt="" style="width: 7rem;">
                    <input class="form-control" type="file" name="image" id="formFile">
                  </div>
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <button class="btn btn-dark">Cancel</button>
                </form>
              </div>
        </div>
    </div>
@endsection
