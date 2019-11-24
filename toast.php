<?php
  $resultado = isset($_GET["completado"]) ? $_GET["completado"] : "";
  if($resultado==1){
      echo '<div class="toast" role="alert" aria-live="polite" aria-atomic="true" data-delay="2000">
        <div role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
             <strong class="mr-auto">Completado</strong>
             <small>hace 1 segundo</small>
             <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="toast-body">
             Completado Exitosamente
           </div>
        </div>
      </div>';
  }else if($resultado==2){
    echo '<div class="toast" role="alert" aria-live="polite" aria-atomic="true" data-delay="2000">
      <div role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
           <strong class="mr-auto">Resultado</strong>
           <small>hace 1 segundo</small>
           <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="toast-body">
           No se pudo completar
         </div>
      </div>
    </div>';
  }


?>
<script type="text/javascript">
  $('.toast').toast('show')
</script>
