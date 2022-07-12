
$(document).ready(function() {

mostrar();

$( "#guardar" ).click(function() {
    var data = $('#frm').serialize();
  
    $.ajax({
        type: "POST",
        url: "guardar.php",
        data: data,
        success: function(e) {
            alert(e);
            mostrar();
         
        }
    });
    return false; //Evita la recarga

/* ****fin mostrar resultados**** */
});


});
function mostrar(){
    var data = "";
    $.ajax({
        type: "GET",
        url: "show.php",
        data: data,
        success: function(e) {
 
      
            var valor = '';
            e.forEach(product => {
                valor += "<tr>"+
                 "<td>" + product.id + "</td>"+
                 "<td>" + product.order_date + "</td>"+
                 "<td>" + product.shipped_date + "</td>"+ 
                 "<td>" + product.ship_name + "</td>"+ 
                 "</tr>";
              });

 

              $("#cuerpo").html(valor);
        }
    });
    return false; //Evita la recarga

/* ****fin mostrar resultados**** */
}

