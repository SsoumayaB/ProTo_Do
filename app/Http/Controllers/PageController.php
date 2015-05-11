<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {

	public function about()
    {
        $title="abouttt";
        
        $titre="welcommme ";
        return view('about',compact('title','titre'));
    }
    public function contact()
    {
        return "contact";
    }

}
