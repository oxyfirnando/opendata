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

	<?php  
                $tabs = array(); 
 
                $tabs['Biodata'] = array( 
                        'id'=>'dataFieldsTab', 
                        'content'=>$this->renderPartial('_formBiodata', array(
                                'form' => $form, 
                                'model'=>$model, 
                        ), 
                        true), 
                ); 
 
                $tabs['Detail IKM'] = array( 
                        'id'=>'linkedChildrenTab1', 
                        'content'=>$this->renderPartial('_formChildren1', array( 
                                'form' =>$form,
                                'model'=>$model, 
                        ), 
                        true), 
                ); 
 
                $this->widget('zii.widgets.jui.CJuiTabs', array(  
                        'tabs' => $tabs, 
                        'options' => array( 
                        'collapsible' => false, 
                        ), 
                )); 
        ?> 
 
        <div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		</div>

<?php $this->endWidget(); ?>

</div><!-- form -->