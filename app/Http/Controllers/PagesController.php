<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\BX; // Trait

class PagesController extends Controller
{
    use Common; // Trait

    public function index(){
        $data['value1'] = $this->fun1(); // Call trait method
        $data['value2'] = $this->status(1); // Call trait method

        return view('index',$data);
    }

}
