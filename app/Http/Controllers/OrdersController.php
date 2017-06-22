<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

use App\Classes\OrdersRepository;
use App\Classes\DiscountsManager;

use App\Classes\Error;

class OrdersController extends Controller
{

    public function ShowOrderByUserId(OrdersRepository $obj, $userId)
    {

        $orders = $obj->getAllOrdersByUserId($userId);

        return response()->json(DiscountsManager::getAllDiscounts($orders));
    }


    public function ShowAllOrders(OrdersRepository $obj)
    {
        //echo 'under development';
        return response()->json(new Error("Error 2", "Not available."));
    }    
}