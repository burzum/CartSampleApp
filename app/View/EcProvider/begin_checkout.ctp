<h2>Test Payment Provider</h2>
<p>
	This page would be the login page to your payment provider. After you 
	initiated the checkout on your site. After login you would have to agree to 
	continue. This is simulated here.
</p>
<?php
	echo $this->Form->create();
	echo $this->Form->hidden('contine', array(
		'value' => 1));
	echo $this->Form->end(__('Pay'));
?>