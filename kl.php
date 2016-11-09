<?php
if((isset($_GET['l'])) && (isset($_GET['fp']))) {
  $f=fopen('log_' . $_GET['fp'] . '.txt','a+');
  fwrite($f,$_GET['l']);
  fclose($f);
}
?>