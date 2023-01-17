<?php 




$x=$_GET['ok'];
$y=explode(' ',$x);
$i=3;
$file_open = fopen('../../etudiants/'.$y[0].".csv", "a");
fputcsv($file_open, ['sr_no'=>'cne','name'=>'nom','email'=>'prenom','subject' =>'email']);
fclose($file_open);
while($i<count($y)){
 $ta = array('sr_no'=>$y[$i-3+1],'name'=>$y[$i-2+1],'email'=>$y[$i-1+1],'subject' =>$y[$i+1]);
$file_open = fopen('../../etudiants/'.$y[0].".csv", "a");
 fputcsv($file_open, $ta);
 fclose($file_open);

 $i=$i+4;
 }

    

echo 1;



