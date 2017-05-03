<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StatusesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',[
            'only' => ['store','destroy']
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'content' => 'required|max:140'
        ]);

        Auth::user()->statuses()->create([
            'content' => $request->content
        ]);

        return redirect()->back();
    }
}
