<?php
/**
 * Seen
 * @package product-last-seen
 * @version 0.0.1
 */

namespace ProductLastSeen\Library;

use ProductLastSeen\Model\ProductLastSeen as PLSeen;

class Seen
{
    static function add(int $user, int $product): void{
        $exists = PLSeen::getOne(['user'=>$user, 'product'=>$product]);
        if($exists){
            PLSeen::inc(['seen'=>1], ['id'=>$exists->id]);
        }else{
            PLSeen::create([
                'user' => $user,
                'product' => $product
            ]);
        }
    }
}