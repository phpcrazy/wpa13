<?php 

class Order {
	public $order_status;

	public function createOrder() {
		// Appli logic to create order
		$this->order_status = 'Order Created';
		return $this;
	}

	public function sendOrderEmail() {
		// Apply logic for sending email to order
		$this->order_status = 'Email Sent';
		return $this;
	}

	public function createShipment() {
		// Apply logic for create shipment
		$this->order_status = 'Shipment Created';
		return $this;
	}
}

$a = new Order();
$a->createOrder()->sendOrderEmail()->createShipment();
var_dump($a->order_status);



 ?>