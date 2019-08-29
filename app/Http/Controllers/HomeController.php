<?php

namespace App\Http\Controllers;

use App\Contact_Us;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

   		 return view('welcome');

    }

 	public function about(){

   		 return view('about');

    }

	
 	public function contact_us(){

   		 return view('contact_us');

    }       

    	public function storeContactUs(Request $request){

			$request->validate([
			    'name' => 'required|string|max:255',
			    'email' => 'required',
			    'phone' => 'required',
			    'plot_size' => 'required',
			    'city' => 'required',
			    'massage' => 'required|max:1000',
			]);	
	
	    	Contact_Us::create($request->all());  
			
			return redirect('/');





    }  
}
