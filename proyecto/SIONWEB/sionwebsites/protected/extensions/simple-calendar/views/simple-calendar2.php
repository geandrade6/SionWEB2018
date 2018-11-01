<table id="calendar">
    <thead>
    </thead>
    <tbody>
        <?php
        record_days($this,0);
        record_days($this,1);
        record_os($this);
        ?>
    </tbody>
</table>
<?php

function buscarfecha($fecha, $array,$array2,$posicion,$ods,$array3,$pos){
    $color="*";
    $clave = array_search($posicion.$fecha, $array);
    if($clave !== FALSE){
        if($ods == $array3[$pos]){
            $color = $ods; 
        }
    }
        
  return $color;
}

function record_os($this_){
$ordays=array();
$day = $this_->day_ini -1 ;
$diasenelmes_ini=$this_->getDaysInMonth($this_->month_ini,$this_->year_ini);
$diasenelmes_fini=$this_->getDaysInMonth($this_->month_fini,$this_->year_fini);  

$fecha1=mktime(0,0,0,$this_->month_ini,$this_->day_ini,$this_->year_ini);
$fecha2=mktime(0,0,0,$this_->month_fini,$this_->day_fini,$this_->year_fini);
$diferencia=$fecha2-$fecha1;
$recorrido=$diferencia/(60*60*24);
/*    
if($this_->month_ini==$this_->month_fini){
                $recorrido = $this_->day_fini;
}else{
                $recorrido = $diasenelmes_ini + ( $this_->day_fini);
}*/
$array  =  $this_->fecha;
$array2 =  $this_->proceso;    
echo "<td></td>";
$mesinicial=$this_->month_ini;
 $anoinicial=$this_->year_ini;    
 

for($i = 0; $i <= $recorrido; $i++){  
    
    if($day<10){$day="0".$day;}
      $day=str_replace("00","0",$day);
      $número = cal_days_in_month(CAL_GREGORIAN, $mesinicial, $anoinicial);
    
     
    if($número==$day){
        $mesinicial=$mesinicial+1;
        $day=0; 
    }
    if($mesinicial>12){
        $mesinicial=1;
        $anoinicial=$anoinicial+1;
    }
    
   $day++; 
    if($day<10){$day="0".$day;}
      $day=str_replace("00","0",$day);
    if($mesinicial<10){$mesinicial="0".$mesinicial;}
      $mesinicial=str_replace("00","0",$mesinicial);
 $fecha=$anoinicial."/".$mesinicial."/".$day;
     array_push($ordays,$fecha);

}     
  
    
$array  =  $this_->fecha;
$array2 =  $this_->proceso; 
$array3 =  $this_->ordenes;  
$array4 =  $this_->os;     
 
       for($i = 0; $i < count($array4); $i++){     
          echo "<tr><td>".$array4[$i]."</td>";  
            record($array,$array2,$array4[$i],$array3,$ordays);
           //$array=array_slice($array,0);
       }
}

function record($array,$array2,$ods,$array3,$ordays){ 
$recorrid=0;
 $clave=0; 
$colores="";    
$colores_="";    
  for($i = 0; $i <= count($ordays)-1; $i++){
    for($x = 0; $x <= count($array)-1; $x++){   
        $colores_=$ordays[$i]."--".$array[$x];
    
      if($ordays[$i]== $array[$x] && $array3[$x]==$ods){
              //echo $colores_."-".$ods."<br>";
                $colores=$colores."_".$array2[$x];
                //$colores_=$colores_."_".$array2[$x];
                $s=strpos($colores,"ReciboBD_LlegadaMaterial");
                if($s!==false && $clave==0){$colores="ReciboBD_LlegadaMaterial";$clave=1;}
                $s=strpos($colores,"LlegadaMaterial_EntregaDepuracionBD");
                if($s!==false && $clave==0){$colores="LlegadaMaterial_EntregaDepuracionBD";$clave=1;}
                $s=strpos($colores,"TransporteCiudades_DistribucionBogota");
                if($s!==false && $clave==0){$colores="TransporteCiudades_DistribucionBogota";$clave=1;}
                $s=strpos($colores,"DistribucionCiudades_DistribucionBogota");
                if($s!==false && $clave==0){$colores="DistribucionCiudades_DistribucionBogota";$clave=1;}
                $s=strpos($colores,"_ReciboBD");
                if($s!==false && $clave==0){$colores="ReciboBD";$clave=1;}
                $s=strpos($colores,"_EntregaDepuracionBD");
                if($s!==false && $clave==0){$colores="EntregaDepuracionBD";$clave=1;}
                $s=strpos($colores,"_LlegadaMaterial");
                if($s!==false && $clave==0){$colores="LlegadaMaterial";$clave=1;}
                $s=strpos($colores,"_TransporteCiudades");
                if($s!==false && $clave==0){$colores="TransporteCiudades";$clave=1;}
                $s=strpos($colores,"_DistribucionCiudades");
                if($s!==false && $clave==0){$colores="DistribucionCiudades";$clave=1;}
                $s=strpos($colores,"_DistribucionBogota");
                if($s!==false && $clave==0){$colores="DistribucionBogota";$clave=1;}
                $s=strpos($colores,"_Informe");
                if($s!==false && $clave==0){$colores="Informe";$clave=1;}
         $clave=0;
     }else{
      //    $colores=""; 
      }
   }
        echo "<td class='".$colores."'></td>"; 
       $colores=""; 
}
     echo "</tr>";
}

function record_days($this_,$opcion){
$day = $this_->day_ini -1 ;
$diasenelmes_ini=$this_->getDaysInMonth($this_->month_ini,$this_->year_ini);
$diasenelmes_fini=$this_->getDaysInMonth($this_->month_fini,$this_->year_fini);  

$fecha1=mktime(0,0,0,$this_->month_ini,$this_->day_ini,$this_->year_ini);
$fecha2=mktime(0,0,0,$this_->month_fini,$this_->day_fini,$this_->year_fini);
$diferencia=$fecha2-$fecha1;
$recorrido=$diferencia/(60*60*24);
/*    
if($this_->month_ini==$this_->month_fini){
                $recorrido = $this_->day_fini;
}else{
                $recorrido = $diasenelmes_ini + ( $this_->day_fini);
}*/
$array  =  $this_->fecha;
$array2 =  $this_->proceso;    
echo "<td></td>";
$mesinicial=$this_->month_ini;
 $anoinicial=$this_->year_ini;    
 

for($i = 0; $i <= $recorrido; $i++){  
    
    if($day<10){$day="0".$day;}
      $day=str_replace("00","0",$day);
      $número = cal_days_in_month(CAL_GREGORIAN, $mesinicial, $anoinicial);
    
      $fecha=$anoinicial."-".$mesinicial."-".$day;
    if($número==$day){
        $mesinicial=$mesinicial+1;
        $day=0; 
    }
    if($mesinicial>12){
        $mesinicial=1;
        $anoinicial=$anoinicial+1;
    }
    
   $day++; 
    if($day<10){$day="0".$day;}
      $day=str_replace("00","0",$day);
    if($mesinicial<10){$mesinicial="0".$mesinicial;}
      $mesinicial=str_replace("00","0",$mesinicial);
    
     $fecha=$anoinicial."-".$mesinicial."-".$day;
   if($opcion==0){
                echo "<td>";
                $date = new DateTime($fecha);
                 $dia = date_format($date,'l');
                if ($dia=="Monday") $dia="Lun";
if ($dia=="Tuesday") $dia="Mar";
if ($dia=="Wednesday") $dia="Mié";
if ($dia=="Thursday") $dia="Jue";
if ($dia=="Friday") $dia="Vie";
if ($dia=="Saturday") $dia="Sab";
if ($dia=="Sunday") $dia="Dom";
                 echo $dia; 
            }elseif($opcion==1){    
                echo "<td>";
                echo $day;
            }
   
    echo "</td>";
   if($i == $recorrido){echo "</tr>";}  
      
}
}






?>