<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    private static $contact;
    use HasFactory;
    public static function newContact($request)
    {
        self::$contact = new Contact();
        self::$contact->name = $request->name;
        self::$contact->email = $request->email;
        self::$contact->subject = $request->subject;
        self::$contact->message = $request->message;
        self::$contact->save();
    }
}
