<?php
 $sql = "SELECT rTrim(Clave) As Clave,Usuario FROM dbAdm.dbo.UsuariosWEB  WHERE  IDUsuarioCliente='$iduc' and Estado='h'";
						$result = mssql_query($sql, $link);
						$myrow = mssql_fetch_array($result);
						$login = $myrow["Usuario"];
             $password = $myrow["Clave"];
  if(isset($_GET['contra'])){
    $contra=$_GET['contra'];	
  }           
?>
<script language="JavaScript" type="text/javascript">
function Validadoce(theform) 
{   
if (theform.login.value == ""){alert("Debe ingresar cuenta"); theform.login.focus(); return (false); }
if (theform.passworda.value == ""){alert("Debe ingresar su contraseña actual"); theform.passworda.focus(); return (false); }
if (theform.passwordb.value != theform.passworda.value) {
    alert("La contraseña proporcionada no es correcta !");
    theform.passworda.select();
    return false;
}
if (theform.password1.value == ""){alert("Debe ingresar  la nueva contraseña"); theform.password1.focus(); return (false); }
if (theform.password2.value == ""){alert("Debe confirmar la nueva contraseña"); theform.password2.focus(); return (false); }
if (theform.password1.value != theform.password2.value) {
    alert("Las contraseñas proporcionadas no coinciden!");
    theform.password1.focus();
    theform.password2.select();
    return false;
}
}
</script>
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
                    <h1 class="page-header">Modificar contraseña</h1>
                    <p>
                      <a href="indexT.php"><button type="button" class="btn btn-warning" ><i class="fa fa-times"></i> Cancelar</button></a>
                    <p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <form name="FormName" action="indexT.php" method="post" onSubmit="return Validadoce(this)">
                <?php  
                    if($contra){
                ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Modificar contraseña
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 text-right">
                                        <label>Nombre usuario: </label>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="hidden" name="iduc" size="50" maxlength="40" value="<?php echo $iduc?>">
                                        <input type="text" name="login" class="form-control" readonly="true" value="<?php echo $login ?>">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 text-right">
                                        <label>Contraseña actual: </label>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <input  type="hidden" name="passwordb" size="50" maxlength="40" value="<?php echo $password?>"> 
                                        <input type="password" class="form-control" type="password" name="passworda" size="30" maxlength="40">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 text-right">
                                        <label>Nueva contraseña: </label>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="password" class="form-control" name="password1" size="30" maxlength="40">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 text-right">
                                        <label>Confirmar contraseña: </label>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="password" class="form-control" name="password2" size="30" maxlength="40">
                                    </div>
                                </div><br>
                                <div class="row text-center">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                    <button type="reset" class="btn btn-default">Limpiar</button>
                                </div>

                            </div>
                        </div>
                <?php 
                    } 
                ?>    
                </form>        
                </div>    
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

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
</body>