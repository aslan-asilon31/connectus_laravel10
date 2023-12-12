<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterBank;
use Datatables;

class MasterBankController extends Controller
{
    
    public function index(){
        return view('masterdata.bankmasters.index');
    }

    public function getdata(){

        if(request()->ajax()) {
            return datatables()->of(MasterBank::select('*'))
            ->addColumn('action', 'bankmasters.action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        // $users = User::all();
        // return view('masterdata.bankmasters.index',compact('bankmasters'));
    }

    public function create()
    {
        return view('masterdata.bankmasters.create');
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

        $bankmaster = new RoleMaster;

        $bankmaster->roles_id = $request->roles_id;
        $bankmaster->status_id = $request->status_id;
        $bankmaster->name = $request->name;
        $bankmaster->lang = $request->lang;
        $bankmaster->lang_id = $request->lang_id;


        $bankmaster->save();
        return redirect()->route('bankmasters.index')
                        ->with('success','bank has been created successfully.');
    }

    public function show(BankMaster $bankmaster)
    {
        return view('masterdata.bankmasters.show',compact('bankmaster'));
    } 


    public function edit(BankMaster $bankmaster)
    {
        return view('masterdata.bankmasters.edit',compact('bankmaster'));
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
        
        $bankmaster = MasterBank::find($id);

        $bankmaster->roles_id = $request->roles_id;
        $bankmaster->status_id = $request->status_id;
        $bankmaster->name = $request->name;
        $bankmaster->lang = $request->lang;
        $bankmaster->lang_id = $request->lang_id;

        $bankmaster->save();
    
        return redirect()->route('bankmasters.index')
                        ->with('success','Role Has Been updated successfully');
    }

    public function destroy(Request $request)
    {
        $bankmaster = MasterBank::where('id',$request->id)->delete();
     
        return Response()->json($bankmaster);
    }

}
