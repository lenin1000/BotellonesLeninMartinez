<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script type="text/javascript">

function submitData2(){

$(document).ready(function(){

var data = {


    cedulaVenta: $('#cedulaVenta').val(),

    ciudadVenta: $('#ciudadVenta').val(),

    cantidadVenta: $('#cantidadVenta').val(),

    action3: $('#action3').val(),

};


$.ajax({

  url: '../venta.php',

  type: 'post',

  data: data,

  success:function(response){

     alert(response);

     if(response=="Venta registrada con éxito."){


        window.location.reload();
     }

  }


});


});


}

</script>