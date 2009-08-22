<h2>View Post <?php echo $post->id; ?></h2>

<div class="actionBar">
[<?php echo CHtml::link('Post List',array('list')); ?>]
[<?php echo CHtml::link('New Post',array('create')); ?>]
[<?php echo CHtml::link('Update Post',array('update','id'=>$post->id)); ?>]
[<?php echo CHtml::linkButton('Delete Post',array('submit'=>array('delete','id'=>$post->id),'confirm'=>'Are you sure?')); ?>
]
[<?php echo CHtml::link('Manage Post',array('admin')); ?>]
</div>

<table class="dataGrid">
<tr>
	<th class="label"><?php echo CHtml::encode($post->getAttributeLabel('title')); ?>
</th>
    <td><?php echo CHtml::encode($post->title); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($post->getAttributeLabel('content')); ?>
</th>
    <td><?php echo CHtml::encode($post->content); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($post->getAttributeLabel('contentDisplay')); ?>
</th>
    <td><?php echo CHtml::encode($post->contentDisplay); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($post->getAttributeLabel('status')); ?>
</th>
    <td><?php echo CHtml::encode($post->status); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($post->getAttributeLabel('createTime')); ?>
</th>
    <td><?php echo CHtml::encode($post->createTime); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($post->getAttributeLabel('updateTime')); ?>
</th>
    <td><?php echo CHtml::encode($post->updateTime); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($post->getAttributeLabel('authorId')); ?>
</th>
    <td><?php echo CHtml::encode($post->authorId); ?>
</td>
</tr>
</table>
