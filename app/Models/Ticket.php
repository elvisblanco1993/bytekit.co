<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'type',
        'severity_level',
        'subject',
        'description',
        'contact_method',
        'cc_email',
        'attachment',
        'resolved_at'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
