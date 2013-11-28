<?php
/* @var $this ContactsController */
/* @var $model Contacts */

$this->breadcrumbs = array(
    'Contacts' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Contacts', 'url' => array('index')),
    array('label' => 'Create Contacts', 'url' => array('create')),
    array('label' => 'Update Contacts', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Contacts', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Contacts', 'url' => array('admin')),
);
?>

<h1>View Contacts #<?php echo $model->id; ?></h1>

<?php
if ($model->type == 1) {
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        'id' => 'mydialog',
        'options' => array(
            'title' => 'Contact Information',
            'autoOpen' => false,
        ),
    ));
    if(empty($model->image)){
        echo CHtml::image(Yii::app()->request->baseUrl.'/uploads/default.jpg',"image",array("width"=>200));
    }else{
        echo CHtml::image(Yii::app()->request->baseUrl.'/uploads/'.$model->image,"image",array("width"=>200));
    }
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $model,
        'attributes' => array(
            'id',
            'name',
            'email',
            'number',            
            'home_address'
        ),
    ));
    $this->endWidget('zii.widgets.jui.CJuiDialog');

// the link that may open the dialog
    echo CHtml::link('View Contact Information', '#', array(
        'onclick' => '$("#mydialog").dialog("open"); return false;',
    ));
} else {
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $model,
        'attributes' => array(
            'email',
        ),
    ));
}
?>
