@extends('layout.layout')

@section('content')

  <div class="container mt-3">
    <!-- <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">User</li>
          </ol>
        </nav>
      </div>
    </div> -->
    <div class="row">
      <div class="col-12">
        <div class="py-4 d-flex justify-content-between align-items-center">
          <h2>Tabel user</h2>
          <a href="{{ route('users.create') }}" class="btn btn-primary">
            Tambah User
          </a>
        </div>
        @if(session()->has('pesan'))
        <div class="alert alert-success">
          {{ session()->get('pesan')}}
        </div>
        @endif
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Password</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($users as $user)
            <tr>
              <th>{{$loop->iteration}}</th>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->password}}</td>
              <td>
                <a href="{{ route('users.edit', ['user' =>$user->id]) }}" class="btn btn-dark">Ubah</a>
                <a href="{{ route('users.destroy', ['user' =>$user->id]) }}" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            @empty
            <td colspan="6" class="text-center">Tidak ada data...</td>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection