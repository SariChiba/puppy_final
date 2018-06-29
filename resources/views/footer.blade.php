
{{-- <footer class="footer text-center">

  <div class="container">
    <div class="row algo">
      <div class="col-12">
        <h4 class="text-uppercase mb-4">Atención al cliente</h4>
        <p class="lead mb-0">Línea gratuita:
        <br> 4809-8888 / 0810-333-5456</p>
       </div>
     </div>
  </div>

</footer>


    <div class="final">
      <p class="m-0 text-center text-red">Copyright © Unsere Website 2018</p>
    </div> --}}


<footer class="footer text-center">

  <style>
  .button {
    display: inline-block;
    padding: 10px 15px;
    font-size: 13px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: #262626;
    background-color: #e8eaef;
    border: none;
    border-radius: 15px;
    box-shadow: 0 9px #999;
    font-family: 'Nunito', sans-serif;
  }

  .button:hover {background-color: #bbc1d0}

  .button:active {
    background-color: #bbc1d0;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
  }
  </style>

  <div class="container">
      <p style="text-align: center">
        <b>
          <button id="tema" class="button" type="button">CAMBIÁ DE TEMA</button>
          |
          <button id="temaOriginal" class="button" type="button">TEMA ORIGINAL</button>
        </b>
      </p>
    <br>
      <b>
        <h6 style="text-align: center">
          29.06.2018 | Atención al cliente - Línea gratuita: 4809-8888 / 0810-333-5456 | Buenos Aires | Argentina
        </h6>
      </b>

      <br>
  </div>

</footer>

  <div class="final">
    <p class="m-0 text-center text-red">Copyright © Unsere Website 2018</p>
  </div>

    <script>

      window.onload = function() {
        var btnTema = document.querySelector("#tema")
        var btnTemaOriginal = document.querySelector("#temaOriginal")
        var linkTemaCss = document.querySelector("#linkTemaCss")

        btnTema.onclick = function () {
          linkTemaCss.setAttribute('href', '/css/styles2.css')
        }

        btnTemaOriginal.onclick = function () {
          linkTemaCss.setAttribute('href', '')
        }
      }

    </script>
