<h2>Update Post <?php echo $post->id; ?></h2>

<div class="actionBar">
[<?php echo CHtml::link('Post List',array('list')); ?>]
[<?php echo CHtml::link('New Post',array('create')); ?>]
[<?php echo CHtml::link('Manage Post',array('admin')); ?>]
</div>

<?php echo $this->renderPartial('_form', array(
	'post'=>$post,
	'update'=>true,
)); ?>