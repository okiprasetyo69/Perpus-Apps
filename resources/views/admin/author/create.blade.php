@extends('admin.templates.default')
    @section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="box-title">Tambah data penulis</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.author.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for=""> Nama</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukan nama penulis" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Tambah" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
