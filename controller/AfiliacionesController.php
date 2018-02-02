<?php
class AfiliacionesController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
  
 
		public function index(){
	
		
			$rol=new RolesModel();
			$resultRol = $rol->getAll("nombre_rol");
			
			
			
			$this->view("Afiliaciones",array(
							"resultRol"=>$resultRol
				
					));
		
		}
	
	
	
}
?>
