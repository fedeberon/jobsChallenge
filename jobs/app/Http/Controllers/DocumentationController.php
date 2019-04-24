<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentationController extends Controller
{

public function index(){
    return \File::get(public_path() . '/docs/api-documentation.html');
}

public function statics(){
    return \File::get(public_path() . '/docs/statistics.html');
}

}
