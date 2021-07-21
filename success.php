<?php
	echo "<h3>Compra Realizada com sucesso</h3>";
	//echo "ID: ".echo $_SESSION['preference_id'];
	echo "<hr />";
	
	foreach ($_GET as $key => $value) {
		echo "$key: $value<br />";
	}
	
	
	
/*
collection_id: 15963358652
collection_status: approved
payment_id: 15963358652
status: approved
external_reference: null
payment_type: credit_card
merchant_order_id: 2982965982
preference_id: 77911767-9fbbe5a9-7649-4016-9d18-8c1befdc7688
site_id: MLB
processing_mode: aggregator
merchant_account_id: null
*/

?>
