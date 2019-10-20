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
        <a href="#" class="btn red accent-1 right waves-effect waves-light">Pinjam Buku</a>
        </div>
    </div>
</div>




@endsection
