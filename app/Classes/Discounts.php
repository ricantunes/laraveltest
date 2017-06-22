<?php namespace App\Classes;


    use Illuminate\Support\Collection;



    class Discount1 implements IDiscount
    {
        public function getDiscount($value)
        {
            if($value->orders != null && property_exists($value->orders, "total") && $value->orders->total > 1000)
            {
                $value->orders->total = $value->orders->total - ($value->orders->total * 0.10);
                array_push($value->reasons, "Reason for discount: 10% discount because total is greater than 1000.");
            }
            
            return $value;
        }

    }


    class Discount2 implements IDiscount
    {
        public function getDiscount($value)
        {
            if($value->orders != null && property_exists($value->orders, "items"))
            {
                foreach($value->orders->items as $item)
                {
                    if(property_exists($item,"category") && $item->category == 2 && $item->quantity == 5)
                    {
                        $item->quantity = "6";
                        array_push($value->reasons, "Reason for discount: You get an extra product in the Switches category because you bought 5 items.");
                    }
                }

            }
            return $value;
        }

    }


    class Discount3 implements IDiscount
    {
        public function getDiscount($value)
        {
            if($value->orders != null && property_exists($value->orders, "items"))
            {
                $itemsCollection = collect($value->orders->items)->where('category', '1');

                if($itemsCollection->count() >= 2)
                {
                    $prodId = $itemsCollection->sortBy('unit-price')->first()->{'product-id'};
                    foreach($value->orders->items as $item)
                    {
                        if($item->{'product-id'} == $prodId)
                        {
                            $discount = $item->total * 0.2;
                            $item->total = strval($item->total - $discount);

                            $value->orders->total = $value->orders->total - $discount;

                            array_push($value->reasons, "Reason for discount: You get an 20% discount on the cheapest product for buying two or more product from the Tools category.");
                            break;
                        }
                    }
                }
            }

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