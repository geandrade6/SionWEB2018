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
    
$day = $this_->day_ini;
$diasenelmes_ini=$this_->getDaysInMonth($this_->month_ini,$this_->year_ini);
$diasenelmes_fini=$this_->getDaysInMonth($this_->month_fini,$this_->year_fini);   
if($this_->month_ini==$this_->month_fini){
                $recorrido = $this_->day_fini;
            }else{
                $recorrido = $diasenelmes_ini + ( $this_->day_fini);
            }
 $mesinicial=$this_->month_ini;
 $anoinicial=$this_->year_ini;    
for($i = $this_->day_ini; $i <= $recorrido; $i++){    
     if($day>$diasenelmes_ini){ $day=1; }
     if($day<10){$day="0".$day;}
      $day=str_replace("00","0",$day);
    $número = cal_days_in_month(CAL_GREGORIAN, $mesinicial, $anoinicial);
     $fecha=$anoinicial."/".$mesinicial."/".$day;
    if($número<10){$número="0".$número;}
    if($número==$day){
        $mesinicial=$mesinicial+1;
    }
    if($mesinicial>12){
        $mesinicial=1;
        $anoinicial=$anoinicial+1;
    }
     array_push($ordays,$fecha);
     $day++; 
}     
  
    
$array  =  $this_->fecha;
$array2 =  $this_->proceso; 
$array3 =  $this_->ordenes;  
$array4 =  $this_->os;     
     
    //print_r($ordays);
       for($i = 0; $i <= count($array2)-1; $i++){     
          echo "<tr><td>".$array2[$i]."</td>";  
            record($array,$array2,$array2[$i],$array3,$ordays);
           //$array=array_slice($array,0);
       }

    echo"<br>";
   
}

function record($array,$array2,$ods,$array3,$ordays){ 
$recorrid=0;
 $clave=0; 
$colores="";    
$colores_="";    
    
  for($i = 0; $i <= count($ordays)-1; $i++){
    for($x = 0; $x < count($array); $x++){   
       // $colores_=$array2[$x].$ordays[$i]."--".$array[$x]."--".$ods."<br>";
       // echo $colores_;
      if($ods.$ordays[$i] == $array[$x]){
                $colores=$colores."_".$array2[$x];
             
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
     }
   }
        echo "<td class='".$colores."'></td>"; 
       $colores=""; 
}
     echo "</tr>";
}

function record_days($this_,$opcion){
$day = $this_->day_ini;
$diasenelmes_ini=$this_->getDaysInMonth($this_->month_ini,$this_->year_ini);
$diasenelmes_fini=$this_->getDaysInMonth($this_->month_fini,$this_->year_fini);   
if($this_->month_ini==$this_->month_fini){
                $recorrido = $this_->day_fini;
            }else{
                $recorrido = $diasenelmes_ini + ( $this_->day_fini);
            }
$array  =  $this_->fecha;
$array2 =  $this_->proceso;    
echo "<td></td>";
 $mesinicial=$this_->month_ini;
 $anoinicial=$this_->year_ini;    
    
for($i = $this_->day_ini; $i <= $recorrido; $i++){    
     if($day>$diasenelmes_ini){ $day=1; }
     if($day<10){$day="0".$day;}
      $day=str_replace("00","0",$day);
   
    $número = cal_days_in_month(CAL_GREGORIAN, $mesinicial, $anoinicial);
    if($número==$day){
        $mesinicial=$mesinicial+1;
    }
    if($mesinicial>12){
        $mesinicial=1;
        $anoinicial=$anoinicial+1;
    }
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
      $day++; 
    echo "</td>";
   if($i == $recorrido){echo "</tr>";}  
}
}






?>