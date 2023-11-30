<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SyncController extends Controller
{
    public $link, $api;

    public function __construct()
    {
        $this->link = config('app.api_link');
        $this->api = config('app.api_key');
    }
}
