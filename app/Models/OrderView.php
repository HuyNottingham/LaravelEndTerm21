<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderView extends Model{
    use HasFactory;
    protected $table = 'orderview';
    protected $fillable = [
        'id',
        'date',
        'total',
        'name',
        'email',
        'address',
        'phone',
        'status'
    ];
}