<?php /*namespace App\Orders;

	//use App\Http\Controllers\Controller;

	class OrdersRepository //extends Controller 
	{
		protected $orders;
		
		public function __construct($source)
		{
			$this->orders = file_get_contents($source);
		}
		
		public function getOrder($id)
		{
			return $this->orders->find($id);
		}
		
		public function getAllOrders()
		{
			return $this->orders;
		}

	}
		
*/?>

<?php /*namespace App\Discounts;

	class DiscountsManager 
	{
		protected $order;
		
		private function SetDiscount1()
		{
			try {
			}
			catch (Exception $e) {
				echo 'Caught exception: ',  $e->getMessage(), "\n";
				return $this->order;
			}
		}
		private function SetDiscount2($order)
		{
			try {
				
			}
			catch (Exception $e) {
				echo 'Caught exception: ',  $e->getMessage(), "\n";
				return $this->order;
			}
		}
		private function SetDiscount3($order)
		{
			try {
				
			}
			catch (Exception $e) {
				echo 'Caught exception: ',  $e->getMessage(), "\n";
				return $this->order;
			}
		}


		public static function getAllDiscounts($order)
		{
			return SetDiscount1()->SetDiscount2()->SetDiscount3();
		}

	}

*/?>



<?php //namespace App\Controllers;

	/*use App\Http\Controllers\Controller;


	class OrdersController extends Controller {
		
		public getOrdersWithDiscount()
		{
			
		}
		
	}*/

?>




<?php

	use App\Classes\OrdersRepository;
	use App\Classes\DiscountsManager;
	
	$filename = "./jsonFiles/orders/order3.json";
	
	
	$obj = new OrdersRepository($filename);
	$orders = json_decode($obj->getAllOrders());
	
	$ordersWithDiscount = array();
	
	foreach($orders as $order)
	{
		array_push($ordersWithDiscount, DiscountsManager::getAllDiscounts($order));
		//DiscountsManager::getAllDiscounts($order);
	}
	
	//print_r ($orders);
	print_r ($ordersWithDiscount);

?>


<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <!--div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div-->
    </body>
</html>