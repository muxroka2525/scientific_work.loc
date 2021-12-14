<?php
use common\widgets\Alert;
use yii\widgets\Breadcrumbs;
?>          
    
    <div class="content-wrapper" style="min-height: 1302.4px;">
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?= $this->title?></h1>
            </div>
            <div class="col-sm-6">
                <?= Breadcrumbs::widget([
                    'options' => [
                        'class' => 'breadcrumb float-sm-right'
                    ],
                    'itemTemplate' => "<li>{link} - </li>\n",
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
            </div>
            </div>
            <?= Alert::widget() ?>
        </div><!-- /.container-fluid -->
        <section class="content">
            <?= $content ?>
        </section>
        </section>

        <div class="content-wrapper" style="min-height: 1302.4px;">
        </div>
    </div>