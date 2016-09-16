<?php
/* @var $this DetailikmController */
/* @var $model Detailikm */

$this->breadcrumbs = array(
    'Detailikms' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Detailikm', 'url' => array('index')),
    array('label' => 'Create Detailikm', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#detailikm-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>List IKM</h1>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('ext.HeaderGroupGridView', array(
    'id' => 'detailikm-grid',
    'dataProvider' => $dataProvider,
    'mergeHeaders' => array(
        array(
            'name' => 'Tenaga Kerja',
            'start' => 11,
            'end' => 13,
        ),
        array(
            'name' => 'Alamat Perusahaan',
            'start' => 2,
            'end' => 4,
        ),
    ),
    'columns' => array(
        array(
            'header' => 'Nama Perusahaan',
            'name' => 'NAMA_PERUSAHAAN'
        ),
        array(
            'header' => 'Pimpinan',
            'name' => 'PIMPINAN'
        ),
        array(
            'header' => 'Jalan',
            'name' => 'ALAMAT'
        ), 
        array(
            'header' => 'Kelurahan',
            'name' => 'KELURAHAN'
        ),
        array(
            'header'=>'Kecamatan',
            'name'=>'KECAMATAN'
        ),
        array(
            'header'=>'Bentuk Usaha',
            'name'=>'BENTUK_USAHA'
        ),
        array(
            'header'=>'Direktori Potensi',
            'name'=>'DIREKTORIPOTENSI'
        ),
        'KBLI', 
        'TELP',
        array(
            'header'=>'Tahun Izin',
            'name'=>'TAHUN_IZIN'
        ),
        array(
            'header'=>'Jenis Produk',
            'name'=>'JENIS_PRODUK'
        ),
        array(
            'name' => 'TENAGA_KERJA_P',
            'header' => 'P',
        ),
        array(
            'name' => 'TENAGA_KERJA_W',
            'header' => 'W',
        ),
        'TOTAL',
        array(
            'header'=>'Nilai Investasi',
            'name'=>'NILAI_INVESTASI'
        ),
        array(
            'header'=>'Kapasitas Produksi',
            'name'=>'KAPASITAS_PRODUKSI'
        ),
        'SATUAN',
        array(
            'header'=>'Nilai Produksi',
            'name'=>'NILAI_PRODUKSI'
        ),
        array(
            'header'=>'Nilai Bahan Baku',
            'name'=>'NILAI_BAHAN_BAKU'
        ),
        array(
            'header'=>'STATUS',
            'name'=>'STATS'
        ),
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}{delete}',
            'buttons' => array
                (
                'delete' => array
                    (
                    'label' => 'Delete',
                    'imageUrl' => Yii::app()->request->baseUrl . '/images/email.png',
                    'url' => 'Yii::app()->createUrl("ikm/detailikm", array("id"=>$data["ID_IKM"]))',
                ),
                'update' => array
                    (
                    'label' => 'Update',
                    'imageUrl' => Yii::app()->request->baseUrl . '/images/email.png',
                    'url' => 'Yii::app()->createUrl("ikm/detailikm", array("id"=>$data["ID_IKM"]))',
                ),
            ),
        ),
)));
?>
