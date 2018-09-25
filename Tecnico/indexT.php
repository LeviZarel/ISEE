<?php
session_start();
if( isset($_SESSION['IDUsuarioCliente']) ) :
$iduc=$_SESSION['IDUsuarioCliente'];
require('../conectarSQL.php');
$link=conectarseSQL();
$me=1;
$anio=date("Y"); $mes=date("m"); $dia=date("d");
$fechare=$dia."-".$mes."-".$anio;
$fecha=$anio."-".$mes."-".$dia;
$fechado=$dia."/".$mes."/".$anio;	
$h=date("H"); $m=date("i"); $s=date("s");
$hora = $h.":".$m.":".$s;

if(isset($_GET['ide'])){
	$ide=$_GET['ide'];	
} 
if(isset($_GET['ord'])){
	$ord=$_GET['ord'];	
} 

 $consulta=mssql_query("SELECT IDCliente,Responsable,siAdm,IDsucursal,rTrim(Ciudad) As Ciudad, IDTecnico 
 FROM dbAdm.dbo.UsuariosWEB WHERE IDUsuarioCliente='$iduc'",$link);
    $temp=mssql_fetch_array($consulta); 
	   $idcliente= $temp['IDCliente'];
	   $idct= $temp['IDCliente'];
	   $id= $temp['IDTecnico'];
	   $idtecni= $temp['IDTecnico'];
	  	$usuario= $temp['Responsable'];
		$ciu= trim($temp['Ciudad']);
		$adm= $temp['siAdm'];
		$suc= $temp['IDSucursal'];
?>

<!DOCTYPE html>
<html lang="en">
<?php
    include('components/head.php');

    if(!$ide)
	{require('usuario.php');  }
	if($ide==20)
	{require('InicioForo.php');  }
	if($ide==21)
	{require('DetalleForo.php'); }
	if($ide==22)
	{require('vercom.php'); }
	if($ide==23)
	{require('NuevaPregunta.php'); }
	if($ide==5)
	{require('ReportesFalla.php');  }
	if($ide==50)
	{require('RepFallaNuevo.php');  }
	if($ide==51)
	{require('DetalleRepFalla.php');  }
	
	if($ide==6)
	{require('ReportesVisita.php');  }
	if($ide==60)
	{require('RepVisitaNuevo.php');  }
	if($ide==64)
	{require('DetEquipoEdit.php');  }
	
	if($ide==61)
	{require('DetalleRepVisita.php');  }
	
	if($ide==65)
	{require('DetEquipoNuevoM.php');  }
	
	if($ide==62)
	{require('DetEquipoNuevo.php');  }
		
	if($ide==601)
	{require('BuscarContacto.php');  }
	if($ide==602)
	{require('BuscarContactoMod.php');  }

	
	
	if($ide==63)
	{require('VerDetEquipo.php');  }
	
	if($ide==7)
	{require('InformesTecnicos.php');  }
	if($ide==70)
	{require('InformeNuevo.php');  }
	if($ide==71)
	{require('InformeMod.php');  }
	if($ide==75)
	{require('RegistroEquipo.php');  }
	if($ide==72)
	{require('VerEquipoCosto.php');  }
	if($ide==73)
	{require('EquipoCostoNuevo.php');  }
	if($ide==74)
	{require('EquipoCostoMod.php');  }
	
	if($ide==80)
	{require('SoporteNuevo.php');  }
	if($ide==81)
	{require('MantenimientoNuevo.php');  }
	if($ide==82)
	{require('InventarioNuevo.php');  }
	
	if($ide==83)
	{require('SoporteMod.php');  }
	if($ide==84)
	{require('MantenimientoMod.php');  }
	if($ide==85)
	{require('InventarioMod.php');  }
	
	if($ide==86)
	{require('VerSoporte.php');  }
	if($ide==87)
	{require('VerMantenimiento.php');  }
	if($ide==88)
	{require('VerInventario.php');  }
	
	if($ide==90)
	{require('Repuestos.php');  }
	if($ide==91)
	{require('VerRepuestos.php');  }
	if($ide==96)
	{require('RepuestosMod.php');  }
	
	if($ide==92)
	{require('Accesorios.php');  }
	if($ide==93)
	{require('VerAccesorios.php');  }
	if($ide==97)
	{require('AccesoriosMod.php');  }	
	
	if($ide==94)
	{require('Partes.php');  }
	if($ide==95)
	{require('VerPartes.php');  }	
	if($ide==98)
	{require('PartesMod.php');  }
	
	if($ide==100)
	{require('Contrasena.php');  }  
?>
</html>
<?php endif; ?>
