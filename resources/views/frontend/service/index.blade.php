@extends('frontend.templates.default')

@section('content')

<h2 class="center flow-text">PELAYANAN ONLINE KECAMATAN DUNGINGI </h2>

{{-- PERIJINAN --}}
<hr width="100%">

<blockquote>
    <P class="flow-text">1. Pelayanan Perijinan</P>
</blockquote>


@foreach ($service as $serv)

    <div class="row">

        <div class="col s12 m3">
          <div class="card hoverable">

            <div class="card-image center">
                <i class="large material-icons center">library_books</i>
              {{-- <img src="images/sample-1.jpg"> --}}

            </div>
            <div class="center">
                <span class="card-title" style="font-weight: bold">{{ $serv->title}}</span>
                <br>
              <span>{{ $serv->description}}</span>
            </div>

            <div class="card-action center">
              <a href="{{ route('service.create')}}" class="vawes-effect waves-light btn red accent-1">Ajukan</a>
            </div>

          </div>
        </div>
        @endforeach

    </div>

    



    {{-- NONPERIJINAN --}}

    <hr width="100%">
    <blockquote>
        <P class="flow-text">2. Pelayanan Non Perijinan</P>
    </blockquote>

    <div class="row">

        @foreach ($service as $serv)

            <div class="col s12 m3">
          <div class="card hoverable">

            <div class="card-image center">
                <i class="large material-icons center">library_books</i>
              {{-- <img src="images/sample-1.jpg"> --}}

            </div>
            <div class="center">
                <span class="card-title" style="font-weight: bold">{{ $serv->title}}</span>
                <br>
              <span>{{ $serv->description}}</span>
            </div>

            <div class="card-action center">
              <a href="{{ route('service.create')}}" class="vawes-effect waves-light btn red accent-1">Ajukan</a>
            </div>

          </div>
        </div>

        @endforeach

        <br>

    </div>

    <ul class="pagination center">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>


@endsection
