<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotProduct extends Model{
    use HasFactory;
    protected $table = 'hotproduct';
    protected $fillable = [
        'id',
        'sold',
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