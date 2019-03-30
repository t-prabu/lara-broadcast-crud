<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateNewNumber;

use App\Networks;

use App\Numbers;

use App\Imports\BulkNumbers;
use Maatwebsite\Excel\Facades\Excel;



class NumbersController extends Controller {
    public function index() {
        $viewData = Numbers::get();
        return view('numbers.index', compact('viewData'));

    }
    public function singleView() {
        $viewData = Networks::get();
        return view('numbers.single', compact('viewData'));

    }
    public function bulkView() {
        return view('numbers.bulk');
    }

    public function bulkStore(Request $request) {
        // dd(['bulk-records-file']);
        // Numbers::create($request->all());

        // return redirect()->back()->with('success', ['Record Added']);
        
        Excel::import(new BulkNumbers, $request['bulk-records-file']);
        
        return redirect()->back()->with('success', ['Records Added']);

    }

    public function store(CreateNewNumber $request) {
        Numbers::create($request->all());

        return redirect()->back()->with('success', ['Record Added']);
    }

    public function show($number) {
    
    $viewData = Numbers::where('id', $number)->first();
    $subdata = Networks::get();

    return view('numbers.edit', compact(['viewData', 'subdata']));

    }

    public function destroy($number) {
    
    Numbers::where('id', $number)->delete();
    return redirect()->route('numbers.index')->with('success', ['Record Deleted']);

    }

    public function update(CreateNewNumber $request, $number) {

        Numbers::where('id', $number)->first()->fill($request->all())->save();

        // return redirect()->route('numbers.show', $network);
        return redirect()->back()->with('success', ['Record Updated']);
    }
}
