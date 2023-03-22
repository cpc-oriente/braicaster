<!-- ===================================================== 
  > CONTENIDO CONVERSOR
====================================================== -->
<main class="px-2">
  <h1>⠓⠕⠇⠁ Traductor Braille  ⠓⠕⠇⠁</h1>
  <div class="btn-group mb-2" role="group" aria-label="Basic radio toggle button group">
    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" checked>
    <label class="btn btn-outline-light" for="btnradio2">Texto</label>

    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
    <label class="btn btn-outline-light" for="btnradio1">Braille</label>


    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
    <label class="btn btn-outline-light" for="btnradio3">Voz</label>
  </div>
  <p class="lead">Ingresa el texto a traducir en lenguaje Braille.</p>
  <div class="mb-3 mt-2">
    <textarea class="form-control" id="txtarea-conversor" rows="4" placeholder="Ingresa un texto, clic en el Botón"></textarea>
    <div id="box-conversion" class="pd-2 mt-3 text-wrap" style="width:200px important;"></div>
  </div>
  <p class="lead">
    <button class="btn btn-lg btn-light fw-bold border-white bg-white" id="btn-conversor">Traducir</button>
  </p>
</main>