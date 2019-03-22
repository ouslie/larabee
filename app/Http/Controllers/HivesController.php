<?php
namespace App\Http\Controllers;

use App\Hives;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Apiaries;

class HivesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $request->session()->put('search', $request->has('search') ? $request->get('search') : ($request->session()->has('search') ? $request->session()->get('search') : ''));
        $request->session()->put('field', $request->has('field') ? $request->get('field') : ($request->session()->has('field') ? $request->session()->get('field') : 'created_at'));
        $request->session()->put('sort', $request->has('sort') ? $request->get('sort') : ($request->session()->has('sort') ? $request->session()->get('sort') : 'desc'));
        $hives = new Hives();

        $hives = $hives->where('name', 'like', '%' . $request->session()->get('search') . '%')
            ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
            ->paginate(5);
        if ($request->ajax())
            return view('hives.index', compact('hives'));
        else
            return view('hives.ajax', compact('hives'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('get'))
            return view('hives.form');
        else {
            $rules = [
                'name' => 'required',
                'frame' => 'required|integer',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails())
                return response()->json([
                    'fail' => true,
                    'errors' => $validator->errors()
                ]);
            $hive = new Hives();
            $hive->name = $request->name;
            $hive->frame = $request->frame;
            $hive->save();
            return response()->json([
                'fail' => false,
                'redirect_url' => url('app/hives')
            ]);
        }
    }

    public function store(Request $request)
    {
      $request->validate([
        'name'=>'required',
        'frame'=> 'required|integer',
      ]);
      $apiary = new Apiaries([
        'name' => $request->get('name'),
        'frame'=> $request->get('frame'),
      ]);
      $apiary->save();
      return redirect('/shares')->with('success', 'Stock has been added');
    }

    

    public function delete($id)
    {
        Hives::destroy($id);
        return redirect('app/hives');
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('get'))
            return view('hives.form', ['hive' => Hives::find($id)]);
        else {
            $rules = [
                'name' => 'required',
                'email' => 'required|email',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails())
                return response()->json([
                    'fail' => true,
                    'errors' => $validator->errors()
                ]);
            $hive = Hives::find($id);
            $hive->name = $request->name;
            $hive->save();
            return response()->json([
                'fail' => false,
                'redirect_url' => url('hives')
            ]);
        }
    }
}
