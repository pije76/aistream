<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body class="classic-theme bg">

<div class="fullscreen" id="page">
<header>
<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'type'=>'inverse', // null or 'inverse'
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'Category', 'url'=>array('/site/category'), 'items'=>array(
                    array('label'=>'Landscape', 'url'=>array('/site/category'))),
                ),
                array('label'=>'Location', 'url'=>array('/site/location')),
                array('label'=>'Tags', 'url'=>array('/site/tags')),
                array('label'=>'Profile', 'url'=>array('/user/user')),
                array('label'=>'Login', 'url'=>array('/user/user/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/user/user/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>
</header>

    <div class="hero-shot">
    
        <div class="container">
            <div id="writeup">
                <h1>Sharing is awesome!</h1>
                <p>Duis arcu eros, gravida non fringilla facilisis, viverra quis nunc. Cras sed mauris sit</p>
            </div>
        
            <div id="signin">
                <?php $this->widget('application.modules.hybridauth.widgets.renderProviders'); ?>
            </div>
        
        </div><!-- container -->
    </div><!-- hero-shot -->
    
    <div class="bs-docs-social">
        <div class="container">
        </div>
    </div>

    <div class="container">
        
        <div id="main" class="clearfix">
            
            <div id="content">
                <div id="wlt-PictureList" class="worklet">
                    <div class="worklet-info notice hide">
                    </div>
                    
                    <div class="worklet-content">
                        <div class="clearfix">
                            <div id="wlt-PictureList-list" class="list-view">
                                <div style="position: relative; overflow: hidden; height: 2672px;" class="items isotope">
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

                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="loadingDiv">
                    </div>
                </div>
            </div><!-- content -->
            
        </div><!-- main -->
        
    </div><!-- container -->

    <div id="footer">
    Copyright &copy; <?php echo date('Y'); ?> by My Company.
    </div><!-- footer -->

</div><!-- fullscreen -->

</body>
</html>
