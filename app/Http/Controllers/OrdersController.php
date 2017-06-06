<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

use App\Classes\OrdersRepository;
use App\Classes\DiscountsManager;

class OrdersController extends Controller
{

    public function ShowOrderByUserId(OrdersRepository $obj, $userId)
    {

        //$filename = "./jsonFiles/orders/order3.json";
        //$obj = new OrdersRepository($filename);
        //$orders = json_decode($obj->getAllOrders());

        //$obj = new OrdersRepository();
        //$orders = json_decode($obj->getAllOrders());
        //print_r($orders);

        //var_dump($obj->getAllOrdersByUserId($userId));
        $orders = $obj->getAllOrdersByUserId($userId);
        //print_r($orders);

        //$ordersWithDiscount = array();
        
        /*foreach($orders as $order)
        {*/
        //array_push($ordersWithDiscount, DiscountsManager::getAllDiscounts($orders));
            //DiscountsManager::getAllDiscounts($order);
        /*}*/
        
        //print_r ($orders);
        //print_r ($ordersWithDiscount);
        echo json_encode(DiscountsManager::getAllDiscounts($orders));

        //return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    public function ShowAllOrders(OrdersRepository $obj)
    {
        echo 'under development';
    }    
}