@extends('layouts.app')

@section('container')
  <div class="row justify-content-center align-items-center" style="height: 100vh">
    <div class="col-md-5">
      <div class="card">
        <div class="card-header">
          <h2 class="text-center">
            Form Data
          </h2>
        </div>
        <div class="card-body">
          <form action="/update/{{ $data->id }}" method="post">
            @csrf
            <div class="mb-3 form-group">
              <label for="name">Nama</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukkan nama" autofocus required value="{{ old('name', $data->name) }}">
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3 form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan email" required value="{{ old('email', $data->email) }}">
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3 form-group">
              <label for="job">Pekerjaan</label>
              <input type="text" class="form-control @error('job') is-invalid @enderror" id="job" name="job" placeholder="Masukkan Pekerjaan" required value="{{ old('job', $data->job) }}">
              @error('job')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3 form-group">
              <label for="address">Alamat</label>
              <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror" placeholder="Masukan alamat" required>{{ old('address', $data->address) }}</textarea>
              @error('address')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3 form-group">
              <button class="btn btn-primary" type="submit" style="width: 100%; height: 40px">Perbarui</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection