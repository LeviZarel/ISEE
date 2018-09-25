<?php
require('Dibujar.php');
require('Consultas.php');
$anio=date("Y"); $mes=date("m"); $dia=date("d");
$fechare=$dia."/".$mes."/".$anio; 

function refactorizarFecha($dd_mm_yyyy){
	return substr($dd_mm_yyyy, 3, -4).substr($dd_mm_yyyy, 0, -7).substr($dd_mm_yyyy, 6);
}
//para capturar lo enviado por link
if(isset($_GET['ide'])){
	$ide=$_GET['ide'];	
} 
if(isset($_GET['ord'])){
	$ord=$_GET['ord'];	
}
//para capturar variables de post
if(isset($_POST['defechas'])) {
	$defechas = $_POST['defechas'];
}
if(isset($_POST['afechas'])) {
	$afechas = $_POST['afechas'];
}
//mas get
if(isset($_GET['defechas'])) {
	$defechas = $_GET['defechas'];
}
if(isset($_GET['afechas'])) {
	$afechas = $_GET['afechas'];
}

if(isset($_GET['estado'])) {
	$estado = $_GET['estado'];
}

if($ord==0){
	$defechas=$fechare;
	$afechas=$fechare;
}

	
if($estado=="Pendientes"){ 
	$est="Pendiente";
	$col="FEEFDA";
}
if($estado=="Asignados"){ 
	$est="Asignado";
	$col="FDFA8E";
}

if($estado=="Anulados"){ 
	$est="Anulado";
	$col="CCCCCC";
}
if($estado=="Internet"){ 
	$est="Internet";
	$col="91D29A";
}
if($estado=="Terminados"){ 
	$est="Terminado";
	$col="FFFFFF";
}

$cadsql=repfallasql($ciu,$idct,$est,$link);
 
if($guardarep){
	$consulta1=mssql_query("SELECT Gestion FROM Parametros ",$link);
	$temp1 = mssql_fetch_array($consulta1);
	$vgestion = $temp1['Gestion'];

	$consulta2=mssql_query("SELECT RepFalla FROM DBAdm.dbo.CodigosSucursal WHERE IDSucursal=0 ",$link);
	$temp = mssql_fetch_array($consulta2);
	$repf = $temp['RepFalla'];

	$conta=4-strlen($repf);
	$vgrepf=0;
	while($conta>1){
		$vgrepf='0'.$vgrepf;
		$conta=$conta-1;
	}
	$repfalla='CRFP'.$vgrepf.''.$repf.'-'.$vgestion;	
	$repf1=$repf+1;
	
	$sql = "select IDClaEquipo, Nombre from DBSer.dbo.ClaEquipos Where IDClaEquipo=$idclae";
	$result1 = mssql_query($sql, $link);   
	$temp = mssql_fetch_array($result1);
	$equi = $temp['Nombre'];
				
	$result = mssql_query("INSERT INTO DBSer.dbo.RepFallas (IDRepFalla,IDSucursal,IDUsuario,FecC,Estado,RepFalla,Fecha,HoraRecepcion,IDCliente,Seccion,Usuario,IDClaEquipo,Equipo,Modelo, Marca,SerieINT, SeriePRO, Falla,IDTecnico,FechaAsignacion,HoraAsignacion,Observaciones,Tipo,SolicitadoPor,IDSolicitante) VALUES ('$idfa','$suc','$id',GetDate(),'Internet','$repfalla',GetDate(),'$hora','$idconm','$sec','$usua','$idclae','$equi','$modelo','$marca','$serie','$seriep','$falla','$idtec',GetDate(),'$hora','$obs','4','1','0')", $link);  
	if($result){ 
			$menf=1;
			$result = mssql_query("UPDATE DBAdm.dbo.CodigosSucursal SET RepFalla='$repf1'
			WHERE RepFalla='$repf'",$link);

	}
}
if($modirep){
 	$sql = "select IDClaEquipo, Nombre from DBSer.dbo.ClaEquipos Where IDClaEquipo=$idclae";
    $result1 = mssql_query($sql, $link);   
    $temp = mssql_fetch_array($result1);
    $equi = $temp['Nombre'];
					
    $result = mssql_query("UPDATE DBSer.dbo.RepFallas SET IDUsuario='$id',FecM=GetDate(),IDCliente='$idconm',Seccion='$sec',Usuario='$usua',IDClaEquipo='$idclae',Equipo='$equi',Modelo='$modelo', Marca='$marca',SerieINT='$serie',SeriePRO='$seriep', Falla='$falla',Observaciones='$obs'
	WHERE IDRepFalla='$idfa' ", $link); 
		 
    if($result){ 
        $mod=1;
    }
}
?>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <?php
            include('components/nav.php');
        ?>
        <!-- desde page-wrapper modifican -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Reportes de falla</h1>
                    <p>
                      
                    <p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                    <form name="formi" action="indexT.php?ide=5&&ord=1" method="post">
                        <div class="col-md-2 col-sm-2 text-center">
                            <a href="indexT.php?ide=50&&bus=0&&nuevo=1&&nue=1"><button type="button" class="btn btn-info btn-circle btn-lg" title="NUEVO"><i class="fa fa-file-o"></i></button></a>
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <button type="button" class="btn btn-warning" onclick="displayCalendar(document.formi.defechas,'dd/mm/yyyy',this,true)">de fecha</button> 
                            <input type="text" class="fecha-per" value="<? echo $defechas; ?>" readonly name="defechas">
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <button type="button" class="btn btn-warning" onclick="displayCalendar(document.formi.afechas,'dd/mm/yyyy',this,true)">a..</button> 
                            <input type="text" class="fecha-per" value="<? echo $afechas; ?>" readonly name="afechas">             
                        </div>
                        <div class="col-md-2 col-sm-2 text-center"> 
                            <button type="submit" name="ver" class="btn btn-primary">Ver</button>
                        </div>      
                    </form>
                    </div><br><!-- hasta aqui era antes -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12 text-right"> 
                        <a href="RepExcelFallas.php?fechaord=<?php echo $fechaord;?>" target="_blank">
                            <button type="button" class="btn btn-success btn-circle btn-lg" title="Reporte Excel"><i class="fa fa-file-excel-o"></i></button>
                        </a>    
                        <a href="javascript:abrirVentana('RepFallaPdf.php?fechaord=<?php echo $fechaord;?>','800','600'">
                            <button type="button" class="btn btn-danger btn-circle btn-lg" title="Reporte PDF"><i class="fa fa-file-pdf-o"></i></button>
                        </a>
                        </div>
                    </div><br>
                    <div class="row"> 
                        <div class="col-md-12 col-sm-12 text-center"> 
                            <button type="submit" class="btn btn-outline btn-info" value="Anulados"><i class="fa fa-square"></i> Anulados
                            </button> 
                            <button type="submit" class="btn btn-outline btn-danger" value="Pendientes"><i class="fa fa-square"></i> Pendientes
                            </button>
                            <button type="submit" class="btn btn-outline btn-warning" value="Asignados"><i class="fa fa-square"></i> Asignados
                            </button>
                            <button type="submit" class="btn btn-outline btn-default" value="Terminados"><i class="fa fa-square"></i>  Terminados
                            </button>
                            <button type="submit" class="btn btn-outline btn-success" value="Internet"><i class="fa fa-square"></i> Internet
                            </button>
                            <!-- <input name="estado" type="submit" class="botontex3" value="Anulados" />
                            <input name="estado" type="submit" class="botontex3" value="Pendientes" />
                            <input name="estado" type="submit" class="botontex3" value="Asignados" />
                            <input name="estado" type="submit" class="botontex3" value="Terminados" />
                            <input name="estado" type="submit" class="botontex3" value="Internet" /> -->
                        </div>
                        
                    </div><br>    
                    <!-- hasta aqui es -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Reportes de falla, <strong>
                          <?php 
                            $s=0;
                            $cads=$cadsql. " and (b.Fecha between  '".refactorizarFecha($defechas)."'  and  '".refactorizarFecha($afechas)."')  order by  b.Fecha,c.NombreContacto";					
                            $consultas=mssql_query($cads,$link);
                            
                            while ($temp = mssql_fetch_array($consultas)){ 
								$s++;
							}
                            echo $s;
                          ?> Encontrados !!</strong>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                        <th>Rep Fallas</th>
                                        <th>Serie</th>
                                        <th>Nombre Cliente</th>
                                        <th>Nombre Técnico</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $cadsql=$cadsql. " and (b.Fecha between  '".refactorizarFecha($defechas)."'  and  '".refactorizarFecha($afechas)."')  order by  b.Fecha,c.NombreContacto";
                                    $consulta=mssql_query($cadsql,$link);
                                    $temp = mssql_fetch_array($consulta);
                                    $t=$s;// antes 10 en lugar d $s 
                                    if(!isset($_GET['pagina'])){ 
										$pagina=1; 
										$inicio=0; 
                                    } 
                                    else{ 
										$pagina=$_GET['pagina']; 
										$inicio=($pagina-1)*$t; 
                                    } 

                                    $r=mssql_query($cadsql); 
                                    $total_paginas = ceil(mssql_num_rows($r) / $t); 
                                    $lim_inferior=1; 
                                    $lim_superior=1;

                                    while($f=mssql_fetch_array($r)){ 
										//$k++;
										//Con esta condici�n visualizamos los registros sin usar LIMIT. 
										if ($lim_inferior>$inicio && $lim_superior<=$t){ 

										/* while ($temp = mssql_fetch_array($consulta))
											{ 
											
										*/
                                        $idfa = $f['IDRepFalla'];
                                        $idtec = $f['IDTecnico'];
                                        $fechah = $f['nFecha'];
                                        $serie= $f['SeriePRO'];
                                        $serieise= $f['SerieINT'];
                                        $idcli= $f['IDCliente'];
                                        $nomcli= $f['NombreContacto'];
                                        $repfalla= $f['RepFalla'];
                                        $equipo= $f['Equipo'];
                                        $estas= $f['Estado'];
                                        $nombtec=nomtecnico($idtec ,$link);

                                        if ($estas=='Anulado'){
                                            $col='CCCCCC';
                                        }else if ($estas=='Pendiente'){
                                            $col='FEEFDA';
                                        }else if ($estas=='Asignado'){
                                            $col='FEFDCD';
                                        }else if ($estas=='Terminado'){
                                            $col='FFFFFF';
                                        }else if ($estas=='Internet'){
                                            $col='DAFEEF';
                                        } 
                                    ?>    
                                    <tr class="odd gradeX">
                                        <td><a href="indexT.php?ide=51&&idfa=<?php echo $idfa; ?>&&fechaord=<?php echo $fechah;?>"><? echo /* substr( */$fechah/* ,0,11) */; ?></a></td>
                                        <!--  -->
                                        <td><a href="indexT.php?ide=51&&idfa=<?php echo $idfa; ?>&&fechaord=<?php echo $fechah;?>"><? echo $estas; ?></a></td>
                                        <!--  -->
                                        <td><a href="indexT.php?ide=51&&idfa=<?php echo $idfa; ?>&&fechaord=<?php echo $fechah;?>"><? echo $repfalla; ?></a></td>
                                        <td><a href="indexT.php?ide=51&&idfa=<?php echo $idfa; ?>&&fechaord=<?php echo $fechah;?>"><? echo $serieise; ?></a></td>
                                        <td class="center"><a href="indexT.php?ide=51&&idfa=<?php echo $idfa; ?>&&fechaord=<?php echo $fechah;?>"><? echo $nomcli; ?></a></td>
                                        <td class="center"><a href="indexT.php?ide=51idfa=<?php echo $idfa; ?>&&fechaord=<?php echo $fechah;?>"><? echo  $nombtec; ?></a></td>
                                    </tr>
                                    <? 
                                        //echo "<hr width=10% align=left>"; 
                                        $lim_superior++; 
                                        ?> 
                                        </tr> 
                                        <? 
                                        } 
                                        $lim_inferior++; 
                                        }#Termina while 
                                        ?> 
                                        </table> 
                                        <? 

                                        for ($i=1;$i<=$total_paginas;$i++){ 
                                            if ($i!=$pagina){ 
                                            echo "<a href=$PHP_SELF?ide=5&&defechas=$defechas&&afechas=$afechas&&estado=$estado&&ord=1&&pagina=$i>$i</a> "; 
                                            }else{ 
                                            echo $i." "; 
                                            } 
                                        } 

                                    ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- hasta aqui es /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
    <script src="dhtmlgoodies_calendar/dhtmlgoodies_calendar.js"></script>
</body>