

@extends('frontend.templates.default')

@section('content')

    <div class="row">
        <h4>Buku Yang Sedang Dipinjam</h4>

        @foreach($books as $book)

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
                            {{-- <div class="i material-icons">book</div>{{ $book->qty }} --}}
                        </p>
            
                    </div>
                   
                </div>
            </div>

        @endforeach

       
    </div>

@endsection







