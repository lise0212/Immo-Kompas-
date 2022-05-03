<?php

namespace App\Http\Controllers;

use App\Models\Search;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FindMatchController extends Controller
{
    /**
     * Display the buyer view.
     *
     * @return \Illuminate\View\View
     */
    public function create(){
        return view('buyer');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'property_types'=> ['required', 'min:1'],
            'locality'=> ['required'],
            'min_price'=> ['required'],
            'max_price' =>['required'],
        ]);
        
        // $search = Search::store([
            //     'email' => $request->email,
            //     'property_type' => $request->property_types,
            //     'locality'=>$request->locality,
            //     'min_price'=>$request->min_price,
            //     'max_price'=>$request->max_price,
            
            // ]);
            // $search -> save();
            
        $property_type = implode("", $request->property_types); 
        //convert array to string

        $search = new Search;
        $search -> email = $request->email;
        $search -> property_type = $property_type;
        $search -> locality = $request->locality;
        $search -> min_price = $request->min_price;
        $search -> max_price = $request->max_price;
        $search -> save();

        return redirect(RouteServiceProvider::HOME);
    }

    
}
