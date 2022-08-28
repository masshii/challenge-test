<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            
            'email' => 'email',
            'postcode' => 'required',
            'address' => 'required',
            'contact' => 'required',
        
        ]);
        $input = $request->input();

        $request->session()->put('input', $input);

        return view('contact.confirm', [
            'input' => $input
        ]);
    }

    public function thanks(Request $request)
    {
        $input = $request->session()->get('input');
        
        if($request->has('back') == true){
            return redirect('/contact')->withInput($input);
        }

        if(!$input){
            return redirect()->route('contact.index');
        }
        
        $request->session()->forget('input');
        
        return view('contact.thanks');
    }
}
