<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewNetwork;
use App\Networks;

class NetworksController extends Controller {

    public function index() {

        $viewData = Networks::get();

        return view('networks.index', compact('viewData'));

    }

    public function store(CreateNewNetwork $request) {

        Networks::create($request->all());

        return redirect()->route('networks.index')->with('success', ['Record Added']);
    }
    
    public function show($network) {

        $viewData = Networks::where('id', $network)->first();

        return view('networks.edit', compact('viewData'));

    }

    public function update(CreateNewNetwork $request, $network) {

        Networks::where('id', $network)->first()->fill($request->all())->save();

        return redirect()->route('networks.show', $network)->with('success', ['Record Updated']);
    }

    public function destroy($network) {

        Networks::where('id', $network)->delete();

        return redirect()->route('networks.index')->with('success', ['Record Deleted']);
    }
}
