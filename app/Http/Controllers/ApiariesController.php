<?php
namespace App\Http\Controllers;

use App\Apiaries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiariesController extends Controller
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
        $apiaries = new Apiaries();

        $apiaries = $apiaries->where('name', 'like', '%' . $request->session()->get('search') . '%')
            ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
            ->paginate(5);
        if ($request->ajax())
            return view('apiaries.index', compact('apiaries'));
        else
            return view('apiaries.ajax', compact('apiaries'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('get'))
            return view('apiaries.form');
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
            $apiary = new Apiaries();
            $apiary->name = $request->name;
            $apiary->save();
            return response()->json([
                'fail' => false,
                'redirect_url' => url('apiaries')
            ]);
        }
    }

    public function destroy($id)
    {
        Apiaries::destroy($id);
        return redirect('app/apiaries');
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('get'))
            return view('apiaries.form', ['apiary' => Apiaries::find($id)]);
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
            $apiary = Apiaries::find($id);
            $apiary->name = $request->name;
            $apiary->save();
            return response()->json([
                'fail' => false,
                'redirect_url' => url('apiaries')
            ]);
        }
    }
}
