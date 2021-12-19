<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductView extends Model{
    use HasFactory;
    protected $table = 'productview';
    protected $fillable = [
        'id',
        'image',
        'name',
        'price',
        'color',
        'size',
        'category',
        'sex',
        'brand',
        'description',
        'quantity'
    ];
}