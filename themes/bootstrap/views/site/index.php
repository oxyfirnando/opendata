<?php
$this->pageCaption='';
$this->pageTitle=Yii::app()->name;?>

<h2>Selamat datang di <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h2>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <tt><?php echo __FILE__; ?></tt></li>
	<li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>

<form action="<?php echo $this->createUrl('search');?>" method="post">
    <input type="text" name="param" value="Silahkan Cari IKM yang Anda Butuhkan" onclick="this.value=''" />
      <input type="submit" value="Cari" />
</form>

