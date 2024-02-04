<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentController extends Controlgitler
{
    public  function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
}
