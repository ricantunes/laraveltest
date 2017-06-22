<?php namespace App\Classes;



    interface IRepository
    {
        public function getAllOrdersByUserId($userId);
        public function getAllOrders();
    }


?>