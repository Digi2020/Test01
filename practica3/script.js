
$(document).ready(function() {

mostrar();
   $("#select").change(function(){
    var data = $('#frm').serialize();
  
    $.ajax({
        type: "POST",
        url: "show_search.php",
        data: data,
        success: function(e) {
 
      
            var valor = '';
            e.forEach(product => {
                valor += "<tr>"+
                 "<td>" + product.Codigo_Producto + "</td>"+
                 "<td>" + product.Nombre_Productos + "</td>"+
                 "<td>" + product.Proveedor + "</td>"+ 
                 "</tr>";
              });
              $("#cuerpo").html(valor);
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
                 "<td>" + product.Codigo_Producto + "</td>"+
                 "<td>" + product.Nombre_Productos + "</td>"+
                 "<td>" + product.Proveedor + "</td>"+ 
                 "</tr>";
              });

 

              $("#cuerpo").html(valor);
        }
    });
    return false; //Evita la recarga

/* ****fin mostrar resultados**** */
}

