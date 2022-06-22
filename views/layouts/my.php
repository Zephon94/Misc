
<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asg</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <section class="header">
        <div class="container">
            <nav class="navbar fixed-top navbar-expand-lg navbar-red">
<<<<<<< HEAD
                <div class="container-fluid padding-link">
=======
                <div class="container-fluid">
>>>>>>> faf2164e038d8c2f4901a0059384525a58f33e4b
                    <a class="navbar-brand"><?=Html::a('Algorithm Stroy Group','/web/')?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item padding-link">
                                <a class="nav-link active" aria-current="page"><?=Html::a('Главная',['my/index'])?></a>
                            </li>
                            <li class="nav-item padding-link">
<<<<<<< HEAD
                                <a class="nav-link"><?=Html::a('Услуги',['my/service'])?></a>
                            </li>
                            <li class="nav-item padding-link">
                                <a class="nav-link"><?=Html::a('О Компании',['my/about'])?></a>
                            </li>
                            <li class="nav-item padding-link">
                                <a class="nav-link"><?=Html::a('Клиентам',['my/client'])?></a>
                            </li>
                            <li class="nav-item padding-link">
                                <a class="nav-link"><?=Html::a('Наши работы',['my/ourWorks'])?></a>
=======
                                <a class="nav-link"><?=Html::a('О Нас',['my/about'])?></a>
>>>>>>> faf2164e038d8c2f4901a0059384525a58f33e4b
                            </li>
                            <li class="nav-item padding-link">
                                <a class="nav-link"><?=Html::a('Контакты',['my/contact'])?></a>
                            </li>
<<<<<<< HEAD
                        </ul>
                        <h4>Телефон: 8-965-252-74-40</h4>
                    </div>
                </div>
            </nav>
=======
                            <li class="nav-item padding-link">
                                <a class="nav-link"><?=Html::a('Услуги',['my/service'])?></a>
                        </ul>
                    </div>
                </div>
            </nav>
<!--			--><?//= $content ?>
>>>>>>> faf2164e038d8c2f4901a0059384525a58f33e4b
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>