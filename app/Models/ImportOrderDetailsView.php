<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportOrderDetailsView extends Model{
    use HasFactory;
    protected $table = 'importorderdetailsview';
    protected $fillable = [
        'id',
        'order_id',
        'date',
        'partner',
        'image',
        'name',
        'price',
        'color',
        'size',
        'category',
        'sex',
        'brand',
        'description',
        'quantity',
        'total'
    ];
}