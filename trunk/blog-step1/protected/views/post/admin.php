<h2>Managing Post</h2>

<div class="actionBar">
[<?php echo CHtml::link('Post List',array('list')); ?>]
[<?php echo CHtml::link('New Post',array('create')); ?>]
</div>

<table class="dataGrid">
  <tr>
    <th><?php echo $sort->link('id'); ?></th>
    <th><?php echo $sort->link('title'); ?></th>
    <th><?php echo $sort->link('status'); ?></th>
    <th><?php echo $sort->link('createTime'); ?></th>
    <th><?php echo $sort->link('updateTime'); ?></th>
    <th><?php echo $sort->link('authorId'); ?></th>
	<th>Actions</th>
  </tr>
<?php foreach($postList as $n=>$model): ?>
  <tr class="<?php echo $n%2?'even':'odd';?>">
    <td><?php echo CHtml::link($model->id,array('show','id'=>$model->id)); ?></td>
    <td><?php echo CHtml::encode($model->title); ?></td>
    <td><?php echo CHtml::encode($model->status); ?></td>
    <td><?php echo CHtml::encode($model->createTime); ?></td>
    <td><?php echo CHtml::encode($model->updateTime); ?></td>
    <td><?php echo CHtml::encode($model->authorId); ?></td>
    <td>
      <?php echo CHtml::link('Update',array('update','id'=>$model->id)); ?>
      <?php echo CHtml::linkButton('Delete',array(
      	  'submit'=>'',
      	  'params'=>array('command'=>'delete','id'=>$model->id),
      	  'confirm'=>"Are you sure to delete #{$model->id}?")); ?>
	</td>
  </tr>
<?php endforeach; ?>
</table>
<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>