@extends('layouts.dashboardadmin')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample" action="{{ url('menu') }}" method="POST" enctype="multipart/form-data">
                    @csrf 
                  <div class="form-group">
                    <label for="exampleInputName1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" name="nama_makanan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Deskripsi</label>
                    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Deskripsi" name="deskripsi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword4">Harga</label>  
                    <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Harga" name="harga">
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label" >Upload Image</label>
                    <input class="form-control" type="file" name="image" id="formFile">
                  </div>
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <button class="btn btn-dark">Cancel</button>
                </form>
              </div>
        </div>
    </div>
@endsection
