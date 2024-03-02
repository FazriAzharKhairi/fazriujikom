@extends('layouts.dashboardadmin')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tabel Reservasi</h4>
      <div class="table-responsive">
        <table class="table table-dark">
          <thead>
            <tr>
              <th>ID</th>
              <th> Nama </th>
              <th> Email </th>
              <th> No Telepon </th>
              <th> Jumlah Tamu </th>
              <th> Waktu </th>
              <th> Pesan </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
            @foreach($bookings as $b)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $b->name }}</td>
                <td>{{ $b->email }}</td>
                <td>{{ $b->phone }}</td>
                <td>{{ $b->people}}</td>
                <td>{{ $b->date }}</td>
                <td>{{ $b->message }}</td>
                <td> <form action="{{ route('bookings.destroy', $b->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"> Hapus </button>
                </form></td>
            </tr>
        @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    
@endsection