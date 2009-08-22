<?php foreach($posts as $post): ?>
<?php $this->renderPartial('_post',array(
	'post'=>$post,
)); ?>
<?php endforeach; ?>

<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>