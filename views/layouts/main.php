<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap"/>
    </noscript>
    <link href="/css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <link href="/css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
    <link href="/css/main.css?ver=1.2.0" rel="stylesheet">
    <?php $this->registerCsrfMetaTags() ?>
    <?php echo Html::csrfMetaTags(); ?>
</head>
<body id="top">
<?php $this->beginBody() ?>
<?= $content ?>

<div class="mastfoot">
    <div class="inner">
        <p>&copy; 2022 Ye. Sokolov </p>
    </div>
</div>

<script src="scripts/jquery.slim.min.js?ver=1.2.0"></script>
<script src="scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
<script src="scripts/main.js?ver=1.2.0"></script>
<?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
