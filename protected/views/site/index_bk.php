<?php

/* @var $this BannerController */
/* @var $model Banner */
$this->breadcrumbs=array(
	'Home'=>array('admin'),
	'Manage',
);
?>

<!-- BEGIN Page Title -->

<div class="page-title">
  <div>
    <h1><i class="fa fa-thumbs-up"></i> Hi ! <?php echo Yii::app()->user->getState('admin_name'); ?></h1>
  </div>
</div>
<!-- END Page Title --> 

<!-- BEGIN Breadcrumb -->
<div id="breadcrumbs">
  <ul class="breadcrumb">
    <li class="active"><i class="fa fa-home"></i> Home</li>
  </ul>
</div>
<!-- END Breadcrumb -->

<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-title">
        <h3><i class="fa  fa-search"></i> Danh sách mã hàng </h3>
      </div>
      <div class="box-content search-form">
        <div class="table-responsive table-big"> 
        
        <table class="table table-striped  table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>K. hàng</th>
                                            <th>T. Hiệu</th>
                                            <th>Mã hàng</th>
                                            <th>Mã hàng #</th>
                                            <th>SL</th>
                                            <th>Giá</th>
                                            <th>Tổng</th>
                                            <?php
                                            foreach($Process as $row){
												echo 	'<th class=" show-tooltip panel panel-warning" data-placement="top" data-original-title="' .  $row['process_name'] .' " >'. $row['process_code'] .'</th>';
											}
											?>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									foreach($OrderItem as $row){
										$OrderItemProcess = OrderItemProcess::model()->findallbyAttributes(array('order_item_id'=>$row['order_item_id']));
										$arrProcess = array();
										foreach($OrderItemProcess as $row2){
											$arrProcess[$row2['process_id']][3] = $row2['order_item_process_id'];
											if($row2['process_date'] != '0000-00-00'){
												$arrProcess[$row2['process_id']][0] = date("d M", strtotime($row2['process_date']));
												$arrProcess[$row2['process_id']][1] = $row2['process_note'];
												$arrProcess[$row2['process_id']][2] = $row2['process_status'];
											}
											if($row2['process_planing_date'] != '0000-00-00'){
												$arrProcess[$row2['process_id']][5] =  date("d M", strtotime($row2['process_planing_date']));
												$arrProcess[$row2['process_id']][6] = $row2['process_planing_status'];
												$arrProcess[$row2['process_id']][4] = $row2['process_planing_note'];
											}
										}
                                    ?>
                                        <tr>
                                            <td><?php echo $row['order_item_id']?></td>
                                            <td><?php echo $row['customer_code']?></td>
                                            <td><?php echo $row['brand_name']?></td>
                                            <td><?php echo $row['item_code']?></td>
                                            <td><?php echo $row['item_number']?> <?php echo CHtml::link('<i class="fa fa-envelope"></i> Email',array('Chat/admin','id'=>$row['order_id']),array('class'=>''));?></td>
                                            <td><?php echo number_format($row['item_quantity']);?></td>
                                            <td><?php echo number_format($row['item_price'],2);?></td>
                                            <td><?php echo number_format($row['order_total'],2)?></td>
                                            <?php
                                            foreach($Process as $row2){
												$tooltip = '';
												if(isset($arrProcess[$row2['process_id']][1])) $tooltip = 'class=" show-tooltip" data-placement="top" data-original-title="' .  $arrProcess[$row2['process_id']][1] .' "';
												echo 	'<td '. $tooltip .' >';
												 if(isset($arrProcess[$row2['process_id']][0])){
													 $css = '';
													 if($arrProcess[$row2['process_id']][2] == 'Planing') $css = 'label label-xlarge label-yellow';
													 if($arrProcess[$row2['process_id']][2] == 'Processing') $css = 'label label-xlarge label-warning';
													 if($arrProcess[$row2['process_id']][2] == 'Done') $css = 'label label-xlarge label-lime';
													 
												 	echo CHtml::link($arrProcess[$row2['process_id']][0],array('orderItemProcess/update','id'=>$arrProcess[$row2['process_id']][3], 'process_id'=>$row2['process_id']), array('class'=>$css)); ; 
												 }
												 else{ 
												 	if(isset($arrProcess[$row2['process_id']][3])){
												 		echo CHtml::link('----',array('orderItemProcess/update','id'=>$arrProcess[$row2['process_id']][3], 'process_id'=>$row2['process_id']));
												 	}else{
														echo CHtml::link('----',array('orderItemProcess/create','id'=>$row['order_item_id'], 'process_id'=>$row2['process_id']));
													}
												 }
												 echo '</td>';
											}
											?>
                                        </tr>
                                        <tr>
                                        	<td colspan="8">Planing</td>
                                        	<?php
                                            foreach($Process as $row2){
												$tooltip = '';
												if(isset($arrProcess[$row2['process_id']][4])) $tooltip = 'class=" show-tooltip" data-placement="top" data-original-title="' .  $arrProcess[$row2['process_id']][4] .' "';
												echo 	'<td '. $tooltip .' >';

												 if(isset($arrProcess[$row2['process_id']][5])){
													 $css = '';
													 if($arrProcess[$row2['process_id']][6] == 'Planing') $css = 'label label-xs label-yellow';
													 if($arrProcess[$row2['process_id']][6] == 'Processing') $css = 'label label-xs label-warning';
													 if($arrProcess[$row2['process_id']][6] == 'Done') $css = 'label label-xs label-lime';
													 
												 	echo CHtml::link($arrProcess[$row2['process_id']][5],array('orderItemProcess/update','id'=>$arrProcess[$row2['process_id']][3], 'process_id'=>$row2['process_id']), array('class'=>$css)); ; 
												 }
												 else{ 
												 	if(isset($arrProcess[$row2['process_id']][3])){
												 		echo CHtml::link('----',array('orderItemProcess/update','id'=>$arrProcess[$row2['process_id']][3], 'process_id'=>$row2['process_id']));
													}else{
														echo CHtml::link('----',array('orderItemProcess/create','id'=>$row['order_item_id'], 'process_id'=>$row2['process_id']));
													}
												 }
												 echo '</td>';
											}
											?>
                                        </tr>
                                    <?php
									} // for
									?>
                                    </tbody>
                                </table>
                                
                                
        
         </div>
         <label class="label label-xlarge label-yellow">Planing</label>
                                <label class="label label-xlarge label-warning">Processing</label>
                                <label class="label label-xlarge label-lime">Done</label>
      </div>
    </div>
  </div>
</div>
