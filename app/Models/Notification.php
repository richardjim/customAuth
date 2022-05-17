<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = "notification";
    protected $fillable = [
        'name',
        'title',
        'description',
        'image_URL',
        'image_Alt',
        'Coupon_code',
        'Button_URL',
        'Button_text',
        'Footer_text',
        'notification_URL',
        'Email_Placeholder',
        'Thank_you_URL',
        'Video_URL',
        'Link_URL',
        'Link_text',
        'Content_Description',
        'Content_title',
        'Input_Placeholder',
        'select',
        
    ];

    // public function setselectAttribute($value)
    // {
    //     $this->attributes['select'] = json_encode($value);
    // }

    // public function getselectAttribute($value)
    // {
    //     return $this->attributes['select'] = json_decode($value);
    // }
}
