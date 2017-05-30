<?php namespace App\Classes;

	class DiscountsManager 
	{
		protected $order;
		
		public function __construct($order)
		{
			$this->order = $order;
		}
		
		private function setDiscount1()
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
		}


		public static function getAllDiscounts($order)
		{
			$obj = new DiscountsManager($order);
			return $obj->setDiscount1()->SetDiscount2()->SetDiscount3();
		}

	}

?>