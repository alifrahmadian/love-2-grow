{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="registration-card w-50">
            <p class="mt-5 text-center registration-desc ">
                Selamat Datang di Love2Grow Clinic. Silakan untuk membuat akun terlebih dahulu sebelum melakukan pendaftaran pasien! Form registrasi ini merupakan data dari orangtua atau keluarga pasien.
            </p>

            <p class=text-center>Sudah punya akun? Silakan <a href="/login">login</a></p>

    
            <form class="align-self-center mb-4 w-100" action="{{ ROUTE('register') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="phone_number">Nomor Telepon</label>
                    <input type="tel" class="form-control" name="phone_number">
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <textarea class="form-control" name="address" cols="30" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="member_job">Pekerjaan</label>
                    <input type="text" class="form-control" name="member_job">
                </div>
                <div class="form-group">
                    <label for="patient_relation">Hubungan dengan pasien</label>
                    <select class="form-control" name="patient_relation" id="">
                        <option value="Ayah">Ayah</option>
                        <option value="Ibu">Ibu</option>
                        <option value="Kakak">Kakak</option>
                        <option value="Adik">Adik</option>
                        <option value="Paman">Paman</option>
                        <option value="Bibi">Bibi</option>
                        <option value="Sepupu">Sepupu</option>
                        <option value="Keponakan">Keponakan</option>
                        <option value="Nenek">Nenek</option>
                        <option value="Kakek">Kakek</option>
                    </select>
                </div>
    
                <div class="registerButtonWrapper mb-5 text-center">
                    <button class="button mb-2 reg-submit-button" type="submit">Daftar</button>
                </div>
            </form>
        </div>
        


    </div>
    

@endsection()