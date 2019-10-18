@extends('frontend.templates.default')

@section('content')

<div class="container">
    <h3>Register</h3>
<form action="{{ route('register')}}" class="col s12" method="post">
    @csrf
    <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">person</i>
            <input type="text" class="@error('name') invalid @enderror" name="name"  value="{{ old('name')}}">
            <label for="">Nama</label>

            {{-- teks error --}}
            @error('name')

             <span class="helper-text" data-error="{{ $message}}"></span>

            @enderror

        </div>

        <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" class="validate @error('email') invalid @enderror" name="email"  value="{{ old('email')}}">
                <label for="">Email</label>

                {{-- teks error --}}
            @error('email')

            <span class="helper-text" data-error="{{ $message}}"></span>

           @enderror
        </div>

        <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input type="password" class="@error('password') invalid @enderror" name="password"  value="">
                <label for="">Password</label>

                {{-- teks error --}}
            @error('pasword')

            <span class="helper-text" data-error="{{ $message}}"></span>

           @enderror
        </div>

        <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input type="password" class="@error('password_confirmation') invalid @enderror" name="password_confirmation"  value="">
                <label for="">Password Confirmation</label>

                {{-- teks error --}}
            @error('password_confirmation')

            <span class="helper-text" data-error="{{ $message}}"></span>

           @enderror
        </div>

        <div class="input field right">
            <input type="submit" value="Register" class="vawes-effect waves-light btn red accent-1">
        </div>

    </div>
</form>

</div>

@endsection


