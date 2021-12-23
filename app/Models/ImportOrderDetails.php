<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportOrderDetails extends Model{
    use HasFactory;
    protected $table = 'importorderdetails';
    protected $fillable = [
        'id',
        'order_id',
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