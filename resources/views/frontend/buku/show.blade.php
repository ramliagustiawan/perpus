@extends('frontend.templates.default')

@section ('content')

<h1 class="flow-text">DETAIL BUKU</h1>

<blockquote>
<p>Detail Buku yang Bisa Anda Baca & Pinjam</p>
</blockquote>

<div class="card horizontal hoverable">
    <div class="card-image">
            <img src="{{ $book->getCover() }}" >
    </div>
    <div class="card-stacked">
        <div class="card-content">

            <h4 class="red-text accent-2">{{ $book->title}}</h4>
            <blockquote>
                <p>{{ $book->description }}</p>
            </blockquote>
            <p>
                <div class="i material-icons">person</div>{{ $book->author->name }}
            </p>
            <p>
                <div class="i material-icons">book</div>{{ $book->qty }}
            </p>

        </div>
        <div class="card-action">

                <form action="{{ route('buku.borrow',$book) }}" method="POST">
                    @csrf
                    <input type="submit" value="Pinjam Buku" class="btn red accent-1 right waves-effect waves-light">
                </form>

        </div>
    </div>
</div>



<h5>Buku Lainnya dari Penulis {{ $book->author->name }} ...</h5>

<div class="row">
    @foreach ($book->author->books->shuffle()->take(4) as $book)

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




@endsection
