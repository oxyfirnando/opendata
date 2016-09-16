<?php
/* @var $this DetailikmController */
/* @var $model Detailikm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detailikm-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_IKM'); ?>
		<?php echo $form->textField($model,'ID_IKM'); ?>
		<?php echo $form->error($model,'ID_IKM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_KBLI'); ?>
		<?php echo $form->textField($model,'ID_KBLI',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ID_KBLI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_KELURAHAN'); ?>
		<?php echo $form->textField($model,'ID_KELURAHAN'); ?>
		<?php echo $form->error($model,'ID_KELURAHAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_BENTUK_USAHA'); ?>
		<?php echo $form->textField($model,'ID_BENTUK_USAHA'); ?>
		<?php echo $form->error($model,'ID_BENTUK_USAHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NAMA_PERUSAHAAN'); ?>
		<?php echo $form->textField($model,'NAMA_PERUSAHAAN',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'NAMA_PERUSAHAAN'); ?>
	</div>

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

	<div class="row">
		<?php echo $form->labelEx($model,'STATUS'); ?>
		<?php echo $form->textField($model,'STATUS'); ?>
		<?php echo $form->error($model,'STATUS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->