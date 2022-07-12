
$(document).ready(function() {
    mostrar_table();
    mostrar_select();

    $("#select").change(function(){
        var data = $(this).val();
/* var data = $('#frm').serialize(); */
        var url2 = "https://devcobrosapi.azurewebsites.net/api/CobroCreditos/getList/"+data;        
        $.ajax({
            type: "GET",
            url: url2,
            data: '',
            success: function(e) {
     
          
                var valor = '';
                e.forEach(product => {
                    valor += "<tr>"+
                        "<td>" + product.creditoId + "</td>"+
                        "<td>" + product.cobroId + "</td>"+
                        "<td>" + product.importe + "</td>"+ 
                        "<td>" + product.cobro.fecha + "</td>"+ 
                        "</tr>";
                  });
                  $("#cuerpo").html(valor);
            }
        });
        return false; //Evita la recarga
    
    /* ****fin mostrar resultados**** */
    });
    




});

function mostrar_select(){
    var data = "";
    $.ajax({
        type: "GET",
        url: "https://devcobrosapi.azurewebsites.net/api/CobroCreditos/selectList",
        data: data,
        success: function(e) {
            var valor = '';
            e.forEach(product => {
                valor += "<option value='"+product.creditoId+"'>"+ product.importe +"</option>";
              });

 

              $("#select").html(valor);
        }
    });
    return false; //Evita la recarga

/* ****fin mostrar resultados**** */
}

function mostrar_table(){
    var data = "";
    $.ajax({
        type: "GET",
        url: "https://devcobrosapi.azurewebsites.net/api/CobroCreditos/getList/1",
        data: data,
        success: function(e) {
            var valor = '';
            e.forEach(product => {
                valor += "<tr>"+
                "<td>" + product.creditoId + "</td>"+
                "<td>" + product.cobroId + "</td>"+
                "<td>" + product.importe + "</td>"+ 
                "<td>" + product.cobro.fecha + "</td>"+ 
                "</tr>";
              });

 

              $("#cuerpo").html(valor);
        }
    });
    return false; //Evita la recarga

/* ****fin mostrar resultados**** */
}

