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
