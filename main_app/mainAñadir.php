<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script type="text/javascript">

function submitData1(){

$(document).ready(function(){

var data = {


    insertarCedula: $('#insertarCedula').val(),

    insertarNombre: $('#insertarNombre').val(),

    insertarRol: $('#insertarRol').val(),

    insertarContrasena: $('#insertarContrasena').val(),

    action1: $('#action1').val(),

};


$.ajax({

  url: '../insertarEmp.php',

  type: 'post',

  data: data,

  success:function(response){

     alert(response);

     if(response=="Usuario Añadido"){


        window.location.reload();
     }

  }


});


});


}

</script>