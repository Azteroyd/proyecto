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

					$('#nom_umed').find('option').remove().end().
					append('<option value="whatever"></option>').val('whatever');
					
					$("#nom_cord option:selected").each(function () {
						id_cord = $(this).val();
						$.post("Metodos/ob_unidades.php", { id_cord: 
							id_cord }, function(data){
							$("#nom_umed").html(data);
						});            
					});
				})
			});

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
				$("#clasificacion").change(function () {

					$('#nom_puesto').find('option').remove().end().
					append('<option value="whatever"></option>').val('whatever');
					
					$("#clasificacion option:selected").each(function () {
						id_ClasPuesto = $(this).val();
						$.post("Metodos/ob_puestos.php", { id_ClasPuesto: 
							id_ClasPuesto }, function(data){
							$("#nom_puesto").html(data);
						});            
					});
				})
			});

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

