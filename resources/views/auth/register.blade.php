@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
       
        <div class="col-md-4" id="col-md-4" style="margin-top: 8%;">
            <div class="card" style="border-radius: 0px;border:none !important">
                
                <div class="card-body" style="background: none">
                   
                        <img src="{{url('icon/tugu.jpg')}}" style="width:100%;">
                    
                </div>
            </div>
        </div>
        <div class="col-md-8" style="margin-top: 8%;">
            <div class="card" style="border-radius: 0px;">
                <!-- <div class="card-header" style="background: rgb(39 58 152 / 20%);border-radius: 0px;">
                    Registrasi
                </div> -->

                <div class="card-body" style="background: rgb(39 58 152 / 7%);">
                    <h3><u>Registrasi</u></h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">NIK</label>

                            <div class="col-md-6">
                                <input id="nik" type="number" placeholder="Ketik disini" maxlength="13" class="form-control{{ $errors->has('nik') ? ' is-invalid' : '' }}" name="nik" value="{{ old('nik') }}" required autofocus>

                                @if ($errors->has('nik'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nik') }}</strong>
                                    </span>
                                @else
                                    <span style="font-size:12px;color:#a0a0ab">
                                        <strong>Nomor Induk Kependudukan</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" placeholder="Ketik disini" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @else
                                    <span style="font-size:12px;color:#a0a0ab">
                                        <strong>Nama sesuai KTP</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Ketik disini" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>

                                @else
                                    <span style="font-size:12px;color:#a0a0ab">
                                        <strong>Email yang aktif</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" placeholder="Ketik disini" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @else
                                    <span style="font-size:12px;color:#a0a0ab">
                                        <strong>Minimal 6 Karakter</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Ketik disini" type="password" class="form-control" name="password_confirmation" required>
                                <span style="font-size:12px;color:#a0a0ab">
                                    <strong>&nbsp;</strong>
                                </span>
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
@endsection
