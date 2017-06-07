<?php namespace App\Classes;


	class DiscountsManager 
	{
		/*protected $orders;
		protected $discounts;*/
		
		/*public function __construct($orders)
		{
			$this->orders = $orders;
			$this->discounts = new Discounts();
		}*/
		
		/*private function setDiscount1()
		{
			try {
				
				
				
				return $this;
			}
			catch (Exception $e) {
				echo 'Caught exception: ',  $e->getMessage(), "\n";
				return $this;
			}
		}
		private function setDiscount2()
		{
			try {
				
				
				
				return $this;
			}
			catch (Exception $e) {
				echo 'Caught exception: ',  $e->getMessage(), "\n";
				return $this;
			}
		}
		private function setDiscount3()
		{
			try {
				
				
				
				return $this;
			}
			catch (Exception $e) {
				echo 'Caught exception: ',  $e->getMessage(), "\n";
				return $this;
			}
		}*/


		public static function getAllDiscounts($orders)
		{
			//$obj = new DiscountsManager();
			//return $obj->setDiscount1()->SetDiscount2()->SetDiscount3();

			$orders_aux = $orders; 
			$discounts = new Discounts();

			foreach ($discounts->getDiscounts() as $discount)
			{
				$orders_aux = $discount->getDiscount($orders_aux);
			}

			return $orders_aux->orders != null ? $orders_aux : "Error";

		}

	}

?>