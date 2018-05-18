<!-- <?php

namespace App;



class Cart 
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id){
        $storedItem =['qty' => 0, 'price' => $item->price, 'item' => $$item];
    }
}
 -->