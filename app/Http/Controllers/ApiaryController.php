<?php

namespace App\Http\Controllers;

use App\Apiary;
use Illuminate\Http\Request;

class ApiaryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $apiary = Apiary::all();

        return view('apiary.index', compact('apiary'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        return view('apiary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',

        ]);
        $share = new Apiary([
            'name' => $request->get('name'),

        ]);
        $share->save();
        return redirect('/apiary')->with('success', 'Apiary has been added');
    }

    public function destroy($id)
    {
        $share = Apiary::find($id);
        $share->delete();

        return redirect('/apiary')->with('success', 'Stock has been deleted Successfully');
    }

}
