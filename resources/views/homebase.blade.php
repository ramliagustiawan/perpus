@extends('frontend.templates.default')

@section('content')



 {{-- <div class="container"> --}}
    <h1 class="flow-text">KOLEKSI BUKU</h1>

    <blockquote>
    <p>Koleksi Buku yang Bisa Anda Baca & Pinjam</p>
    </blockquote>

    <div class="row">
        @foreach ($books as $book)

            <div class="col s12 m6">

                <div class="card horizontal hoverable">
                    <div class="card-image">
                            <img src="{{ $book->getCover() }}" height="200px">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <a href="{{ route('buku.show',$book) }}">
                                <h6>{{ Str::limit($book->title,30) }}</h6>
                            </a>

                            <p>{{ Str::limit($book->description,50) }}</p>
                        </div>
                        <div class="card-action">

                            <form action="{{ route('buku.borrow',$book) }}" method="POST">
                                @csrf
                                <input type="submit" value="Pinjam Buku" class="btn red accent-1 right waves-effect waves-light">
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        @endforeach

    </div>

    {{-- pagination --}}
    {{ $books->links('vendor.pagination.materialize') }}

@endsection
