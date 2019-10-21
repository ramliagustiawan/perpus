@extends('frontend.templates.default')

@section('content')

 {{-- <div class="container"> --}}
    <h1 class="flow-text">KOLEKSI BUKU</h1>

    <blockquote>
    <p>Koleksi Buku yang Bisa Anda Baca & Pinjam</p>
    </blockquote>

    <div class="row">
        @foreach ($books as $book)

            {{-- bisa juga pakai include --}}
            @component('frontend.templates.components.card-book',
                [
                    'book'=>$book
                ])
            @endcomponent

        @endforeach

    </div>

    
    {{-- pagination --}}
    {{ $books->links('vendor.pagination.materialize') }}
   

@endsection
