<?php
/* @var $this DetailikmController */
/* @var $model Detailikm */
?>
<h1>List IKM</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php //$this->renderPartial('_search',array(
	//'model'=>$model,
//)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'detailikm-grid',
	'dataProvider'=>$dataProvider,
	//'filter'=>$model,
	'columns'=>array(
		//'ID_IKM',
		'NAMA_PERUSAHAAN',
		'PIMPINAN',
		'ALAMAT',
		'ID_KBLI',
		'ID_KELURAHAN',
		'ID_BENTUK_USAHA',
		'TELP',
		'TAHUN_IZIN',
		'JENIS_PRODUK',
		'TENAGA_KERJA_P',
		'TENAGA_KERJA_W',
		'NILAI_INVESTASI',
		'KAPASITAS_PRODUKSI',
		'SATUAN',
		'NILAI_PRODUKSI',
		'NILAI_BAHAN_BAKU',
		'STATUS',
),
        array(
            'class'=>'CClassButton',
        ),)); ?>
