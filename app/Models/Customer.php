<?php

namespace App\Models;

use Laravel\Cashier\Billable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    use Billable;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'size',
        'computers',
        'servers',
        'contracted_hours',
        'stripe_id',
        'pm_type',
        'pm_last_four',
        'trial_ends_at',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

}
