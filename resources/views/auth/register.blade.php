@extends ('layout')

@section('title', 'register')

@section('content')
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"style="font-size: 2em;font-family: 'Nunito'">{{ __('Register') }}</div>

                <div class="card-body"  style="background-color:#e8eaef;">

                    <form method="POST" id="form" name="myForm" action="{{ route('register') }}" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style=  "font-size: 2em;font-family: 'Nunito'">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"  autofocus>

                                 <span style="color: red; display: block;" id="errorName"></span>

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

                                      <span style="color: red; display: block;" id="errorLastName"></span>

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
                                <span style="color: red; display: block;" id="errorPhone"></span>
                                @if ($errors->has('phone'))
                                   <span class="invalid-feedback"style="font-size: 1.2em;font-family: 'Nunito'">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                   </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right"style= "font-size: 2em;font-family: 'Nunito'">{{ __('Domicilio') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}"  autofocus>
                                <span style="color: red; display: block;" id="errorAddress"></span>
                                @if ($errors->has('address'))
                                    <span class="invalid-feedback"style="font-size: 1.2em;font-family: 'Nunito'">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                             <label for="country" class="col-md-4 col-form-label text-md-right"style= "font-size: 2em;font-family: 'Nunito'">{{ __('País') }}
                             </label>

                            <div class="col-md-6">
                              <select id="country" name="country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}"  autofocus>
                                  <option value=""> Por favor elegí un País </option>
                              </select>

                                @if ($errors->has('country'))
                                    <span class="invalid-feedback"style="font-size: 1.2em;font-family: 'Nunito'">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                             <label for="regiones" class="col-md-4 col-form-label text-md-right"style= "font-size: 2em;font-family: 'Nunito'">{{ __('Provincia') }}
                             </label>

                            <div class="col-md-6">
                              <select id="regiones" name="regiones" class="form-control{{ $errors->has('regiones') ? ' is-invalid' : '' }}" name="regiones" value="{{ old('regiones') }}"  autofocus>
                                  <option value=""> Por favor elegí una provincia </option>
                              </select>

                                @if ($errors->has('regiones'))
                                    <span class="invalid-feedback"style="font-size: 1.2em;font-family: 'Nunito'">
                                        <strong>{{ $errors->first('regiones') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"style=  "font-size: 2em;font-family: 'Nunito'">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >
                                <span style="color: red; display: block;" id="errorEmail"></span>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback"style="font-size: 1.2em;font-family: 'Nunito'">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right"style=  "font-size: 2em;font-family: 'Nunito'">Subí tu imagen</label>

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
                                <span style="color: red; display: block;" id="errorPassword"></span>
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
                                <span style="color: red; display: block;" id="errorPassword-confirm"></span>
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


<script>

// onsubmit= "return validateForm()"

  // window.onload = function () {
  //

  //   // console.log(unForm);
  //
  //
    // var nameInput = document.querySelector('[name="name"]');
    // if (nameInput.value.length === 0){    //Validación del campo NAME
    //   console.log('completa tu nombre');
    // }
  //
  //   var nameInput = document.querySelector('[lastname="lastname"]');
  //   if (lastnameInput.value.length === 0){    //Validación del campo LASTNAME
  //     console.log('completa tu Apellido');
  //   }
  // }
    //   var form = document.forms[0];
      // var name = document.getElementById("name").innerHTML;

    //   var lastname = document.getElementById("lastname").value;
    //   var phone = document.getElementById("phone").value;
    //   var address = document.getElementById("address").value;
    //   var country = document.getElementById("country").value;
    //   var regiones = document.getElementById("regiones").value;
    //   var email = document.getElementById("emial").value;
    //   var pass = document.getElementById("password").value;
    //   var rpass = document.getElementById("password-confirm").value;
    //
      // var validateName = function(e) {
      //   if (name == ''){
      // 	alert(name);
      // 	e.preventDefault();
      //   }
      // };
      //
      // var validateLastname = function(e) {
      //   if (lastname.trim() == ''){
      //   	alert('Por favor completa tu apellido');
      //   	e.preventDefault();
      //   }
      // };
    //
    //   var validate_phone = function (e) {
    //     if (phone.trim() == ''){
    //     	alert('Por favor completa tu teléfono');
    //     	e.preventDefault();
    //     }
    //   };
    //
    //   var validate_address = function (e) {
    //     if (address.trim() == ''){
    //     	alert('Por favor completa tu dirección');
    //     	e.preventDefault();
    //     }
    //   };
    //
    //   var validate_country = function (e) {
    //       if (country.trim() == ''){
    //       	alert('Por favor ingresa un país');
    //       	e.preventDefault();
    //       }
    //   };
    //
    //   var validate_regiones = function (e) {
    //       if (regiones.trim() == ''){
    //       	alert('Por favor ingresa una Provincia');
    //       	e.preventDefault();
    //       }
    //   };
    //
    //   var validate_email = function (e) {
    //     if (email.trim() == ''){
    //     	alert('Por favor completa tu email');
    //     	e.preventDefault();
    //     }
    //   };
    //
    //   var validate_pass = function (e) {
    //       if (pass.trim() == ''){
    //       	alert('Por favor completa tu password');
    //       	e.preventDefault();
    //       }
    //   };
    //
    //   var validate_rpass = function (e) {
    //       if (rpass.trim() == '') {
    //       	alert('Por favor completa la pass nuevamente');
    //       	e.preventDefault();
    //       }
    //   };
    //
    //   var validate_rpass2 = function (e) {
    //     if (rpass.trim() != pass.trim()) {
    //     	alert('Por favor completa la pass nuevamente');
    //     	e.preventDefault();
    //     }
    //   };

      // var validateForm = function (e) {
      //   validateName(e);
      //   validateLastname(e);
    //     validate_phone(e);
    //     validate_address(e);
    //     validate_country(e);
    //     validate_regiones(e);
    //     validate_email(e);
    //     validate_pass(e);
    //     validate_rpass(e);
    //     validate_rpass2(e);
      //};
    //
    // form.addEventListener("submit",validateForm());


    //AJAX para PAÍSES

    var selectPaises = document.querySelector('#country');
    var selectRegiones = document.querySelector('#regiones');

    selectRegiones.style.display = 'none';

    var urlPaises = 'http://pilote.techo.org/?do=api.getPaises';
    var urlRegiones = 'http://pilote.techo.org/?do=api.getRegiones?idPais=';

    pedidoAjax(urlPaises, cargarPaises);

    function pedidoAjax (url, laFuncion) {
        fetch(url)
        .then(function (response) {
          return response.json();
        })
        .then(function (data) {
          var loQueDeseo = data.contenido;
          laFuncion(loQueDeseo);
        })
        .catch(function (error) {
          console.error(`ERROR: ${error}`);
        });
    };

    function cargarPaises (country) {
        for (var n in country) {
        var option = `<option value="${country[n]}"> ${n} </option>`;
        selectPaises.innerHTML += option;
        }

        selectPaises.onchange = function () {
        var idPais = this.value;

        if (!idPais) {
           selectRegiones.style.display = 'none';
         } else {
           selectRegiones.style.display = 'block';
          }

        if (selectRegiones.hasChildNodes()) selectRegiones.innerHTML = '';
          pedidoAjax(urlRegiones + idPais, cargarRegiones);
        };
    }

    function cargarRegiones (regiones) {
        for (var n in regiones) {
        var option = `<option value="${regiones[n]}"> ${n} </option>`;
        selectRegiones.innerHTML += option;
          }
    }

</script>

@endsection
