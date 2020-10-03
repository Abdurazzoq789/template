<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
    <meta charset="<?php echo Yii::$app->charset?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Techmarket HTML</title>
    <?php echo $this->head() ?>
    <link rel="shortcut icon" href="asset/images/fav-icon.png">
</head>
<body class="woocommerce-active page-template-default woocommerce-checkout woocommerce-page can-uppercase">
<?php $this->beginBody() ?>
<div id="page" class="hfeed site">
    <?php echo $this->render('_header')?>

    <div id="content" class="site-content">
        <?= $content ?>
    </div>
</div>

<?php echo $this->render('_footer')?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
