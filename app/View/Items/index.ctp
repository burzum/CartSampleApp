<div class="items index">
	<h2><?php echo __('Items'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('currency'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('downloadable'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('max_quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('min_quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('for_sale'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($items as $item): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($item['User']['id'], array('controller' => 'users', 'action' => 'view', $item['User']['id'])); ?>
		</td>
		<td><?php echo h($item['Item']['name']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['currency']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['price']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['downloadable']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['quantity']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['max_quantity']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['min_quantity']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['for_sale']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $item['Item']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $item['Item']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $item['Item']['id']), null, __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
