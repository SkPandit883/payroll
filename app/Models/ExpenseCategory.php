<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExpenseCategory extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function expenses(){
        return $this->hasMany(DebitCredit::class,'expenses_category_id');
    }
    public function getExpenseCategoryAttribute()
    {
        return ucfirst($this->name);
    }
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = Str::title($value);
    }
}
