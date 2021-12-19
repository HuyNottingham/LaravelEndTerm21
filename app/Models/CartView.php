<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartView extends Model{
    use HasFactory;
    protected $table = 'cartview';
    protected $fillable = [
        'id',
        'product_id',
        'image',
        'name',
        'price',
        'quantity'
    ];
}