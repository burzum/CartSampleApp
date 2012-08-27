<div class="items view">
<h2><?php echo __('Item') . ': ' . h($item['Item']['name']); ?></h2>
	<p>
		Check the displayed info for that item. An item that is not for sale 
		can not be bought.
	</p>
	<p>
		Also if the min and max quantity are not 0 the user can not add more or 
		less items than specified by the min and max quantity to his cart.
	</p>
		The Item::isBuyable() method gets called by the Cart 
		and is doing the checks.
	</p>
	<dl>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($item['Item']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency'); ?></dt>
		<dd>
			<?php echo h($item['Item']['currency']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($item['Item']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Downloadable'); ?></dt>
		<dd>
			<?php echo $this->Html->humanBool($item['Item']['downloadable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('In Stock'); ?></dt>
		<dd>
			<?php echo h($item['Item']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Quantity'); ?></dt>
		<dd>
			<?php echo h($item['Item']['max_quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Min Quantity'); ?></dt>
		<dd>
			<?php echo h($item['Item']['min_quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('For Sale'); ?></dt>
		<dd>
			<?php echo $this->Html->humanBool($item['Item']['for_sale']); ?>
			&nbsp;
		</dd>
	</dl>
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
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item'), array('action' => 'delete', $item['Item']['id']), null, __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
