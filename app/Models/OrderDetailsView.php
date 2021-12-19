<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetailsView extends Model{
    use HasFactory;
    protected $table = 'orderdetailsview';
    protected $fillable = [
        'id',
        'order_id',
        'name',
        'brand',
        'price',
        'quantity',
        'total'
    ];
}