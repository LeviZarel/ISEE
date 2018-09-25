<?php
function dibarrasel()
{
?>

 <tr  bgcolor="#D8F1FE" class="menlat">
                <td width="14%" ><div align="center">Fecha</div></td>
                <td width="14%"><div align="center">Folio</div></td>
                <td width="31%"><div align="center">Nombre Cliente</div></td>
                <td width="30%"><div align="center">Nombre Técnico</div></td>
                <td width="11%"><div align="center">EDIT/PROC</div></td>
              </tr>
<?php
}
?>
<?php
function dibarrasel2($idtr,$fechah,$folio,$nomb,$nombtec,$estado,$color)
{

?>
<tr align="left"  class="tit" bgcolor="<?php echo $color;?>">
                <td width="14%" height="20" ><a href="indexT.php?ide=61&&idtr=<?php echo $idtr; ?>&&fechaord=<?php echo $fechah;?>">&nbsp;&nbsp;</a><a href="indexT.php?ide=61&&idtr=<?php echo $idtr; ?>&&fechaord=<?php echo $fechah;?>"><? echo substr($fechah,0,12); ?></a></td>
                <td width="17%"><a href="indexT.php?ide=61&&idtr=<?php echo $idtr; ?>&&fechaord=<?php echo $fechah;?>">&nbsp;&nbsp;<? echo $folio; ?></a></td>
                <td><a href="indexT.php?ide=61&&idtr=<?php echo $idtr; ?>&&fechaord=<?php echo $fechah;?>"><? echo $nomb; ?></a></td>
                <td><a href="indexT.php?ide=61&&idtr=<?php echo $idtr; ?>&&fechaord=<?php echo $fechah;?>"><? echo $nombtec; ?>
                </a></td>
				 <td  width="10%"   >   <div align="center">
				   <?php 
					 
					   
    echo "<a href='indexT.php?ide=61&&idtr=$idtr&&fechaord=$fechah'><img src='imagen/i.p.folder.drafts.gif' width='17' height='13' border='0'alt='Editar'></a>&nbsp;&nbsp;&nbsp;";

	echo "<a href='indexT.php?ide=6&&verest=1&&estado=$estado&&idtr=$idtr&&fechas=$fechaord&&ord=1' ><img src='imagen/carpes.gif' width='17' height='13' border='0'alt='Procesar'></a>&nbsp;";
	
       ?>
				 </div></td>
              </tr>
<?php
}
?>

<?php
function dibarravis()
{
?>
<table   width="100%" cellspacing="0">	
              <tr  bgcolor="#D8F1FE" class="menlat">
                <td width="14%" ><div align="center">Fecha</div></td>
                <td width="14%"><div align="center">Folio</div></td>
                <td width="31%"><div align="center">Nombre Cliente</div></td>
                <td width="30%"><div align="center">Nombre Técnico</div></td>
                <td width="11%"><div align="center">EDIT/PROC</div></td>
              </tr>
</table>
<?php
}
?>
<?php
function dibarravis2($idtr,$fechah,$folio,$nomb,$nombtec,$estado,$color)
{
?>
<tr align="left"  class="tit" bgcolor="<?php echo $color;?>">
                <td width="14%" height="20" ><a href="indexT.php?ide=61&&idtr=<?php echo $idtr; ?>&&fechaord=<?php echo $fechah;?>">&nbsp;&nbsp;<? echo substr($fechah,0,12); ?></a></td>
                <td width="17%"><a href="indexT.php?ide=61&&idtr=<?php echo $idtr; ?>&&fechaord=<?php echo $fechah;?>">&nbsp;&nbsp;<? echo $folio; ?></a></td>
                <td width="34%"><a href="indexT.php?ide=61&&idtr=<?php echo $idtr; ?>&&fechaord=<?php echo $fechah;?>"><? echo $nomb; ?></a></td>
                <td width="25%"><a href="indexT.php?ide=61&&idtr=<?php echo $idtr; ?>&&fechaord=<?php echo $fechah;?>">
                  <? echo $nombtec;  ?>
                </a></td>
				 <td  width="10%"   >   <div align="center">
            <?php 
					 
					   
    echo "<a href='indexT.php?ide=61&&idtr=$idtr&&fechaord=$fechah'><img src='imagen/i.p.folder.drafts.gif' width='17' height='13' border='0'alt='Editar'></a>&nbsp;&nbsp;&nbsp;";

		echo "<a href='indexT.php?ide=6&&verest=1&&estado=$estado&&idtr=$idtr&&fechas=$fechah&&ord=1' ><img src='imagen/carpes.gif' width='17' height='13' border='0'alt='Procesar'></a>&nbsp;";
	
       ?>
             </div>    </td>
              </tr>
<?php
}
?>
<?php
function dibarrafall()
{
?>

              <tr class="menlat">
                <td width="12%" ><div align="center">Fecha</div></td>
                <td width="14%" class="titulo"><div align="center">RepFallas</div></td>
				
				<td width="14%"><div align="center">Serie</div></td>
                <td width="23%"><div align="center">Nombre Cliente</div></td>
                <td width="23%"><div align="center">Nombre Técnico</div></td>
            
              </tr>
			 
<?php
}
?>
<?php
function dibarrafal2($idfa,$fechah,$repfalla,$serie,$serieise,$nombtec,$nomcli,$estado,$color)
{

?>
<tr align="left"  class="tit" bgcolor="<?php echo $color;?>">
                <td width="13%" height="20" ><a href="indexT.php?ide=51&&idfa=<?php echo $idfa; ?>&&fechaord=<?php echo $fechah;?>">&nbsp;&nbsp;<? echo substr($fechah,0,11); ?></a></td>
                <td width="15%"><a href="indexT.php?ide=51&&idfa=<?php echo $idfa; ?>&&fechaord=<?php echo $fechah;?>">&nbsp;&nbsp;<? echo $repfalla; ?></a></td>
				
				
				<td width="17%"><a href="indexT.php?ide=51&&idfa=<?php echo $idfa; ?>&&fechaord=<?php echo $fechah;?>">&nbsp;&nbsp;<? echo $serieise; ?></a></td>
                <td width="21%"><a href="indexT.php?ide=51&&idfa=<?php echo $idfa; ?>&&fechaord=<?php echo $fechah;?>"><? echo $nomcli; ?></a></td>
               <td width="17%"><a href="indexT.php?ide=51idfa=<?php echo $idfa; ?>&&fechaord=<?php echo $fechah;?>"><? echo  $nombtec; ?>
                </a></td>
              </tr>
<?php
}
?>
<?php
function dibarrainf()
{
?>

             <tr  bgcolor="#D8F1FE" class="menlat">
                <td width="14%" ><div align="center">Fecha</div></td>
                <td width="14%"><div align="center">Informe</div></td>				
                <td width="35%"><div align="center">Nombre Cliente</div></td>
                <td width="30%"><div align="center">Nombre Técnico</div></td>
                <td width="11%"><div align="center">EDIT/PROC</div></td>
            
              </tr>
			 
<?php
}
?>
<?php
function dibarrainf2($idin,$fechah,$informe,$cli,$doc,$nombtec,$estado,$color)
{

?>
<tr align="left"  class="tit" bgcolor="<?php echo $color;?>">
                <td width="14%" height="20" ><a href="indexT.php?ide=71&&idin=<?php echo $idin; ?>&&fechaord=<?php echo $fechah;?>">&nbsp;&nbsp;<? echo substr($fechah,0,12); ?></a></td>
                <td width="14%"><a href="indexT.php?ide=71&&idin=<?php echo $idin; ?>&&fechaord=<?php echo $fechah;?>">&nbsp;&nbsp;<? echo $informe; ?></a></td>
			
                <td><a href="indexT.php?ide=71&&idin=<?php echo $idin; ?>&&fechaord=<?php echo $fechah;?>"><? echo $cli; ?></a></td>
                <td><a href="indexT.php?ide=71&&idin=<?php echo $idin; ?>&&fechaord=<?php echo $fechah;?>">
                  <?  echo  $nombtec; ?>
                </a></td>
               
               <td  width="10%"   >   <div align="center">
            <?php 
					 
					   
    echo "<a href='indexT.php?ide=71&&idin=$idin&&fechaord=$fechah'><img src='imagen/i.p.folder.drafts.gif' width='17' height='13' border='0'alt='Editar'></a>&nbsp;&nbsp;&nbsp;";

		echo "<a href='indexT.php?ide=7&&verest=1&&estado=$estado&&idin=$idin&&fechas=$fechah&&ord=1' ><img src='imagen/carpes.gif' width='17' height='13' border='0'alt='Procesar'></a>&nbsp;";
	
       ?>
             </div>    </td>
             </tr>
<?php
}
?>