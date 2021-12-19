<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryView extends Model{
    use HasFactory;
    protected $table = 'categoryview';
    protected $fillable = [
        'id',
        'category',
        'quantity'
    ];
}