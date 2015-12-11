<?php

namespace Bountify\Http\Controllers;


use Bountify\Gift;
use Bountify\Http\Requests;
use Bountify\Http\Requests\AddGiftRequest;
use Bountify\Http\Controllers\Controller;
use Carbon\Carbon;

class GiftsController extends Controller {
    
    public function index() {
        $gifts=Gift::latest('published_at')->get();
        return view('gifts.index')->with('gifts', $gifts);
    }

    public function show($id) {
        $gift = Gift::findorfail($id);
        return view('gifts.show')->with('gift', $gift);
    }

    public function create() {
        return view('gifts.create');
    }

    public function store(AddGiftRequest $request) {
        Gift::create($request->all());
        return redirect('gifts');
    }

    public function search()
    {
        return view('gifts.search');
    }
    
}
