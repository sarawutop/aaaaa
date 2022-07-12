<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('pages.index');
    }
    public function show($id) {  
        return view('pages.show', [
            'id' => $id,
            'name' => 'Aad'
        ]);

    }

}
