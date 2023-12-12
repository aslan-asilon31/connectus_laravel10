<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterLoginController extends Controller
{
    public function index(){
        $sql = "SELECT * FROM master_login ";

        $result = DB::select($sql);
        return $result;
    }
}
