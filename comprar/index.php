<?php

session_start();

$_SESSION['produto_id'];
$_SESSION['produto_titulo'];
$_SESSION['produto_preco'];

$produto_id = $_SESSION['produto_id'];
$produto_titulo = $_SESSION['produto_titulo'];
$produto_preco = $_SESSION['produto_preco'];


	include_once("vendor/autoload.php");


	MercadoPago\SDK::setClientId("4575278390377858");
	MercadoPago\SDK::setClientSecret("B2dMFGE7xJqaWHX0v4PWVdcK2YOOCma7");


 






  # Building an item



  $preference = new MercadoPago\Preference();


  $preference->back_urls = array(
   "success" => "https://romulus.com.br/recebe.php",
   "failure" => "http://www.seu-site/failure",
   "pending" => "https://romulus.com.br/recebe.php"
 );
 $preference->auto_return = "approved";
 // ...
  


  # PAGAMENTO ITEM

  $item = new MercadoPago\Item();
  $item->id = $produto_id;
  $item->title = $produto_titulo;
  $item->description = "Opera na TRYD e no Dólar";
  $item->category_id = "others";
  $item->quantity = 1;
  $item->currency_id = "BRL";
  $item->unit_price = $produto_preco;



  
  $preference->items = array($item);
  
  
  $preference->save(); # Save the preference and send the HTTP Request to create
  
#OUTRO QUE REDIRECIONA PARA O MEU SITE





  # Return the HTML code for button
  header ("Location: $preference->init_point");

?>