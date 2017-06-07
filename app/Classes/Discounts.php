<?php namespace App\Classes;



    class Discount1 implements IDiscount
    {
        public function getDiscount($value)
        {
            if($value->orders != null && property_exists($value->orders, "total") && $value->orders->total > 1000)
            {
                $value->orders->total = $value->orders->total - ($value->orders->total * 0.10);
                array_push($value->reasons, "Reason for discount: 10% discount because total greater than 1000.");
            }
            
            return $value;
        }

    }


    class Discount2 implements IDiscount
    {
        //public function __construct(){ }

        public function getDiscount($value)
        {
            if($value->orders != null && property_exists($value->orders, "items"))
            {
                foreach($value->orders->items as $item)
                {
                    if(property_exists($item,"category") && $item->category == 2)
                    {
                        $item->quantity = "6";
                        array_push($value->reasons, "Reason for discount: You get an extra product in the switches category because you bought 5 items.");
                    }
                }

            }
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
            array_push($this->discountsList, new Discount3());
            array_push($this->discountsList, new Discount2());
            array_push($this->discountsList, new Discount1());
        }

        public function getDiscounts()
        {
            return $this->discountsList;
        }

    }

?>