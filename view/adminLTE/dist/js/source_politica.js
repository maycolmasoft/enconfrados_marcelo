function lista_politicas(){
   $(document).ready( function (){
     $.ajax({
               beforeSend: function(){
                 $("#politicas_registrados").html("<b>Actualizando Listado...</b>")
               },
               url: 'index.php?controller=Politicas&action=index10',
               type: 'POST',
               data: null,
               success: function(x){
                 $("#politicas_registrados").html(x);
                 $("#tabla_politicas").dataTable({
                     "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]]
                 } );
               },
              error: function(jqXHR,estado,error){
                $("#politicas_registrados").html("Ocurrio un error al cargar la informacion de las Politicas..."+estado+"    "+error);
              }
            });
   })
}


/********************************************************************/

	 $(document).ready(function(){
	  
	  $("#btn-nuevo").click(function() 
	{
	  
	  
		  var errores='';
    	  
    	  if($("#nombre_responsable").val()==""){
    		  
    		  var n = noty({
                  text: "Ingrese un Nombre!..",
                  theme: 'relax',
                  layout: 'center',
                  type: 'error',
                  timeout: 2000,
                 });
    		  
    		  errores = 'true';
    		  return false;
    	  }else{
    		  
    		  errores = 'false';
    		  
    	  }
    	  
         if($("#asunto").val()==""){
    		  
    		  var n = noty({
                  text: "Ingrese un Asunto!..",
                  theme: 'relax',
                  layout: 'center',
                  type: 'error',
                  timeout: 2000,
                 });
    		  
    		  errores = 'true';
    		  return false;
    	  }else{
    		  
    		  errores = 'false';
    		  
    	  }
    	  
         if($("#archivo").val()==""){
   		  
   		  var n = noty({
                 text: "Seleccione un Archivo!..",
                 theme: 'relax',
                 layout: 'center',
                 type: 'error',
                 timeout: 2000,
                });
   		  
   		  errores = 'true';
   		  return false;
   	  }else{
   		  
   		  errores = 'false';
   		  
   	  }
         
         
         
    	  if(errores =='false'){
			  var n = noty({
    	               text: "La política se registro correctamente....",
    	               theme: 'relax',
    	               layout: 'center',
    	               type: 'information',
    	               timeout: 5000,
    	               });
    	  }
    	  
    	  
     });
	  });
   
/*******************************************************************************************/
function CancelaNuevoPolitica(){
    
    $("#nombre_responsable").val("");
    $("#asunto").val("");
    $("#archivo").val("");
   
   
}

/************************************************************************************/
function tabpagina(pagetab){
	
	$('#myTabs a[href="#'+pagetab+'"]').tab('show'); 
}
/************************************************************************************/