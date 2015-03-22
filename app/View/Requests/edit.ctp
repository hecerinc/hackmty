<div class="requests form">
<?php echo $this->Form->create('Request'); ?>
	<fieldset>
		<legend><?php echo __('Edit Request'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('area_id');
		echo $this->Form->input('subject');
		echo $this->Form->input('comment');
		echo $this->Form->input('lowerdate');
		echo $this->Form->input('upperdate');
		echo $this->Form->input('accepted');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Request.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Request.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Requests'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
