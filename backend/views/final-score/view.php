<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\models\FinalScore $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Final Scores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="final-score-view">
    <div class="card">
        <div class="card-header">
            <?php echo Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?php echo Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </div>
        <div class="card-body">
            <?php echo DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'completed',
                    'total_score',
                    'complete_date',
                    'member_id',
                    'final_test_id',
                    'score',
                    
                ],
            ]) ?>
        </div>
    </div>
</div>
