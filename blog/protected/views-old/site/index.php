<?php
$this->widget('ext.isotope.Isotope',array(
    'dataProvider'=>new CActiveDataProvider('Post'),
    'itemView'=>'_view',
    'itemSelectorClass'=>'item',
    'options'=>array(), // options for the isotope jquery
    'infiniteScroll'=>true, // default to true
    'infiniteOptions'=>array(), // javascript options for infinite scroller
    'id'=>'wall',
));
?>
