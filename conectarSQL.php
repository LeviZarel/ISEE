<?php
  function conectarseSQL()
  {
       if(!($linkSQL= mssql_connect('WIN-9C4PNL0PVMU','','')))//'192.168.0.2','orionnet','mccrnet' 
       //'(local)','GALVEZTEAM',''
        {
          echo("Error conectando a la base de datos");
          exit();
        }
       if(!mssql_select_db('dbadm',$linkSQL))
        {
          echo("Error seleccionando la base de datos");
          exit();
        } 
        return $linkSQL;   
  }
	
?>
