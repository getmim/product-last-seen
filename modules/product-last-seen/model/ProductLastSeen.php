<?php
/**
 * ProductLastSeen
 * @package product-last-seen
 * @version 0.0.1
 */

namespace ProductLastSeen\Model;

class ProductLastSeen extends \Mim\Model
{

    protected static $table = 'product_last_seen';

    protected static $chains = [
        'product' => [
            'model' => 'Product\\Model\\Product',
            'field' => 'id'
        ]
    ];

    protected static $q = [];
}