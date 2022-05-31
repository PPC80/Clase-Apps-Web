<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dataContact(Request $request)
    {

        (!request()->name) ? $name='invitado': $name = request()->name;

        return view('contactos',compact('name'));
    }
}
