<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory;
use SoftDeletes;
protected $dates = ['deleted_at'];
    public $fillable = [
        'guid',
        'conversation_id',
        'sender_id',
        'message_type',
        'message',
    ];

    public function UserMessages()
    {
        return $this->hasMany(Message::class);
    }
}
