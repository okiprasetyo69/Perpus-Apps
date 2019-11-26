@extends('admin.templates.default')
    @section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="box-title">Ubah data buku</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.book.update', $book) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <label for=""> Judul</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Masukan judul buku" value="{{ $book->title ?? old('title') }}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for=""> Deskripsi</label>
                                <textarea name="description" id="" rows="3" class="form-control @error('description') is-invalid @enderror" placeholder="Tuliskan deskripsi buku">{{ $book->description ?? old('description') }} </textarea>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for=""> Penulis </label>
                                <select name="author_id" id="" class="form-control select2">
                                    @foreach($authors as $author)
                                        <option  value="{{ $author->id }}"
                                            @if ($author->id === $book->author_id)
                                                selected
                                            @endif
                                        >
                                            {{ $author->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('author_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for=""> Sampul Buku </label>
                                <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror">
                                @error('cover')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for=""> Jumlah Buku  </label>
                                <input type="text" name="qty" class="form-control @error('qty') is-invalid @enderror" placeholder="Masukan jumlah buku" value="{{ $book->qty ?? old('qty') }}">
                                @error('qty')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Ubah" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection

@push('select2css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"> </script>
    <script>
        $('.select2').select2();
    </script>
@endpush
