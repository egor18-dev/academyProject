<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function terms ()
    {
        return view("templates.terms");
    }

    public function privacy ()
    {
        return view("templates.privacity");
    }
}
