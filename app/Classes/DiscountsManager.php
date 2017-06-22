<?php namespace App\Classes;


	class DiscountsManager 
	{
		public static function getAllDiscounts($orders)
		{
			$orders_aux = $orders; 
			$discounts = new Discounts();

			foreach ($discounts->getDiscounts() as $discount)
			{
				$orders_aux = $discount->getDiscount($orders_aux);
			}

			return $orders_aux->orders != null ? $orders_aux : new Error("Error 1", "No orders available.") ;

		}

	}

?>