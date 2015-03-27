<?php

use common\models\Profile;
use common\models\User;
use yii\helpers\Html;
use kartik\widgets\SideNav;
use yii\bootstrap\Progress;

echo SideNav::widget([
    'type' => SideNav::TYPE_DEFAULT,
    'heading' => \Yii::t('app', 'Menú'),
    'items' => [
        [
            'url' => ['/site/infoup'],
            'label' => \Yii::t('app', 'Registros'),
            'icon' => 'info-sign',
            'visible' => (!Yii::$app->user->isGuest && Yii::$app->authManager->checkAccess(Yii::$app->user->getId(), 'user'))
        ],
        [
            'label' => \Yii::t('app', 'Multimedia'), 'icon' => 'camera',
            'url' => ['/site/mediafiles'],
            'visible' => (!Yii::$app->user->isGuest && Yii::$app->authManager->checkAccess(Yii::$app->user->getId(), 'user'))
        ],
        [
            'label' => \Yii::t('app', 'Ayuda'),
            'icon' => 'question-sign',
        ],
    ],
]);
?>