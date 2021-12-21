<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class CotactUsController extends Controller
{
    public function contact(Request $request)
    {
        Contact::newContact($request);
        return redirect()->back()->with('message','Message Send successful');
    }
}
