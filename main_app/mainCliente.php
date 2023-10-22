<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script type="text/javascript">

function submitData2(){

$(document).ready(function(){

var data = {


    cedulaCliente: $('#cedulaCliente').val(),

    nombreCliente: $('#nombreCliente').val(),

    apellidoCliente: $('#apellidoCliente').val(),

    action2: $('#action2').val(),

};


$.ajax({

  url: 'insertarClient.php',

  type: 'post',

  data: data,

  success:function(response){

     alert(response);

     if(response=="Cliente Añadido"){


        window.location.reload();
     }

  }


});


});


}

</script>