<?php namespace App\Classes;



    class Discount1 implements IDiscount
    {
        //public function __construct(){ }

        public function getDiscount($value)
        {
            if($value->orders->total >= 1000)
            {
                $value->orders->total = $value->orders->total - ($value->orders->total * 0.10);
                array_push($value->reasons, "reasons 1");
            }
            
            return $value;
        }

    }


    class Discount2 implements IDiscount
    {
        //public function __construct(){ }

        public function getDiscount($value)
        {
            
            return $value;
        }

    }


    class Discount3 implements IDiscount
    {
        //public function __construct(){ }

        public function getDiscount($value)
        {
            
            return $value;
        }

    }


    class Discounts
    {
        private $discountsList = array();
        
        public function __construct()
		{
            array_push($this->discountsList, new Discount1());
            array_push($this->discountsList, new Discount2());
            array_push($this->discountsList, new Discount3());
        }

        public function getDiscounts()
        {
            return $this->discountsList;
        }

    }

?>