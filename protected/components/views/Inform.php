<?php if(Yii::app()->user->hasFlash('success')):?>

<div class="alert alert-success">
  <button class="close" data-dismiss="alert">×</button>
  <h4>Thông báo</h4>
  <p><?php echo Yii::app()->user->getFlash('success'); ?></p>
</div>
<?php endif; ?>
<?php if(Yii::app()->user->hasFlash('error')):?>
<div class="alert alert-danger">
  <button class="close" data-dismiss="alert">×</button>
  <h4>Thông báo</h4>
  <p><?php echo Yii::app()->user->getFlash('error'); ?></p>
</div>
<?php endif; ?>
