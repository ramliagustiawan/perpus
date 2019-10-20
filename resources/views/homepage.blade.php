<!DOCTYPE html>
<html>
 
  {{-- head --}}
  @include ('frontend.templates.partials.head')

  <body>

     {{-- nav --}}
     @include('frontend.templates.partials.nav')

     

  {{-- slider --}}

  <div class="slider">
    <ul class="slides">
      <li>
        <img src="{{ asset ('assets/images/slider1.png') }}"> <!-- random image -->
        <div class="caption left-align">
          <h3>SIP PATEN</h3>
          <h5 class="light grey-text text-lighten-3">SISTEM INFORMASI, PELAPORAN DAN PELAYANAN TERPADU KECAMATAN</h5>
        </div>
      </li>
    </ul>
    </div>

    {{-- our services --}}
    <section id="services" class="services grey lighten-3">
        <div class="container">
            <div class="row">
                <h3 class="ligt center grey-text-darken-3">Layanan</h3>
                <div class="col m4 s12">
                    <div class="card-panel center hoverable">
                        <i class="material-icons small">record_voice_over</i>
                        <h5>Informasi Layanan</h5>
                        <p>Informasi Status Layanan yang anda ajukan</p>
                        <div class="card-action center">
                          <a href="{{ route('infolayanan.index') }}" class="vawes-effect waves-light btn red accent-1">Info</a>
                        </div>

                    </div>
                </div>

                 <div class="col m4 s12">
                    <div class="card-panel center hoverable">
                        <i class="material-icons small">desktop_mac</i>
                        <h5>E-Layanan</h5>
                        <p>Silahkan ajukan layanan yang anda butuhkan</p>
                        <div class="card-action center">
                          <a href="{{ route('service.index') }}" class="vawes-effect waves-light btn red accent-1">Ajukan</a>
                        </div>

                    </div>
                </div>

                 <div class="col m4 s12">
                    <div class="card-panel center hoverable">
                        <i class="material-icons small">phone_in_talk</i>
                        <h5>Pelaporan</h5>
                        <p>Silahkan sampaikan Pengaduan/keluhan Anda </p>
                        <div class="card-action center">
                          <a href="{{ route('lapor.index') }}" class="vawes-effect waves-light btn red accent-1">Laporkan</a>
                        </div>

                    </div>
                </div>



            </div>
        </div>

    </section>



         <!--JavaScript at end of body for optimized loading-->
         @include('frontend.templates.partials.script')




  </body>

  @include('frontend.templates.partials.footer')
  
</html>
