<div class="row">
  <?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
  <div class="col-sm-4 col-md-4 col-lg-4">
    <select id="customer_id" name="customer_id" class="form-control chosen">
      <option value="0">Chọn khách hàng</option>
      <?php
		$customer_id = CHttpRequest::getParam('customer_id');
		$Customer = Customer::model()->findAll(array(
														'condition'=>'customer_status = "Hien"' ,
														'order'=>'customer_code'
													));
		foreach($Customer as $row){
			$selected = '';
			if($customer_id ==  $row['customer_id']){ $selected = 'selected';}
			echo '<option value="'. $row['customer_id'] .'" '. $selected .'>'. $row['customer_code'] .' - '. $row['customer_name'] .'</option>';
		}
    ?>
    </select>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-4">
    <select id="brand_id" name="brand_id" class="form-control chosen">
      <option value="0">Chọn thương hiệu</option>
      <?php
		$brand_id = CHttpRequest::getParam('brand_id');
		$condition = 'brand_status = "Hien"';
		if($customer_id > 0){ $condition .= ' AND customer_id='. $customer_id;}
		$Brand = Brand::model()->findAll(array(
														'condition'=>$condition ,
														'order'=>'brand_name'
													));
		foreach($Brand as $row){
			$selected = '';
			if($brand_id ==  $row['brand_id']){ $selected = 'selected';}
			echo '<option value="'. $row['brand_id'] .'" '. $selected .'>'. $row['customer_code'] .' - '. $row['brand_name'] .'</option>';
		}
    ?>
    </select>
  </div>
  <div class="col-sm-2 col-lg-1"><?php echo CHtml::submitButton('Tìm',array('class'=>'btn btn-large btn-danger')); ?> </div>
  <?php $this->endWidget(); ?>
</div>
<div id="dp" style="height:500px; "></div>
<script type="text/javascript">
     var dp = new DayPilot.Scheduler("dp");

    // behavior and appearance
	dp.heightSpec = "Max";
	dp.height = 500;
    dp.cellWidth = 30;
    dp.eventHeight = 30;
    dp.headerHeight = 25;
	
	dp.theme = 'scheduler_traditional';
	dp.cssOnly = true;
	
	
    // view
    dp.startDate = new DayPilot.Date("<?php echo date('Y-m-d',strtotime(date('Y-m-d')));?>").firstDayOfMonth();  // or just dp.startDate = "2013-03-25";
    dp.cellGroupBy = "Month";
    dp.days = 200;
    dp.cellDuration = 1440; // one day
    dp.rowHeaderColumns = [
      { title: 'K.hàng/Đ.hàng', width: 100, height:60 },
      { title: 'T.hiệu/M.hàng', width: 100, height:60 },
      { title: '#/SL/Giá/Tổng', width: 100, height:60 }
  ]; 
    dp.resources = [
	<?php
	$process = '';
	foreach($OrderItem as $row){
		echo '{ name: "'. $row['customer_code'] .'</br>' . $row['order_code'].'", id: "'. $row['order_item_id'] .'P",columns: [{html: "'. $row['brand_name'] . '</br>'. $row['item_code'] .'"},  {html: "'.$row['item_number'] . '</br>'. $row['item_quantity'] .' | ' . number_format($row['item_price'],2)  .' | ' . number_format($row['order_total'],2) . '"}]},';
		echo '{ name: "Thực tế", id: "'. $row['order_item_id'] .'",columns: [{html: ""},  {html: "	"}]},';
		foreach($row['orderItemProcess'] as $row2){
			$process .= '{
						  start: "'. date('Y-m-d',$row2['process_planing_fromdate']) .'",
						  end: "'. date('Y-m-d',$row2['process_planing_todate']) .'",
						  id: "'. $row2['order_item_process_id'] .'",
						  resource: "'. $row['order_item_id'] .'P",
						  text: "'. $row2['process']['process_name'] .'",
						  toolTip: "'.$row2['process']['process_name'] . ': ' .  $row2['process_planing_note'] .'", 
						  backColor: "'. $row2['process']['process_color'] .'"
						},';
			$process .= '{
						  start: "'. date('Y-m-d',$row2['process_from_date']) .'",
						  end: "'. date('Y-m-d',$row2['process_to_date']) .'",
						  id: "'. $row2['order_item_process_id'] .'",
						  resource: "'. $row['order_item_id'] .'",
						  text: "'. $row2['process']['process_name'] .'",
						  toolTip: "'. $row2['process']['process_name'] . ': ' . $row2['process_note'] .'",
						  backColor: "'. $row2['process']['process_color'] .'"
						},';						
		}
	}
	?>
    ];
	dp.events.list = [
   <?php echo $process;?>
    ];
	dp.rowHeaderScrolling = true;


	dp.scrollDelayDynamic = 500;
	dp.scrollDelayCells = 20;
	dp.scrollDelayEvents = 200;
	dp.scrollDelayFloats = 0;

    dp.init();
</script> 
