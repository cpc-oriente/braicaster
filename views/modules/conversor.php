<!-- ===================================================== 
  > CONTENIDO CONVERSOR
====================================================== -->
<main class="px-1">
  <!-- TITULO -->
  <h1>⠓⠕⠇⠁ Traductor Braille  ⠓⠕⠇⠁</h1>
  <!-- BOTONES -->
  <div class="btn-group mb-2" role="group" aria-label="Basic radio toggle button group">
    <!-- TAB -->
    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked tg-tab="tab-conv-txabr" tg-tabsg="tabs-conversor">
    <label class="btn btn-outline-light" for="btnradio1">Texto a Braille</label>
    <!-- BAT -->
    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" tg-tab="tab-conv-bratx" tg-tabsg="tabs-conversor">
    <label class="btn btn-outline-light" for="btnradio2">Braille a Texto</label>
  </div>
  <!-- TABS: TEXTO A BRAILLE -->
  <div class="tabs-conversor" id="tab-conv-txabr">
    <p class="lead">Escribe o pega el texto a traducir en lenguaje Braille.</p>
    <div class="mb-3 mt-2">
      <textarea class="form-control" id="txtarea-conversor-txabr" rows="4" placeholder="Ingresa un texto, clic en el Botón"></textarea>
    </div>
    <div id="box-conv-txabr" class="pd-2 mt-3 text-wrap" style="width:200px important;">
    </div>
  </div>
  <!-- TABS: BRAILLE A TEXTO -->
  <div class="tabs-conversor" id="tab-conv-bratx">
    <p class="lead">Ingresa el texto Braille a traducir en texto.</p>
    <div class="mb-3 mt-2">
      <textarea class="form-control" id="txtarea-conversor-bratx" rows="4" placeholder="Ingresa un texto, clic en el Botón"></textarea>
    </div>
    <p class="lead">
      <button class="btn btn-lg btn-light fw-bold border-white bg-white" id="btn-conversor-bratx">Traducir Braile</button>
    </p>
    <div id="box-conv-bratx" class="pd-2 mt-3 text-wrap" style="width:200px important;">
    </div>
  </div>
</main>