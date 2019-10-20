@extends('frontend.templates.default')

@section('content')
{{--  <div class="container">  --}}

        <h1 class="flow-text">Wellcome {{ auth()->user()->name }}</h1>

        <blockquote>
        <p>Selamat Datang di Aplikasi Perpustakaan Online v.1.0</p>
        </blockquote>


    <div class="col s12 m6">

        <div class="card horizontal hoverable">
                       
            <div class="card-stacked">
                <div class="card-content">
                    <a href="#">
                    <h4>Verifikasi Email</h4>
                    </a>
        
                    <h6>{{ __('Langkah Selanjutnya Silahkan cek Kotak Masuk Email Anda ') }}</h6>
                    <h6>{{ __('Klik Untuk Verifikasi') }}</h6>
                </div>
                <div class="card-action">
    
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn red accent-1 right waves-effect waves-light">{{ __('Kirim Konfirmasi Lagi') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    
    </div>
   
{{--  </div>  --}}
@endsection
