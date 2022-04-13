@extends('layouts.app')

@section('container')
<div class="card mt-5">
  <div class="card-header">
    <h2 class="text-center">Posts</h2>
  </div>
  <div class="card-body">
    <a href="/create" class="btn btn-primary mb-3">Tambah data</a>
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <thead class="table-dark">
          <tr class="text-center">
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pekerjaan</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody class="table-light">
          @foreach ($posts as $post)
          <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->email }}</td>
                <td>{{ $post->job }}</td>
                <td>{{ $post->address }}</td>
                <td>
                  <a href="/edit/{{ $post->id }}" class="badge bg-warning text-dark text-decoration-none">Edit</a>
                  <form action="/delete/{{ $post->id }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="badge bg-danger border-0" onclick="return confirm('yakin ingin menhapus data ini?')">Hapus</button>
                  </form>
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
      

