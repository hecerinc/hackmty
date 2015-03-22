<div class="points form">
<?php echo $this->Form->create('Point'); ?>
	<fieldset>
		<legend><?php echo __('Add Point'); ?></legend>
	<?php
		echo $this->Form->input('month');
		echo $this->Form->input('semester');
		echo $this->Form->input('by_grades');
		echo $this->Form->input('grades');
		echo $this->Form->input('total');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Points'), array('action' => 'index')); ?></li>
	</ul>
</div>
