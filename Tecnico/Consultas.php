<?php
function nomtecnico($idc,$link){
	$consulta1=mssql_query("SELECT  r.NombreContacto FROM  dbcon.dbo.Contactos as r  WHERE r.IDContacto=$idc ",$link);
	$temp1 = mssql_fetch_array($consulta1);
	$nombtec= $temp1['NombreContacto']; 
	return($nombtec);
}
	 
function repfallasql($ciu,$idct,$est,$link){
	$anio=date("Y"); $mes=date("m"); $dia=date("d");
	$cadsql="SELECT *,rTrim(b.Estado) as Estado, CONVERT(char(12), b.Fecha, 103) As nFecha FROM dbcon.dbo.Contactos as c, DBSer.dbo.RepFallas as b WHERE  b.IDCliente=c.IDContacto";
	
	if($ciu!=''){  
		$cadsql=$cadsql. " and c.Ciudad='".$ciu."'";
	}
		
	if($idct!=0){ 
		$cadsql=$cadsql. " and c.IDMatriz='".$idct."'";
	} 		
	if($est) {
 		$cadsql=$cadsql. " and b.Estado='".$est."'"; 
 	}
	return($cadsql);
}
function repvisql($ciu,$idct,$est,$link){
	$anio=date("Y"); $mes=date("m"); $dia=date("d");
	$cadsql="SELECT rTrim(b.Estado) as Estado,b.IDTecnico, b.Folio,CONVERT(char(12), b.Fecha, 103) As nFecha, b.Cliente,c.NombreContacto,b.IDTrabajo 
	FROM  dbcon.dbo.Contactos as c, dbser.dbo.Trabajos as b 
	WHERE  b.IDCliente=c.IDContacto ";
	
	if($ciu!=''){ 
		$cadsql=$cadsql. " and c.Ciudad='".$ciu."'";
	}
    
	if($idct!=0){ 
	  $cadsql=$cadsql. " and c.IDMatriz='".$idct."'";
	}	  
	
  if($est) {
    $cadsql=$cadsql. " and b.Estado='".$est."'";  
	}
	
	return($cadsql);
}
function inftecsql($ciu,$idct,$est,$link){
	$anio=date("Y"); $mes=date("m"); $dia=date("d");
	$cadsql="SELECT i.IDInforme,i.IDTecnico,CONVERT(char(12), i.Fecha, 103) As nFecha,i.Informe,i.Cliente,i.Documento,rTrim(i.Estado) as Estado
	FROM  dbcon.dbo.Contactos as c, dbser.dbo.Informes as i
	WHERE i.IDCliente=c.IDContacto";
	
	if($ciu!=''){ 
		$cadsql=$cadsql. " and c.Ciudad='".$ciu."'";
	}
		
	if($idct!=0){ 
		$cadsql=$cadsql. " and c.IDMatriz='".$idct."'";
	}	  
  if($est){
 		$cadsql=$cadsql. " and i.Estado='".$est."'";  
	}
	
	return($cadsql);
}
?>
