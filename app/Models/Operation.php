<?php

namespace App\Models;
use App\Models\Budget;
use App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;
    protected $table = 'Operations';
    protected $fillable = ['id', 'title', 'description', 'amount', 'type', 'created_at', 'updated_at', 'user_id', 'budget_id'];
    public $timestamps = ['created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function budget()
    {
        return $this->belongsTo(Budget::class);
    }
}
