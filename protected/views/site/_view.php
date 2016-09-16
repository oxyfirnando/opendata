<?php
/* @var $this DetailikmController */
/* @var $data Detailikm */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_IKM')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_IKM), array('view', 'id'=>$data->ID_IKM)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_KBLI')); ?>:</b>
	<?php echo CHtml::encode($data->ID_KBLI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_KELURAHAN')); ?>:</b>
	<?php echo CHtml::encode($data->ID_KELURAHAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_BENTUK_USAHA')); ?>:</b>
	<?php echo CHtml::encode($data->ID_BENTUK_USAHA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMA_PERUSAHAAN')); ?>:</b>
	<?php echo CHtml::encode($data->NAMA_PERUSAHAAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PIMPINAN')); ?>:</b>
	<?php echo CHtml::encode($data->PIMPINAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALAMAT')); ?>:</b>
	<?php echo CHtml::encode($data->ALAMAT); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('TELP')); ?>:</b>
	<?php echo CHtml::encode($data->TELP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TAHUN_IZIN')); ?>:</b>
	<?php echo CHtml::encode($data->TAHUN_IZIN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JENIS_PRODUK')); ?>:</b>
	<?php echo CHtml::encode($data->JENIS_PRODUK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TENAGA_KERJA_P')); ?>:</b>
	<?php echo CHtml::encode($data->TENAGA_KERJA_P); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TENAGA_KERJA_W')); ?>:</b>
	<?php echo CHtml::encode($data->TENAGA_KERJA_W); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NILAI_INVESTASI')); ?>:</b>
	<?php echo CHtml::encode($data->NILAI_INVESTASI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KAPASITAS_PRODUKSI')); ?>:</b>
	<?php echo CHtml::encode($data->KAPASITAS_PRODUKSI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SATUAN')); ?>:</b>
	<?php echo CHtml::encode($data->SATUAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NILAI_PRODUKSI')); ?>:</b>
	<?php echo CHtml::encode($data->NILAI_PRODUKSI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NILAI_BAHAN_BAKU')); ?>:</b>
	<?php echo CHtml::encode($data->NILAI_BAHAN_BAKU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUS')); ?>:</b>
	<?php echo CHtml::encode($data->STATUS); ?>
	<br />

	*/ ?>

</div>