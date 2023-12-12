<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BrandMaster;
use Datatables;

class BrandMasterController extends Controller
{
    
    public function index(){
        return view('masterdata.brandmasters.index');
    }

    public function getdata(){

        if(request()->ajax()) {
            return datatables()->of(BrandMaster::select('*'))
            ->addColumn('action', 'brandmasters.action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        // $users = User::all();
        // return view('masterdata.brandmasters.index',compact('brandmasters'));
    }

    public function create()
    {
        return view('masterdata.brandmasters.create');
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

        $brandmaster = new BrandMaster;

        $brandmaster->roles_id = $request->roles_id;
        $brandmaster->status_id = $request->status_id;
        $brandmaster->name = $request->name;
        $brandmaster->lang = $request->lang;
        $brandmaster->lang_id = $request->lang_id;


        $brandmaster->save();
        return redirect()->route('brandmasters.index')
                        ->with('success','Role has been created successfully.');
    }

    public function show(BrandMaster $brandmaster)
    {
        return view('masterdata.brandmasters.show',compact('brandmaster'));
    } 


    public function edit(BrandMaster $brandmaster)
    {
        return view('masterdata.rolemasters.edit',compact('brandmaster'));
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
        
        $brandmaster = BrandMaster::find($id);

        $brandmaster->roles_id = $request->roles_id;
        $brandmaster->status_id = $request->status_id;
        $brandmaster->name = $request->name;
        $brandmaster->lang = $request->lang;
        $brandmaster->lang_id = $request->lang_id;

        $brandmaster->save();
    
        return redirect()->route('rolemasters.index')
                        ->with('success','Role Has Been updated successfully');
    }

    public function destroy(Request $request)
    {
        $brandmaster = BrandMaster::where('id',$request->id)->delete();
     
        return Response()->json($brandmaster);
    }

}
