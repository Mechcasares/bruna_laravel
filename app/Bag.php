<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bag extends Model
{
    public $items;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct ($oldBag){
        if ($oldBag) {
            $this-> items = $oldBag -> items;
            $this-> totalQty = $oldBag -> totalQty;
            $this-> totalPrice = $oldBag -> totalPrice;
        } else {
            $this->items = null; 
        }
    }

    public function add ($items, $id){
        $storedItem = ['qty' => 0, 'price'=> $item->price, 'item' => $item ];
        if ($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this ->items[$id];
            }
        }
    
        $this->items[$id] = storedItem;
    }
}
