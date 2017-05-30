<?php namespace App\Classes;


	class OrdersRepository implements IRepository
	{
		private $orders;

		public function __construct()
		{
			$filename = "./jsonFiles/orders/order3.json";
			$this->orders = file_get_contents($filename);
		}
		
		/*public function getOrderById($id)
		{
			return $this->orders->find($id);
		}*/

		public function getAllOrdersByUserId($userId)
		{
			$json = json_decode($this->orders);
			if($json->{"customer-id"} == $userId)
			{
				return $json->items;
			}
		}
		
		public function getAllOrders()
		{
			return $this->orders;
		}

	}
		
?>