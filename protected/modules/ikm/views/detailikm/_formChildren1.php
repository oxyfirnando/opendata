<?php echo $form->errorSummary($model); 
	$bentukusaha = new Bentukusaha();
	$kbli = new Kbli();
?>
<div class="form">
	<div class="row">
		<?php echo $form->labelEx($model,'NAMA_PERUSAHAAN'); ?>
		<?php echo $form->textField($model,'NAMA_PERUSAHAAN',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'NAMA_PERUSAHAAN'); ?>
	</div>
	<!-- <div class="row">
		<?php echo $form->labelEx($model,'ID_IKM'); ?>
		<?php echo $form->textField($model,'ID_IKM',array('size'=>10,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ID_IKM'); ?>
	</div> -->
	<div class="row">
		<?php echo $form->labelEx($bentukusaha,'BENTUK_USAHA'); ?>
		<?php echo $form->dropDownList($model,'ID_BENTUK_USAHA', 
				 CHtml::listData($bentukusaha->findAll(),'ID_BENTUK_USAHA','BENTUK_USAHA'),
			array( 'prompt'=>'Pilih Bentuk Usaha','value'=>'')) ?>
		<?php echo $form->error($bentukusaha,'ID_BENTUK_USAHA'); ?>
	</div>
	<div class="row">
	<?php $dir = new Direktoripotensi()?>
	<?php echo $form->labelEx($dir,'DIREKTORIPOTENSI'); ?>
	<?php 
		echo CHtml::dropDownList('id_dir','', 
			 CHtml::listData($dir->findAll(),'ID_DIREKTORIPOTENSI','DIREKTORIPOTENSI'),
 						array('prompt'=>'Pilih Potensi',
 							  'value'=>'',
 							  'ajax' => array('type'=>'POST', 
 							  				'url'=>CController::createUrl('filterkbli'), 
 							  				'update'=>'#Detailikm_ID_KBLI', 
 							  				'data'=>array('id_dir'=>'js:this.value'),
 											)
 							)
 						); 
 	?>
 	<?php echo $form->error($dir,'DIREKTORIPOTENSI'); ?>
	</div>	
	<div class="row">
		<?php echo $form->labelEx($kbli,'KBLI'); ?>
		<?php echo $form->dropDownList($model,'ID_KBLI', array(), 
			array( 'prompt'=>'Pilih KBLI','value'=>'')) ?>
		<?php echo $form->error($kbli,'KBLI'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'TAHUN_IZIN'); ?>
		<?php echo $form->textField($model,'TAHUN_IZIN',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'TAHUN_IZIN'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'JENIS_PRODUK'); ?>
		<?php echo $form->textField($model,'JENIS_PRODUK',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'JENIS_PRODUK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TENAGA_KERJA_P'); ?>
		<?php echo $form->textField($model,'TENAGA_KERJA_P'); ?>
		<?php echo $form->error($model,'TENAGA_KERJA_P'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TENAGA_KERJA_W'); ?>
		<?php echo $form->textField($model,'TENAGA_KERJA_W'); ?>
		<?php echo $form->error($model,'TENAGA_KERJA_W'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NILAI_INVESTASI'); ?>
		<?php echo $form->textField($model,'NILAI_INVESTASI'); ?>
		<?php echo $form->error($model,'NILAI_INVESTASI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KAPASITAS_PRODUKSI'); ?>
		<?php echo $form->textField($model,'KAPASITAS_PRODUKSI'); ?>
		<?php echo $form->error($model,'KAPASITAS_PRODUKSI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SATUAN'); ?>
		<?php echo $form->textField($model,'SATUAN',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'SATUAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NILAI_PRODUKSI'); ?>
		<?php echo $form->textField($model,'NILAI_PRODUKSI'); ?>
		<?php echo $form->error($model,'NILAI_PRODUKSI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NILAI_BAHAN_BAKU'); ?>
		<?php echo $form->textField($model,'NILAI_BAHAN_BAKU'); ?>
		<?php echo $form->error($model,'NILAI_BAHAN_BAKU'); ?>
	</div>
    <!--
	<div class="row">
		<?php echo $form->labelEx($model,'STATUS'); ?>
		<?php echo $form->textField($model,'STATUS'); ?>
		<?php echo $form->error($model,'STATUS'); ?>
	</div> -->
</div>