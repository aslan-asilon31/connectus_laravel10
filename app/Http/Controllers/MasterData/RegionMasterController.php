<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegionMaster;
use Datatables;

class RegionMasterController extends Controller
{
    
    public function index(){
        return view('masterdata.regionmasters.index');
    }

    public function getdata(){

        if(request()->ajax()) {
            return datatables()->of(RegionMaster::select('*'))
            ->addColumn('action', 'regionmasters.action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        // $users = User::all();
        // return view('masterdata.regionmasters.index',compact('regionmasters'));
    }

    public function create()
    {
        return view('masterdata.regionmasters.create');
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

        $regionmaster = new RoleMaster;

        $regionmaster->roles_id = $request->roles_id;
        $regionmaster->status_id = $request->status_id;
        $regionmaster->name = $request->name;
        $regionmaster->lang = $request->lang;
        $regionmaster->lang_id = $request->lang_id;


        $regionmaster->save();
        return redirect()->route('regionmasters.index')
                        ->with('success','Region has been created successfully.');
    }

    public function show(RegionMaster $regionmaster)
    {
        return view('masterdata.regionmasters.show',compact('regionmaster'));
    } 


    public function edit(RegionMaster $regionmaster)
    {
        return view('masterdata.regionmasters.edit',compact('regionmaster'));
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
        
        $regionmaster = RegionMaster::find($id);

        $regionmaster->roles_id = $request->roles_id;
        $regionmaster->status_id = $request->status_id;
        $regionmaster->name = $request->name;
        $regionmaster->lang = $request->lang;
        $regionmaster->lang_id = $request->lang_id;

        $regionmaster->save();
    
        return redirect()->route('regionmasters.index')
                        ->with('success','Role Has Been updated successfully');
    }

    public function destroy(Request $request)
    {
        $regionmaster = RegionMaster::where('id',$request->id)->delete();
     
        return Response()->json($rolemaster);
    }

}
