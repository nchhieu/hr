<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$this->breadcrumbs=array(
	Yii::t('layout', 'QuanLyThongTinChung')=>array('setting'),
);
?>

<div class="page-title">
  <div>
    <h2> <i class="fa fa-cogs"></i> <?php echo Yii::t('layout', 'QuanLyThongTinChung');?></h2>
    <h4></h4>
  </div>
  <div id="breadcrumbs">
    <?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class='col-md-2'><?php echo CHtml::link('<div class="img img-center"><i class="fa  fa-sort-numeric-asc"></i></div><p class="title text-center">'. Yii::t('setting', 'QuyTrinhDonhang') .'</p>', array('Process/admin'), array('class'=>'tile tile-blue')); ?></div>
      <div class='col-md-2 '><?php echo CHtml::link('<div class="img img-center"><i class="fa fa-sort-alpha-asc"></i></div><p class="title text-center">'. Yii::t('setting', 'LoaiChiPhi') .'</p>', array('CostType/admin'), array('class'=>'tile tile-magenta ')); ?></div>
      <div class='col-md-2 '><?php echo CHtml::link('<div class="img img-center"><i class="fa fa-comment-o"></i></div><p class="title text-center">'. Yii::t('setting', 'LoaiSuCo') .'</p>', array('NotesType/admin'), array('class'=>'tile tile-orange')); ?></div>
      <div class='col-md-2 '><?php echo CHtml::link('<div class="img img-center"><i class="fa fa-tags"></i></div><p class="title text-center">'. Yii::t('setting', 'ThuongHieuKhachHang') .'</p>', array('brand/admin'), array('class'=>'tile tile-green')); ?></div>
      <div class='col-md-2 '><?php echo CHtml::link('<div class="img img-center"><i class="fa fa-comments-o"></i></div><p class="title text-center">'. Yii::t('setting', 'ChuDeLienHe') .'</p>', array('ChatTopic/admin'), array('class'=>'tile tile-dark-blue ')); ?></div>
      <div class='col-md-2 '><?php echo CHtml::link('<div class="img img-center"><i class="fa fa-file-text-o"></i></div><p class="title text-center">'. Yii::t('setting', 'MauEmailVietSan') .'</p>', array('ChatTemplate/admin'), array('class'=>'tile tile-blue ')); ?></div>
      <div class='col-md-2 '><?php echo CHtml::link('<div class="img img-center"><i class="fa fa-sitemap"></i></div><p class="title text-center">'. Yii::t('setting', 'CapBacCongNhan') .'</p>', array('WorkerLevel/admin'), array('class'=>'tile tile-blue ')); ?></div>
      <div class='col-md-2 '><?php echo CHtml::link('<div class="img img-center"><i class="fa fa-clock-o"></i></div><p class="title text-center">'. Yii::t('setting', 'BamGioCongDoan') .'</p>', array('SewingItem/admin'), array('class'=>'tile tile-orange')); ?></div>
      <div class='col-md-2 '><?php echo CHtml::link('<div class="img img-center"><i class="fa fa-globe"></i></div><p class="title text-center">'. Yii::t('setting', 'QuocTich') .'</p>', array('Nationality/admin'), array('class'=>'tile tile-green')); ?></div>
      <div class='col-md-2 '><?php echo CHtml::link('<div class="img img-center"><i class="fa fa-globe"></i></div><p class="title text-center">'. Yii::t('setting', 'ThanhPho/NoiSinh') .'</p>', array('City/admin'), array('class'=>'tile tile-magenta')); ?></div>
      <div class='col-md-2 '><?php echo CHtml::link('<div class="img img-center"><i class="fa fa-copy"></i></div><p class="title text-center">'. Yii::t('setting', 'LoaiTaiLieu') .'</p>', array('docType/admin'), array('class'=>'tile tile-orange')); ?></div>
      <div class='col-md-2 '><?php echo CHtml::link('<div class="img img-center"><i class="fa fa-thumbs-o-up"></i></div><p class="title text-center">'. Yii::t('setting', 'KyNangMay') .'</p>', array('skill/admin'), array('class'=>'tile tile-dark-blue')); ?></div>
      
    </div>
  </div>
</div>
