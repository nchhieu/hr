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
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

<!--page specific css styles-->
<link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen.min.css" />
<link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />
<link rel="stylesheet" type="text/css" href="assets/jquery-pwstrength/jquery.pwstrength.css" />
<link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="assets/bootstrap-duallistbox/duallistbox/bootstrap-duallistbox.css" />
<link rel="stylesheet" type="text/css" href="assets/dropzone/downloads/css/dropzone.css" />
<link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
<link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="assets/clockface/css/clockface.css" />
<link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="js/component.css" />
<!--flaty css styles-->
<link rel="stylesheet" href="css/vietcach.css">
<link rel="stylesheet" href="css/vietcach-responsive.css">
<link rel="shortcut icon" href="img/favicon.ico">
</head>
<body >
<!-- BEGIN Navbar -->

<div id="navbar" class="navbar">
  <button type="button" class="navbar-toggle navbar-btn for-nav-horizontal collapsed" data-toggle="collapse" data-target="#nav-horizontal"> <span class="fa fa-bars"></span> </button>
  <a class="navbar-brand" href="index.php"> <small> <i class="fa fa-desktop"></i> WISTERIA</small> </a> 
  
  <!-- BEGIN Navbar Buttons -->
  <ul class="nav flaty-nav pull-right">
    <!-- BEGIN Button Notifications --> 
    
    <!-- END Button Notifications --> 
    
    <!-- BEGIN Button User -->
    <li class="user-profile"> <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle"> <img class="nav-user-photo" src="<?php echo Yii::app()->user->getState('admin_avatar'); ?>" /> <span class="hhh" id="user_info"> <?php echo Yii::app()->user->getState('admin_name'); ?> </span> <i class="fa fa-caret-down"></i> </a> 
      
      <!-- BEGIN User Dropdown -->
      <ul class="dropdown-menu dropdown-navbar" id="user_menu">
        <li class="nav-header"> <i class="fa fa-clock-o"></i> <?php echo Yii::t('layout', 'DangNhapLuc{time}',array('{time}'=>date_format(date_create(Yii::app()->user->getState('admin_latest_login')),'H:i')));?></li>
        <li> <?php echo CHtml::link('Đổi mật khẩu', array('Admin/Changepwd','id'=>Yii::app()->user->getState('admin_id'))); ?></li>
        <li> <?php echo CHtml::link('Tài khoản của tôi', array('Admin/profile','id'=>Yii::app()->user->getState('admin_id'))); ?> </li>
        <?php if( Yii::app()->user->getState('admin_group') == 'Admin' ) { ?>
        <li ><?php echo CHtml::link('Quản lý người dùng', array('Admin/admin')); ?> </li>
        <?php  }  ?>
       
        <li class="divider"></li>
        <li> <?php echo CHtml::link('Thoát', array('Site/logout')); ?> </li>
      </ul>
      <!-- BEGIN User Dropdown --> 
    </li>
    <!-- END Button User -->
  </ul>
  <!-- END Navbar Buttons -->
  
  <ul class="nav flaty-nav navbar-collapse collapse" id="nav-horizontal">
    <!-- BEGIN Search Form --> 
    
    <!-- END Search Form -->
    <li <?php if(in_array($controler, array('site'))){ echo 'class="active"';} ?> > <a href="#" class="dropdown-toggle"> <i class="fa fa-users"></i> <span>Nhân viên</span> <b class="arrow fa fa-angle-right"></b> </a> 
      
      <!-- BEGIN Submenu -->
      <ul class="dropdown-menu dropdown-navbar">
        <li ><?php echo CHtml::link('Đang làm việc', array('nhanvien/admin')); ?></li>
        <li ><?php echo CHtml::link('Nghỉ tạm - thai sản', array('nhanvien/thaisan')); ?></li>
        <li ><?php echo CHtml::link('Đã nghỉ việc', array('nhanvien/nghiviec')); ?></li>
        <li ><?php echo CHtml::link('Thêm mới nhân viên', array('nhanvien/create')); ?></li>        
        <li class="divider"></li>
        <li ><?php echo CHtml::link('Bộ phận', array('bophan/admin')); ?></li> 
        <li ><?php echo CHtml::link('Phòng ban', array('phongban/admin')); ?></li> 
        <li ><?php echo CHtml::link('Chức danh', array('chucdanh/admin')); ?></li>
        <li ><?php echo CHtml::link('Trình độ', array('trinhdo/admin')); ?></li>
        <li ><?php echo CHtml::link('Thành phố', array('thanhpho/admin')); ?></li>
      </ul>
      <!-- END Submenu --> 
    </li>
    
    <!-- END Search Form -->
    <li <?php if(in_array($controler, array(''))){ echo 'class="active"';} ?> > <a href="#" class="dropdown-toggle"> <i class="fa fa-file-text"></i> <span>Hợp đồng lao động</span> <b class="arrow fa fa-angle-right"></b> </a> 
      
      <!-- BEGIN Submenu -->
      <ul class="dropdown-menu dropdown-navbar">
        <li ><?php echo CHtml::link('Danh sách nhân viên', array('nhanvien/admin')); ?></li>
        <li ><?php echo CHtml::link('Danh sách hợp đồng lao động', array('nhanvien/admin')); ?></li>
        <li class="divider"></li>
        <li ><?php echo CHtml::link('Mẫu hợp đồng lao động', array('bophan/admin')); ?></li> 

      </ul>
      <!-- END Submenu --> 
    </li>
    <li > <a href="#" class="dropdown-toggle"> <i class="fa fa-money"></i> <span>Lương</span> <b class="arrow fa fa-angle-right"></b> </a> 
      
      <!-- BEGIN Submenu -->
      <ul class="dropdown-menu dropdown-navbar">
        <li ><?php echo CHtml::link('Nhập lương nhân viên', array('nhanvienLuong/admin')); ?></li>
        <li ><?php echo CHtml::link('Chấm công', array('nhanvien/admin')); ?></li>
        <li ><?php echo CHtml::link('Tính lương', array('tinhluong/admin')); ?></li>
        <li ><?php echo CHtml::link('In bảng lương', array('tinhluong/admin')); ?></li>
        <li ><?php echo CHtml::link('Báo cáo', array('tinhluong/admin')); ?></li>
        
        
        <li class="divider"></li>
        <li ><?php echo CHtml::link('Cài đặt tính lương', array('cauhinh/admin')); ?></li>
      </ul>
      <!-- END Submenu --> 
    </li>

    <li > <a href="#" class="dropdown-toggle"> <i class="fa fa-cog"></i> <span>Cấu hình</span> <b class="arrow fa fa-angle-right"></b> </a> 
      
      <!-- BEGIN Submenu -->
      <ul class="dropdown-menu dropdown-navbar">
        <li ><?php echo CHtml::link('Người dùng', array('Giacong/admin')); ?> </li>
        <li class="divider"></li>
      </ul>
      <!-- END Submenu --> 
    </li>
   
   
  </ul>
</div>
<!-- END Navbar --> 

<!-- BEGIN Container -->
<div class="container" id="main-container"> 
  <!-- BEGIN Sidebar --> 
  
  <!-- END Sidebar --> 
  
  <!-- BEGIN Content -->
  <div id="main-content"> <?php echo $content;?>
    <footer>
      <p>2016 © Powered by Wisteria Co.,ltd.</p>
    </footer>
    <!--a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a--> </div>
  <!-- END Content --> 
</div>
<!-- END Container --> 

<!--basic scripts--> 
<script>window.jQuery || document.write('<script src="assets/jquery/jquery-2.0.3.min.js"><\/script>')</script> 
<script src="assets/jquery/jquery.ba-throttle-debounce.min.js"></script> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script> 
<script src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script> 
<script src="assets/jquery-cookie/jquery.cookie.js"></script> 
<script src="js/salary.js"></script> 

<!--page specific plugin scripts--> 
<script type="text/javascript" src="assets/chosen-bootstrap/chosen.jquery.min.js"></script> 
<script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script> 
<script type="text/javascript" src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script> 
<script type="text/javascript" src="assets/jquery-pwstrength/jquery.pwstrength.min.js"></script> 
<script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.min.js"></script> 
<script type="text/javascript" src="assets/bootstrap-duallistbox/duallistbox/bootstrap-duallistbox.js"></script> 
<script type="text/javascript" src="assets/dropzone/downloads/dropzone.min.js"></script> 
<script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script> 
<script type="text/javascript" src="assets/clockface/js/clockface.js"></script> 
<script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> 
<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> 
<script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script> 
<script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script> 

<!--flaty scripts--> 
<script src="js/pose.js"></script> 
<script src="js/pose-demo-codes.js"></script> 
<script src="js/jquery.stickyheader.js"></script>
</body>
</html>
