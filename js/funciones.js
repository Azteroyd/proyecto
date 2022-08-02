
valuesInElement = (element, info) => {
    $(element).html(info);
}
interPostMethod =  (URL, param, element) => {

  $.post(URL, {param:param}, (data) => {
     console.log($(element).html(data));
  });

}

function buscar_datos(){

    doc = $("#doc").val();

    var parametros = 
    {
      "buscar": "1",
      "doc" : doc
    };

    $.ajax(
    {
      data:  parametros,
      dataType: 'json',
      url:   'datos.php',
      type:  'post',

      beforeSend: function() 
      {alert("enviando");}, 
      
      
      error: function()
      {alert("Error");},
      
	  complete: function() 
      {alert("¡Listo!");},
      
      success:  function (datos) 
      {
      	if(datos.existe=="1")
      	{
       $("#nombre").val(datos.nombre_sup);
       $("#ape_uno").val(datos.apellido_pat);
       $("#ape_dos").val(datos.apellido_mat);
       $("#rfc").val(datos.rfc_sup);
       $("#clave_ise").val(datos.clave_isesup);
       $("#gen").val(datos.genero);
      }
        else
        {
          alert("El suplente no existe en la base, ¡Registralo!")
        }
      }
    }) 
  }


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
  $("#nom_cord").change(function () {

   /*
    $('#nom_umed').find('option').remove().end().
    append('<option value="whatever"></option>').val('whatever');
  */
   
    $("#nom_cord option:selected").each(function () {
      record = $(this).val(); 
      ubicacion = $(this).text();
      auxUbi = $("#nombreCor").val(ubicacion);
      console.log(record, auxUbi);
      //interPostMethod("Metodos/ob_unidades.php", record,"#nom_umed");
      $.post("Metodos/ob_unidades.php", { record: 
        record }, function(data){
       console.log($("#nom_umed").html(data));
      });
    });

  })

});

$(document).ready(function(){
  $("#nom_umed").change(function(){
    $("#nom_umed option:selected").each(function (){
      id = $(this).val();
      nombreUnidad = $(this).text();
      AuxNombreUnidad = $("#AuxNUnidad").val(nombreUnidad);
      $("#coden").val(id);
      console.log(nombreUnidad, nombreUnidad, AuxNombreUnidad);
  
    })
   
  })
  
});

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
				$("#clasificacion").change(function () {

					$('#nom_puesto').find('option').remove().end().
					append('<option value="whatever"></option>').val('whatever');
					
					$("#clasificacion option:selected").each(function () {
						id_ClasPuesto = $(this).val();
            test = $(this).text();
            newValueTest = $("#otherTest").val(test);
            console.log(id_ClasPuesto, test);
						$.post("Metodos/ob_puestos.php", { 
              id_ClasPuesto: id_ClasPuesto 
            }, function(data){
							$("#nom_puesto").html(data);

						}); 

					});
				})
      
			});

  $(document).ready(function() {
    $("#nom_puesto").change( function (){
      $("#nom_puesto option:selected").each(function () {
        auxNivel = $(this).val();
       auxNom = $(this).text();
        nombre_Puesto = $("#NombrePuestoAux").val(auxNom);
        nivel_Puesto = $("#nivelPuestoAux").val(auxNivel);
        console.log(auxNivel, auxNom);
      });
});
  });
      

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

