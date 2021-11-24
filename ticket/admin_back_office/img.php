<?php
ini_set('allow_url_fopen',1);
error_reporting(E_ALL); 
ini_set('display_errors', 1);
if($_SERVER['SERVER_NAME'] == 'localhost'){
  require_once($_SERVER['DOCUMENT_ROOT'].'/lotrich/config/domains/lotrich/config.php'); 
}else{
  require_once('/home/charoenlap/domains/charoenlap.com/config/domains/lotrich/config.php'); 
}
require_once(PATH_LIB."/gd/ThumbLib.inc.php");
require_once(PATH_LIB."/gd/GdThumb.inc.php");

$sFIle = $_GET["file"]; 
$sFIle = explode(",", $sFIle); 
$nMode = $sFIle[0]; 
$nPath = $sFIle[1]; 
$nFile = $sFIle[2];
$nW = $sFIle[3];
$nH = $sFIle[4];
if(isset($sFIle[5])){
  $wm = $sFIle[5];
}
$nPath=PATH_UPLOAD;
    $PathFile = "$nPath/$nFile";
    $thumb = PhpThumbFactory::create($PathFile);


    if ($nMode==1){$thumb->cropFromCenter($nW, $nH);}
    elseif ($nMode==2){$thumb->adaptiveResize($nW, $nH);}
    if(isset($wm) && $wm == 1){
      $thumb->showWatermask($result_pic_water);
    }else{
      $thumb->show();

    }
?>