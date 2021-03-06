<?php namespace App\Classes;


	class Order 
	{
		public $orders;
		public $reasons = array();

		public function __construct($orders)
		{
			$this->orders = $orders;
		}
	}

	class OrdersRepository implements IRepository
	{
		private $orders;

		public function __construct()
		{
			$filename = "./jsonFiles/orders/order3.json";
			$this->orders = file_get_contents($filename);
		}

		public function getAllOrdersByUserId($userId)
		{
			$json = json_decode($this->orders);
			$newOrder = array();

			if($json->{"customer-id"} == $userId)
			{
				return new Order($json);
			}
			else
			{
				return new Order(null);
			}
		}
		
		public function getAllOrders()
		{
			return $this->orders;
		}

	}
		
?>