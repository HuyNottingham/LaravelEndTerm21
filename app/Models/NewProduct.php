<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewProduct extends Model{
    use HasFactory;
    protected $table = 'newproduct';
    protected $fillable = [
        'id',
        'image',
        'name',
        'price',
        'color',
        'size',
        'size_id',
        'category',
        'category_id',
        'sex',
        'brand',
        'description',
        'quantity'
    ];
}