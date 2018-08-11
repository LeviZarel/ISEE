<?php 
session_start();
include("conectarSQL.php");
$link=conectarseSQL();
 $año=date("Y"); $mes=date("m"); $dia=date("d"); 
$fecha=$año."-".$mes."-".$dia;
		global $HTTP_ENV_VARS;
		if($_POST['cuenta'] && $_POST['clave'])
			{ 
			  $Cuenta = $_POST["cuenta"];
   			  $Clave = $_POST["clave"];
	$consulta=mssql_query("SELECT rTrim(Estado) As Estado,rTrim(Tipo) as Tipo,IDCliente,Responsable,IDUsuarioCliente,Ciudad,IDTecnico FROM UsuariosWEB WHERE Usuario='".$Cuenta."' AND Clave='".$Clave."'",$link);			
			if(!$consulta) 
			{ exit(0); }
			else
			{   			                          
				$temp=mssql_fetch_array($consulta);
				if($temp)
				{   
			       if(($temp['Estado']=="h") && ($temp['Tipo']=="C") )
				   { 
					 $_SESSION['IDCliente'] = $temp['IDCliente']; 
					 $_SESSION['IDUsuarioCliente'] = $temp['IDUsuarioCliente']; 
     				header('Location: Cliente/indexC.php');
			     	}
					else
					{
						
						if(($temp['Estado']=='h') && ($temp['Tipo']=='T'))
						{ $_SESSION['IDUsuarioCliente'] = $temp['IDUsuarioCliente']; 
						 
                        header("Location: Tecnico/indexT.php");}
						else
						{
							if(($temp['Estado']=='h') && ($temp['Tipo']=='V'))
							{ $_SESSION['IDCliente'] = $temp['IDCliente']; 
						 
                        	header("Location: Usuario/indexV.php");}
							else
                        	{header("Location: index.php");}
						}
					}						 
				}
				else
				{ header("Location: index.php");}
			}
      }//fin post
	else
	{ header("Location: index.php");}

?>

