<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;



class LocaleController extends Controller
{
    public function set_locale($locale)
    {
        Session::put('locale', $locale);
        return Redirect::back();
    }
}
