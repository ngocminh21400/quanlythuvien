<?php 
namespace App;

use App\Sach;

class Cart {
    public $items =null;
    public $totalQty = 0;
    public $totalPrice = 0;
    
    public function __construct($oldCart) {
        if($oldCart) {
            $this->items = $oldCart->items;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalQty = $oldCart->totalQty;
        }
    }

    public function add ($item, $id) {
        $giohang = ['price' => 5000, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $giohang = $this->items[$id];
            }else {
                $this->totalPrice += 5000;
                $this->totalQty += 1;
            }
        } else {
            $this->totalPrice += 5000;
            $this->totalQty += 1;
        }
        $this->items[$id] = $giohang;
       
    }

    public function removeItem($req, $id, $empty) {
        $this->totalPrice -= 5000;
        $this->totalQty -= 1;
        unset($this->items[$id]);
    }
}
?>