<div class="yiiForm">

<p>
Fields with <span class="required">*</span> are required.
</p>

<?php echo CHtml::beginForm(); ?>

<?php echo CHtml::errorSummary($post); ?>

<div class="simple">
<?php echo CHtml::activeLabelEx($post,'title'); ?>
<?php echo CHtml::activeTextField($post,'title',array('size'=>60,'maxlength'=>128)); ?>
</div>
<div class="simple">
<?php echo CHtml::activeLabelEx($post,'content'); ?>
<?php echo CHtml::activeTextArea($post,'content',array('rows'=>6, 'cols'=>50)); ?>
</div>
<div class="simple">
<?php echo CHtml::activeLabelEx($post,'contentDisplay'); ?>
<?php echo CHtml::activeTextArea($post,'contentDisplay',array('rows'=>6, 'cols'=>50)); ?>
</div>
<div class="simple">
<?php echo CHtml::activeLabelEx($post,'status'); ?>
<?php echo CHtml::activeTextField($post,'status'); ?>
</div>
<div class="simple">
<?php echo CHtml::activeLabelEx($post,'createTime'); ?>
<?php echo CHtml::activeTextField($post,'createTime'); ?>
</div>
<div class="simple">
<?php echo CHtml::activeLabelEx($post,'updateTime'); ?>
<?php echo CHtml::activeTextField($post,'updateTime'); ?>
</div>
<div class="simple">
<?php echo CHtml::activeLabelEx($post,'authorId'); ?>
<?php echo CHtml::activeTextField($post,'authorId'); ?>
</div>

<div class="action">
<?php echo CHtml::submitButton($update ? 'Save' : 'Create'); ?>
</div>

<?php echo CHtml::endForm(); ?>

</div><!-- yiiForm -->