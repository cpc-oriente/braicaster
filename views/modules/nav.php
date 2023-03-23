<!-- BARRA DE NAVEVACIÓN -->
<header class="mb-auto">
  <div>
    <h3 class="float-md-start mb-0"><i class="fa-solid fa-braille fa-beat"></i> <a href="index.php?page=conversor" class="link-light">BraiCaster</a></h3>
    <nav class="nav nav-masthead justify-content-center float-md-end">
      
      <!-- TO: INICIO -->
      <a class="nav-btn nav-link fw-bold py-1 px-0 active" href="index.php?page=conversor" tag-class="nav-btn" id="nav-home">
        <i class="fa-solid fa-house"></i> Inicio
      </a>
      
      <!-- TO: RECURSOS -->
      <a class="nav-btn nav-link fw-bold py-1 px-0" tag-class="nav-btn" href="index.php?page=contents" id="nav-recus">
        <i class="fa-solid fa-book"></i>
         Recursos
      </a>
      
      <!-- TO: CONTACTO -->
      <a class="nav-btn nav-link fw-bold py-1 px-0" tag-class="nav-btn" href="index.php?page=contact" id="nav-contc">
        <i class="fa-solid fa-blender-phone"></i> 
        Contacto
      </a>
    </nav>
  </div>
</header>
<!-- NAVEGACION ACTIVA -->
<script type="text/javascript">
  // TOMAR PARAMETROS
  const params = window.location.search
  const url_params = new URLSearchParams(params)
  
  if(url_params.has('page') == true){
    console.log("url_params.has('page')", url_params.has('page'));
    // Paso
    nav = url_params.get('page');
    if(nav == "contents"){
      // Controlador
      ctr_conv.active_link("nav-recus")
    }else if(nav == "contact"){

      ctr_conv.active_link("nav-contc")
    
    }else if(nav == "conversor"){
    
      ctr_conv.active_link("nav-home")
    
    }
  
  }else{

    // Controlador
    ctr_conv.active_link("nav-home");
  
  }


</script>