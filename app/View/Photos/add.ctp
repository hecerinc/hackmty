<div class="photos form">
<?php echo $this->Form->create('Photo'); ?>
	<fieldset>
		<legend><?php echo __('Add Photo'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('path');
		echo $this->Form->input('type');
		echo $this->Form->input('size');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Photos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
