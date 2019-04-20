<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart
{
    public $items;
    public $totallyQty=0;
    public $totallyAmount=0;
    public function __construct($oldCart)
    {
        if($oldCart) {
            $this->items = $oldCart->items;
            $this->totallyAmount = $oldCart->totallyAmount;
            $this->totallyQty = $oldCart->totallyQty;
        }else{
            $this->items=null;
        }
    }
    public function addCart($id,$pd){
        $storeItem=['item'=>$pd,'qty'=>0,'amount'=>$pd->price];
        if($this->items){
            if(array_key_exists($id,$this->items)){
                $storeItem=$this->items[$id];
            }
        }
        $storeItem['qty']++;
        $storeItem['amount']=$pd->price * $storeItem['qty'];
        $this->items[$id]=$storeItem;
        $this->totallyQty++;
        $this->totallyAmount +=$pd->price;
    }
    public function increase($id){
        $this->items[$id]['qty']++;
        $this->items[$id]['amount'] +=$this->items[$id]['item']['price'];
        $this->totallyQty ++;
        $this->totallyAmount +=$this->items[$id]['item']['price'];
    }
    public function decrease($id){
        $this->items[$id]['qty']--;
        $this->items[$id]['amount'] -=$this->items[$id]['item']['price'];
        $this->totallyQty --;
        $this->totallyAmount -=$this->items[$id]['item']['price'];
        if($this->items[$id]['qty'] <=0){
            unset($this->items[$id]);
        }
    }
}
