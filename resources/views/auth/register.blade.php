@extends ('layout')

@section('title', 'register')

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body"  style="background-color:#e8eaef;">

                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style=  "font-size: 2em;font-family: 'Nunito'">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"  autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback"style="font-size: 1.2em;font-family: 'Nunito'">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                  <label for="lastname" class="col-md-4 col-form-label text-md-right"style=  "font-size: 2.2em;font-family: 'Nunito'">{{ __('Apellido') }}</label>

                                  <div class="col-md-6">
                                      <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}"  autofocus>

                                      @if ($errors->has('lastname'))
                                        <span class="invalid-feedback"style="font-size: 1.2em;font-family: 'Nunito'">
                                          <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                      @endif
                                  </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right"style=  "font-size: 2em;font-family: 'Nunito'">{{ __('Teléfono') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}"  autofocus>

                                @if ($errors->has('phone'))
                                   <span class="invalid-feedback"style="font-size: 1.2em;font-family: 'Nunito'">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                   </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adress" class="col-md-4 col-form-label text-md-right"style= "font-size: 2em;font-family: 'Nunito'">{{ __('Domicilio') }}</label>

                            <div class="col-md-6">
                                <input id="adress" type="text" class="form-control{{ $errors->has('adress') ? ' is-invalid' : '' }}" name="adress" value="{{ old('adress') }}"  autofocus>

                                @if ($errors->has('adress'))
                                    <span class="invalid-feedback"style="font-size: 1.2em;font-family: 'Nunito'">
                                        <strong>{{ $errors->first('adress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"style=  "font-size: 2em;font-family: 'Nunito'">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback"style="font-size: 1.2em;font-family: 'Nunito'">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"style=  "font-size: 2em;font-family: 'Nunito'">Subí tu imagen</label>

                            <div class="col-md-6">
                                <input id="avatar" type="file" class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar" >

                                @if ($errors->has('avatar'))
                                    <span class="invalid-feedback"style="font-size: 1.2em;font-family: 'Nunito'">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"style=  "font-size: 2em;font-family: 'Nunito'">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback"style="font-size: 1.2em;font-family: 'Nunito'">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"style=  "font-size: 2em;font-family: 'Nunito'">{{ __('Confirma tu Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="BORDER:rgb(142, 170, 158); background-color:rgb(142, 170, 158);font-family: 'Nunito';font-size: 2em" >
                                    {{ __('Registrate') }}
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
