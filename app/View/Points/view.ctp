<div class="points view">
<h2><?php echo __('Point'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($point['Point']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month'); ?></dt>
		<dd>
			<?php echo h($point['Point']['month']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semester'); ?></dt>
		<dd>
			<?php echo h($point['Point']['semester']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('By Grades'); ?></dt>
		<dd>
			<?php echo h($point['Point']['by_grades']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grades'); ?></dt>
		<dd>
			<?php echo h($point['Point']['grades']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($point['Point']['total']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Point'), array('action' => 'edit', $point['Point']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Point'), array('action' => 'delete', $point['Point']['id']), array(), __('Are you sure you want to delete # %s?', $point['Point']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Points'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Point'), array('action' => 'add')); ?> </li>
	</ul>
</div>
