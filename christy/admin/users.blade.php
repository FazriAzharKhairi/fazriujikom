@extends('layouts.dashboardadmin')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tabel Pengguna</h4>
      <div class="table-responsive">
        <table class="table table-dark">
          <thead>
            <tr>
              <th>ID</th>
              <th> Nama </th>
              <th> Email </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                @if (Auth::check() && Auth::user()->usertype == "1")
                <td> <form action="{{ route('users.destroy', $user->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"> Hapus </button>
                </form></td>
                @else
                @endif
            </tr>
        @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    
@endsection