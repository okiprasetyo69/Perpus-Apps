@extends('frontend.templates.default')
    @section('content')
        <h4>Detail buku : </h4>
        <div class="row">
            <div class="col s12 m12">
                <div class="card horizontal hoverable">
                    <img src="{{ $book->getCover() }}">
                    <div class="card-stacked">
                        <div class="card-content">
                            <h4 class="red-text accent-2">
                                {{ $book->title }}
                            </h4>
                            <blockquote><p> {{ $book->description }}</p> </blockquote>
                            <p><i class="material-icons">person</i>: {{ $book->author->name }}</p>
                            <p><i class="material-icons">book</i>: {{ $book->qty }}</p>
                        </div>
                        <div class="card-action">
                            <form action="{{ route('book.borrow', $book) }}" method="POST">
                                @csrf
                                <input type="submit" class="btn red accent-1 right waves-effect waves-light" value="Pinjam Buku">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <h5>Buku lainnya dari penulis <b>{{ $book->author->name }} ... </b></h5>
    <div class="row text-center">
            {{-- {{ dd($book->author->books) }} --}}
        @foreach ($book->author->books->shuffle()->take(4) as $book)
            @include('frontend.templates.components.card-book', [
                'book' => $book,
                ])
        @endforeach
    </div>

    @endsection
