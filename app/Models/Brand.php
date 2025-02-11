<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['name','image'];

    public function notifications()
    {
        return $this->morphMany(Notification::class,'notifiable');
    }

    public function activityLog()
    {
        return $this->morphMany(ActivityLog::class,'loggable');
    }

}
