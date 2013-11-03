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

    <div class="container">
        
        <div id="main" class="clearfix">
            
            <div id="content">
                                    <?php echo $content; ?>
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
