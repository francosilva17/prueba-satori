<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
