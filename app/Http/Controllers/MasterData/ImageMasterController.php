<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImageMaster;
use Datatables;

class ImageMasterController extends Controller
{
    
    public function index(){
        return view('masterdata.imagemasters.index');
    }

    public function getdata(){

        if(request()->ajax()) {
            return datatables()->of(ImageMaster::select('*'))
            ->addColumn('action', 'imagemasters.action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        // $users = User::all();
        // return view('masterdata.imagemasters.index',compact('imagemasters'));
    }

    public function create()
    {
        return view('masterdata.imagemasters.create');
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

        $imagemaster = new RoleMaster;

        $imagemaster->roles_id = $request->roles_id;
        $imagemaster->status_id = $request->status_id;
        $imagemaster->name = $request->name;
        $imagemaster->lang = $request->lang;
        $imagemaster->lang_id = $request->lang_id;


        $imagemaster->save();
        return redirect()->route('imagemasters.index')
                        ->with('success','Image has been created successfully.');
    }

    public function show(RoleMaster $imagemaster)
    {
        return view('masterdata.imagemasters.show',compact('imagemaster'));
    } 


    public function edit(RoleMaster $imagemaster)
    {
        return view('masterdata.imagemasters.edit',compact('imagemaster'));
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
        
        $imagemaster = ImageMaster::find($id);

        $imagemaster->roles_id = $request->roles_id;
        $imagemaster->status_id = $request->status_id;
        $imagemaster->name = $request->name;
        $imagemaster->lang = $request->lang;
        $imagemaster->lang_id = $request->lang_id;

        $imagemaster->save();
    
        return redirect()->route('imagemasters.index')
                        ->with('success','Role Has Been updated successfully');
    }

    public function destroy(Request $request)
    {
        $imagemaster = ImageMaster::where('id',$request->id)->delete();
     
        return Response()->json($imagemaster);
    }

}
