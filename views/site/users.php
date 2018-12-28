<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Users</h1>
<ul>
<?php foreach ($users as $user): ?>
    <li>
        <?= Html::encode("User ID - {$user->id}") ?>; <br>
        <?= Html::encode("Username: {$user->username}") ?>
    </li>
<?php endforeach; ?>
</ul>