@extends('frontend.templates.default')

@section('content')

<h2 class="center flow-text">Pengaduan dan Pelaporan </h2>

{{-- PERIJINAN --}}
<hr width="100%">

<blockquote>
    <P class="flow-text"><h6>Sampaikan Keluhan , Masukan dan Saran Anda Kami Menjamin Kerahasiaanya</h6></P>
</blockquote>

    <div class="row">
        <div class="col m5 s12">
            <div class="card-panel blue darken-2 center white-text">
                
                <i class="material-icons small">email</i>
                <h5>Contact</h5>
                <p>dungingioffice@gmail.com </p>

            </div>
            <ul class="collection with-header">
                <li class="collection-header"><h5>Pemerintah Kecamatan Dungingi</h5></li>
                <li class="collection-item">Jalan Apel II</li>
                <li class="collection-item">Kelurahan Huangobotu</li>
                <li class="collection-item">(0435)8526697</li>
            </ul>
        </div>
        <div class="col m7 s12">
            <form>
                <div class="card-panel">
                    <h5>Silahkan Di Isi</h5>

                    <div class="input-field">
                        <input type="text" name="name" id="name" required>
                        <label for="name">Nama</label>
                    </div>
                    <div class="input-field">
                        <input type="email" name="email" id="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field">
                        <input type="text" name="phone" id="phone">
                        <label for="email">Phone Number</label>
                    </div>
                    <div class="input-field">
                        <textarea  name="message" id="message" class="materialize-textarea"></textarea>
                         <label for="message">Pesan</label>
                    </div>

                    <div class="card-action center">
                        <button type="submit" class="vawes-effect waves-light btn red accent-1">Kirim</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

        


@endsection
