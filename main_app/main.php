<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script type="text/javascript">

function submitData(){

$(document).ready(function(){

var data = {


    cedulatxt: $('#cedulatxt').val(),

    contrasenatxt: $('#contrasenatxt').val(),

    action: $('#action').val(),

};


$.ajax({

  url: 'main_app/login.php',

  type: 'post',

  data: data,

  success:function(response){

     alert(response);

     if(response=="Bienvenido Adminstrador" || response=="Bienvenido Empleado"){


        window.location.reload();
     }

  }


});


});


}

</script>