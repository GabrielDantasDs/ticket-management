<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model {
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'resolve_date_deadline',
        'resolve_date',
        'category_id',
        'situation_id',
    ];

    public static function boot() {
        parent::boot();
        self::creating(function ($model) {
            $model->resolve_date_deadline = Carbon::parse(Carbon::now())->addDays(3);
        });
    }

    function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    function situation() {
        return $this->belongsTo(Situation::class, 'situation_id');
    }
}
