<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReviewMaster;
use Datatables;

class ReviewMasterController extends Controller
{
    
    public function index(){
        return view('masterdata.rolemasters.index');
    }

    public function getdata(){

        if(request()->ajax()) {
            return datatables()->of(RoleMaster::select('*'))
            ->addColumn('action', 'rolemasters.action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        // $users = User::all();
        // return view('masterdata.rolemasters.index',compact('rolemasters'));
    }

    public function create()
    {
        return view('masterdata.rolemasters.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'roles_id' => 'required',
            'status_id' => 'required',
            'name' => 'required',
            'lang' => 'required',
            'lang_id' => 'required',
        ]);

        $rolemaster = new RoleMaster;

        $rolemaster->roles_id = $request->roles_id;
        $rolemaster->status_id = $request->status_id;
        $rolemaster->name = $request->name;
        $rolemaster->lang = $request->lang;
        $rolemaster->lang_id = $request->lang_id;


        $rolemaster->save();
        return redirect()->route('rolemasters.index')
                        ->with('success','Role has been created successfully.');
    }

    public function show(RoleMaster $rolemaster)
    {
        return view('masterdata.rolemasters.show',compact('rolemaster'));
    } 


    public function edit(RoleMaster $rolemaster)
    {
        return view('masterdata.rolemasters.edit',compact('rolemaster'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'roles_id' => 'required',
            'status_id' => 'required',
            'name' => 'required',
            'lang' => 'required',
            'lang_id' => 'required'
        ]);
        
        $rolemaster = RoleMaster::find($id);

        $rolemaster->roles_id = $request->roles_id;
        $rolemaster->status_id = $request->status_id;
        $rolemaster->name = $request->name;
        $rolemaster->lang = $request->lang;
        $rolemaster->lang_id = $request->lang_id;

        $rolemaster->save();
    
        return redirect()->route('rolemasters.index')
                        ->with('success','Role Has Been updated successfully');
    }

    public function destroy(Request $request)
    {
        $rolemaster = RoleMaster::where('id',$request->id)->delete();
     
        return Response()->json($rolemaster);
    }

}
