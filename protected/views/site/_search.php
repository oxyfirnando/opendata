<?php
/* @var $this DetailikmController */
/* @var $model Detailikm */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_IKM'); ?>
		<?php echo $form->textField($model,'ID_IKM'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_KBLI'); ?>
		<?php echo $form->textField($model,'ID_KBLI',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_KELURAHAN'); ?>
		<?php echo $form->textField($model,'ID_KELURAHAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_BENTUK_USAHA'); ?>
		<?php echo $form->textField($model,'ID_BENTUK_USAHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMA_PERUSAHAAN'); ?>
		<?php echo $form->textField($model,'NAMA_PERUSAHAAN',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PIMPINAN'); ?>
		<?php echo $form->textField($model,'PIMPINAN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALAMAT'); ?>
		<?php echo $form->textArea($model,'ALAMAT',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TELP'); ?>
		<?php echo $form->textField($model,'TELP',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TAHUN_IZIN'); ?>
		<?php echo $form->textField($model,'TAHUN_IZIN',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JENIS_PRODUK'); ?>
		<?php echo $form->textField($model,'JENIS_PRODUK',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TENAGA_KERJA_P'); ?>
		<?php echo $form->textField($model,'TENAGA_KERJA_P'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TENAGA_KERJA_W'); ?>
		<?php echo $form->textField($model,'TENAGA_KERJA_W'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NILAI_INVESTASI'); ?>
		<?php echo $form->textField($model,'NILAI_INVESTASI'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KAPASITAS_PRODUKSI'); ?>
		<?php echo $form->textField($model,'KAPASITAS_PRODUKSI'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SATUAN'); ?>
		<?php echo $form->textField($model,'SATUAN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NILAI_PRODUKSI'); ?>
		<?php echo $form->textField($model,'NILAI_PRODUKSI'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NILAI_BAHAN_BAKU'); ?>
		<?php echo $form->textField($model,'NILAI_BAHAN_BAKU'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STATUS'); ?>
		<?php echo $form->textField($model,'STATUS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->