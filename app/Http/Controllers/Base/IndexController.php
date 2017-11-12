<?php
/**
 * Created by PhpStorm.
 * User: crealm
 * Date: 12.11.17
 * Time: 10:30
 */

namespace App\Http\Controllers\Base;


use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index()
    {
        return view('base.index');
    }
}