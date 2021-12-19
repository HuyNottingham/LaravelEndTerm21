<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishlistView extends Model{
    use HasFactory;
    protected $table = 'wishlistview';
    protected $fillable = [
        'id',
        'product_id',
        'image',
        'name',
        'price'
    ];
}