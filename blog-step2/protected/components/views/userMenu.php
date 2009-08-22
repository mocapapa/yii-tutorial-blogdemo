<ul>
<li><?php echo CHtml::link('Create New Post',array('post/create')); ?></li>
<li><?php echo CHtml::link('Manage Posts',array('post/admin')); ?></li>
<li><?php echo CHtml::linkButton('Logout',array(
	'submit'=>'',
	'params'=>array('command'=>'logout'),
)); ?></li>
</ul>