@extends ('layout')

@section('title', 'Preguntas Frecuentes')

@section('content')

<div class="margen">
    <div class="barraTitulo">
      <h3>Preguntas Frecuentes</h3>
    </div>


<div class="container caja bg-transparent">
<div class="row ">
    <ul id="accordion" class="col-12 ">


<!-- Question one -->

      <li>
       <div id="choose" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="boton-preguntas" >
        ¿Necesito estar registrado para realizar una compra?
        <span class="fa fa-chevron-up fa-1x text-info pull-right"></span>
       </div>

       <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body"style="text-align:justify">
         No, no es necesario crear una cuenta para poder comprar en Puppyshop. Pero tené en cuenta que al hacerlo podrás llevar un control de las compras y movimientos realizados en nuestra tienda online.
        </div>
       </div>
      </li>

 <!-- Question two -->

      <li>
       <div class="collapsed boton-preguntas" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        ¿Cómo se puede pagar?
        <span class="fa fa-chevron-down fa-1x text-info pull-right"></span>
       </div>

       <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
         <div class="card-body"style="text-align:justify">
          Podes abonar los productos con tarjeta de crédito y débito, depósito bancario, y en efectivo si los pasas a buscar por nuestros locales.
          En cualquier caso esperaremos la acreditación del pago para enviarte el producto.
         </div>
       </div>
      </li>

  <!-- Question three -->

      <li>
       <div class="collapsed boton-preguntas"data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="boton-preguntas">
        ¿Se realizan entregas a domicilio? Y al interior del país?
        <span class="fa fa-chevron-down fa-1x text-info pull-right"></span>
       </div>

       <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body"style="text-align:justify">
         Realizamos envíos a todo el país. Si tu compra es superior a 2 mil pesos, el envío es sin costo.
        </div>
       </div>
      </li>

   <!-- Question Four -->

        <li>
         <div class="collapsed boton-preguntas" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="boton-preguntas">
          ¿Cuánto tiempo demora la entrega?
          <span class="fa fa-chevron-down fa-1x text-info pull-right"></span>
         </div>

         <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body" style="text-align:justify">
              Los plazos de entrega de los pedidos dependen del tipo de productos que incluyan, de tu dirección de entrega y del tipo de entrega que elijas. En periodos de rebajas y otras promociones, la entrega puede alargarse algo más de lo esperado.
            </div>
          </div>
        </li>

    <!-- question Five -->

        <li>
         <div class="collapsed boton-preguntas" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" class="boton-preguntas">
            Mi producto, ¿Tiene devolución?
          <span class="fa fa-chevron-down fa-1x text-info pull-right"></span>
         </div>

         <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
          <div class="card-body" style="text-align:justify">
            Para realizar cambios de productos adquiridos, podes acercarte a Servicio de Atención al cliente de cualquiera de nuestras tiendas, presentando la factura de compra o el ticket de cambio correspondiente a la compra, junto al producto con sus etiquetas y embalajes originales.
          </div>
         </div>
       </li>

    <!-- question Six -->

        <li>
         <div class="collapsed boton-preguntas" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" class="boton-preguntas">
          ¿Se realizan compras al por mayor?
          <span class="fa fa-chevron-down fa-1x text-info pull-right"></span>
         </div>

         <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
          <div class="card-body">
            La cantidad mínima son 4 artículos que pueden ser surtidos entre alimentos balanceados para perros y gatos, arnés, futones, etc.
          </div>
         </div>
        </li>

    <!-- question Seven -->

        <li>
         <div class="collapsed boton-preguntas" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" class="boton-preguntas">
            ¿Qué hago si el producto está agotado?
          <span class="fa fa-chevron-down fa-1x text-info pull-right"></span>
         </div>

         <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
          <div class="card-body" style="text-align:justify">
            En este caso puede inscribirse para recibir un correo electrónico. Le enviaremos un correo electrónico inmediatamente cuando el producto vuelva a estar disponible. Si no lo recibimos en el plazo de 30 días, su solicitud caducará y le informaremos de ello.
            Debido a la popularidad de algunos de nuestros productos, estos tardan poco en agotarse, pero siempre existe otra posibilidad que analizar. Si no está disponible en Internet, puede ser que el producto que busca esté disponible en una tienda Puppy-Shop cercana.
          </div>
         </div>
        </li>

    <!-- question Eight -->

        <li>
         <div class="collapsed boton-preguntas" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" class="boton-preguntas">
            ¿Qué garantía tienen mis productos?
          <span class="fa fa-chevron-down fa-1x text-info pull-right"></span>
         </div>

         <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
          <div class="card-body" class="boton-preguntas" style="text-align:justify">
           Para Puppy-Shop la calidad es lo primero. Comprobamos exhaustivamente todos nuestros productos para asegurarnos de que están en óptimas condiciones. Sin embargo, a veces resulta inevitable que se entregue un producto defectuoso.
           Si un producto que compraste en nuestra tienda online presenta defectos de calidad y quieres devolverlo, deberás hacerlo en nuestras sucursales. En cuanto lo recibamos, nuestro departamento de calidad procederá a inspeccionarlo.
           Te reembolsaremos el importe del producto tanto si, una vez realizada la comprobación, observamos que presenta defectos.  Puppy-Shop te indemnizará por los gastos que hubiera podido causar su producto defectuoso.
          </div>
         </div>
       </li>

  </div>
</div>
</div>
</ul>
@endsection
