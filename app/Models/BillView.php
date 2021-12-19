<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillView extends Model{
    use HasFactory;
    protected $table = 'billview';
    protected $fillable = [
        'id',
        'date',
        'total',
        'email',
        'address'
    ];
}