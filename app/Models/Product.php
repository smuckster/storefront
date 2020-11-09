<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'description', 'image', 'price'];

    public function path() {
        return "/products/{$this->id}";
    }

    public function group() {
        return $this->belongsTo(ProductGroup::class);
    }
}
