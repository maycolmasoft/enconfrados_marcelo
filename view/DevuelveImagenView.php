
<?php

$id_documentos_legal = '';

if (isset ($_GET["id_documentos_legal"]))
{
	$id_documentos_legal = $_GET["id_documentos_legal"];

}


$image = "";
//$conn  = pg_connect("user=postgres port=5432 password=.Romina.2012 dbname=coactiva host=192.168.100.3");

$conn  = pg_connect("user=postgres port=5432 password=.Romina.2012 dbname=ad_vivienda host=186.4.203.42");

if(!$conn)
{
	echo  "No se pudo conectar";
}
else 
{

		$campo = 'archivo_archivos_pdf';
		$tabla = 'archivos_pdf';
		$id_nombre = 'id_documentos_legal';
		$id_valor = '75820';
		
		$res = pg_query($conn, "SELECT archivo_archivos_pdf FROM archivos_pdf WHERE id_documentos_legal = '$id_documentos_legal' ");
	
		if ($res)
		{
			
			try {
				//para cambiar estado los revisados
				$rs_actualizacion = pg_query($conn, "UPDATE documentos_legal SET revisado_documentos_legal = TRUE WHERE id_documentos_legal = '$id_documentos_legal' ");
			}catch (Exception $e)
			{
				
			}
			
			
			
			$raw = pg_fetch_result($res, $campo );
			
			header('Content-type: application/pdf');				
			echo pg_unescape_bytea($raw);
			
			
			/*$archivo=$raw;
			$img_path="/tmp";
			$file_name=time();
			$dir="/usr/bin/convert";
			$comando="$dir {$archivo}[0] $img_path/$file_name.jpg";
			exec($comando,$out);
			
			$image=imagecreatefromjpeg("$img_path/$file_name.jpg");
			header('Content-Type: image/jpeg');
			imagejpeg($image);
			unlink("$img_path/$file_name.jpg");*/
			
			
			
		}
	
	pg_close($conn);
	
}


?>

