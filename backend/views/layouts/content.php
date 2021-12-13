<?php
use common\widgets\Alert;
use yii\widgets\Breadcrumbs;
?>          
    
    <div id="content" class="content">
        <div style="margin-top: -10px;margin-bottom: 5px;">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </div>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>