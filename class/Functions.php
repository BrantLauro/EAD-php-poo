<?php 

class Functions {
    static public function alerta($texto) {
        echo "<script> alert('$texto') </script>";
    }
    
    static public function redirect($pagina) {
        echo "<script>window.location.replace('$pagina')</script>";
    }
}