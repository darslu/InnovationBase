<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductInfo extends Model
{
    public function comment() {
        return $this->belongsTo(Comment::class, 'product_id');
    }
}
