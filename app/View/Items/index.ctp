<div class="items index">
	<h2><?php echo __('Items'); ?></h2>
	<p>
		The "buy me" link demonstrates buying something through a get request. The form next to it through a post. The buy link can also pass the quantity by quantity:number. When not passed its set to 1 by default.
	</p>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th><?php echo $this->Paginator->sort('price'); ?></th>
		<th><?php echo $this->Paginator->sort('downloadable'); ?></th>
		<th><?php echo $this->Paginator->sort('quantity', 'In Stock'); ?></th>
		<?php /* 
		<th><?php echo $this->Paginator->sort('max_quantity'); ?></th>
		<th><?php echo $this->Paginator->sort('min_quantity'); ?></th>
		*/ ?>
		<th><?php echo $this->Paginator->sort('for_sale'); ?></th>
		<th><?php echo __('Via Get'); ?>
		<th><?php echo __('Via Post'); ?>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($items as $item): ?>
	<tr>
		<td>
			<?php
				echo $this->Html->link($item['Item']['name'], array(
					'action' => 'view', $item['Item']['id']));
			?>
		</td>
		<td><?php echo $this->Number->currency($item['Item']['price'], $item['Item']['currency']); ?>&nbsp;</td>
		<td><?php echo $this->Html->humanBool($item['Item']['downloadable']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['quantity']); ?>&nbsp;</td>
		<?php /*
		<td><?php echo h($item['Item']['max_quantity']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['min_quantity']); ?>&nbsp;</td>
		*/ ?>
		<td><?php echo $this->Html->humanBool($item['Item']['for_sale']); ?>&nbsp;</td>
		<td>
			<?php
				echo $this->Cart->link(__('buy me'), array(
					'item' => $item['Item']['id']));
			?>
		</td>
		<td>
			<?php
				echo $this->Form->create('CartsItem', array(
					'action' => 'buy'));
				echo $this->Form->input('quantity', array(
					'label' => false,
					'div' => false,
					'style' => 'width: 50px;',
					'default' => 1));
				echo $this->Form->submit(__('buy'), array(
					'div' => false));
				echo $this->Form->hidden('foreign_key', array(
					'value' => $item['Item']['id']));
				echo $this->Form->hidden('model', array(
					'value' => 'Item'));
			?>
		</td>
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
