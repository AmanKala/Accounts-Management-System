<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $table = 'transactions';

    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'date',
        'paid_by_to',
        'amount',
        'quantity',
        'unit_name',
        'type',
        'status',
        'utr',
        'project',
        'comment',
        'invoice_number'
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function($model){
            $str = str_replace("-","",$model->date);
            $model->invoice_number='STSINV/'.$str;
        });
    }
}
