<?php 
/* @var $this Controller */
$controler = strtolower(Yii::app()->controller->id);
$action = strtolower($this->action->id);
$CurrentLink = Yii::app()->request->url ;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

<!--base css styles-->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<style>
@page  
{ 
    size: auto;   /* auto is the initial value */ 
    /* this affects the margin in the printer settings */ 
    margin: 5mm 5mm 5mm 5mm;  
} 
body{ margin:0px;}
</style>
</head>
<body >
<!-- BEGIN Navbar -->


<!-- END Navbar --> 

<!-- BEGIN Container -->
<div class="container" id="main-container" style="margin-top:10px;"> 
  <!-- BEGIN Sidebar --> 
  
   <?php echo $content;?>
</div>
<!-- END Container --> 

</body>
</html>
