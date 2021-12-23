<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesView extends Model{
    use HasFactory;
    protected $table = 'salesview';
    protected $fillable = [
        'date',
        'sold',
        'import'
    ];
}