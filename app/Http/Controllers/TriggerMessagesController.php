<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewNetwork;
use App\Networks;

class TriggerMessagesController extends Controller {

    public function index() {

        return view('trigger-messages.index');
        
    }

}
