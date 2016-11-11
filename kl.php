<?php
if((isset($_GET['l'])) && (isset($_GET['fp']))) {
  $f=fopen($_GET['fp'] . '/log_' . '.txt','a+');
  fwrite($f,$_GET['l']);
  fclose($f);
}
?>