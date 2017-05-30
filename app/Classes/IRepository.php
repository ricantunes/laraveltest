<?php namespace App\Classes;



    interface IRepository
    {
        //public function getOrderById($id);
        public function getAllOrdersByUserId($userId);
        public function getAllOrders();
    }




?>