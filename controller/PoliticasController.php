<?php
class PoliticasController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
  
 
    
   
    
    public function index10(){
    	
    	session_start();
    	$politicas =new PoliticasModel();
    	$columnas = "politicas.id_politicas, 
					  politicas.responsable, 
					  politicas.asunto, 
					  politicas.camino_archivo, 
					  politicas.creado";
    	$tablas   = "public.politicas";
    	$where    = "1=1";
    	$id       = "politicas.id_politicas";
    	
    	$resultSet = $politicas->getCondiciones($columnas ,$tablas ,$where, $id);
    	
    	
    	$html="";
    	if(!empty($resultSet))
    	{
    		
    		$html .= "<div class='box box-primary'>";
    		$html .= "<div class='box-header'>";
    		$html .= "</div>";
    		$html .= "<div class='box-body'>";
    		$html .= "<table id='tabla_politicas' class='table table-hover table-condensed'>";
    		$html .= "<thead>";
    		$html .= "<tr>";
    			$html.='<th style="text-align: left;  font-size: 12px;">#</th>';
    			$html.='<th style="text-align: left;  font-size: 12px;">Nombre Responsable</th>';
    			$html.='<th style="text-align: left;  font-size: 12px;">Asunto</th>';
    			$html.='<th style="text-align: left;  font-size: 12px;">Fecha Registro</th>';
    			$html.='<th style="text-align: left;  font-size: 12px;">Camino</th>';
    			
    			$html.='</tr>';
    			$html.='</thead>';
    			$html.='<tbody>';
    	
				$i=0;
		
    			foreach ($resultSet as $res)
    			{
					$i++;
					
    				$html.='<tr>';
    				$html.='<td style="font-size: 11px;">'.$i.'</td>';
    				$html.='<td style="font-size: 11px;">'.$res->responsable.'</td>';
    				$html.='<td style="font-size: 11px;">'.$res->asunto.'</td>';
    				$html.='<td style="font-size: 11px;">'.date('Y-m-d h:i', strtotime($res->creado)).'</td>';
    				$html.='<td style="font-size: 11px;">'.$res->camino_archivo.'</td>';

    				$html.='</tr>';
    			}
    	
    			$html .= "</tbody>";
    			$html .= "</table>";
    			$html .= "</div>";
    			$html .= "</div>";
    				
    	
    		}else{
    	
    			$html = "<b>Actualmente no hay politicas registradas...</b>";
    		}
    	
    		echo $html;
    		die();
    	
    	
    	
    	
    	
    	
    	
    }
    
    
    
    
    
		public function index(){
	
		session_start();
		if (isset(  $_SESSION['usuario_usuario']) )
		{
				//Creamos el objeto usuario
			$rol=new RolesModel();
			$resultRol = $rol->getAll("nombre_rol");
			
			
			$estado = new EstadoModel();
			$resultEst = $estado->getAll("nombre_estado");
			
		
			$usuarios = new UsuariosModel();

			
					
					$this->view("Politicas",array(
							"resultRol"=>$resultRol, "resultEst"=>$resultEst
				
					));
				
		}
		else 
		{
			$this->view("Login",array(
					"resultSet"=>""
		
			));
			
			
			
		}
		
	}
	
	public function InsertaPoliticas(){
			
		session_start();
		$resultado = null;
		$politicas=new PoliticasModel();
	
	
		if (isset ($_POST["nombre_responsable"]) )
		{
			
         	
			$_nombre_responsable     = $_POST["nombre_responsable"];
			$_asunto      = $_POST["asunto"];
			$_archivo   = $_POST["archivo"];
			$dir = "";
			
	        if ($_FILES['archivo']['tmp_name']!="")
		    {
		    
		    
		    	 
		    	$directorio = $_SERVER['DOCUMENT_ROOT'].'/suda_politicas/documentos_agregados/';
		    	 
		    	$nombre = $_FILES['archivo']['name'];
		    	$tipo = $_FILES['archivo']['type'];
		    	$tamano = $_FILES['archivo']['size'];
		    	 
		    	
		    	 
		    	 move_uploaded_file($_FILES['archivo']['tmp_name'],$directorio.$nombre);
		    	$dir =$directorio.$nombre;
		    }	
		    
		   
			
			
	
			$funcion = "ins_politicas";
			$parametros = " '$_nombre_responsable' ,'$_asunto' , '$dir'";
			$politicas->setFuncion($funcion);
	        $politicas->setParametros($parametros);
	        $resultado=$politicas->Insert();
	
	        
			
		}
		
		$this->redirect("Politicas", "index");
	
	}
	
	
	
}
?>
