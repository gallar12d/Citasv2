<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 2</title>
    <link href="css/dompdf.css" rel="stylesheet">
     </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="images/logo2.png">
      </div>
      <div id="company">
        <h2 class="name">COLEGIO BOGOTA</h2>
        <div>Calle 14 no-1e13</div>
        <div>+57 3136762722</div>
        <div><a href="mailto:Johansalazarburgos27@gmail.com">Johansalazarburgos27@gmail.com</a></div>
      </div>
      </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">Nombre estudiante: Johan Salazar Burgos</div>
          <div class="to">Curso estudiante: 5</div>
          <div class="to">Materia estudiante: Mateticas</div>
          <div class="email"><a href="mailto:profesor@example.com">profesor@example.com</a></div>
        </div>
        <div id="invoice">
          <h1>EXAMEN 1 PERIODO 2016</h1>
          <div class="date">Fecha examen: 01/06/2014</div>
          </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="desc">Preguntas examen</th>
           </tr>
        </thead>
        <tbody>
      @foreach ($respuestas as $element)
          <tr>
            <td class="desc"><h3>{{ $element->pregunta->descripcion }}</h3>{{ $element->letra }}){!! $element->descripcion !!}</td>

          </tr>
        @endforeach
      </tbody>
    <tfoot>
   </tfoot>
  </table>
</main>
<footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>