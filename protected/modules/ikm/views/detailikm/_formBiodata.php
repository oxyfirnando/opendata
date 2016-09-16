<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'PIMPINAN'); ?>
		<?php echo $form->textField($model,'PIMPINAN',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'PIMPINAN'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'ALAMAT'); ?>
		<?php echo $form->textArea($model,'ALAMAT',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ALAMAT'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'TELP'); ?>
		<?php echo $form->textField($model,'TELP',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'TELP'); ?>
	</div>
	<div class="row">
	<?php $kecamatan = new Kecamatan()?>
	<?php echo $form->labelEx($kecamatan,'KECAMATAN'); ?>
	<?php 
		echo CHtml::dropDownList('id_kecamatan','', 
			 CHtml::listData($kecamatan->findAll(),'ID_KECAMATAN','KECAMATAN'),
 						array('prompt'=>'Pilih Kecamatan',
 							  'value'=>'',
 							  'ajax' => array('type'=>'POST', 
 							  				'url'=>CController::createUrl('filterkel'), 
 							  				'update'=>'#Detailikm_ID_KELURAHAN', 
 							  				'data'=>array('id_kecamatan'=>'js:this.value'),
 											)
 							)
 						); 
 	?>
 	<?php echo $form->error($kecamatan,'KECAMATAN'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'KELURAHAN *'); ?>
		<?php echo $form->dropDownList($model,'ID_KELURAHAN', array(), 
			array( 'prompt'=>'Pilih Kelurahan','value'=>'')) ?>
 		<?php echo $form->error($model,'ID_KELURAHAN'); ?>
	</div>

	