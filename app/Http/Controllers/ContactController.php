<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nette\Utils\Type;

class ContactController extends Controller
{
    public function index(){
         $companies = [
        1=>['name'=>"Company One", 'contacts'=>'3'],
        2=>['name'=>"Company Two", 'contacts'=>'5'],

    ];
    $contacts =$this-> get_contacts();

    return view('contacts.index', compact('contacts','companies'));

    }

    public function create(){
        return view('contacts.create');
    }

    public function show($id){
        $contacts = $this ->get_contacts();

        abort_unless(isset($contacts[$id]),404);

        $contact = $contacts[$id];

        return view('contacts.show')->with('contact',$contact);

    }

    protected function get_contacts()
    
    {
    return [
        1=>['id'=> 1,'name'=>"Name 1", 'phone'=>'0616750088'],
        2=>['id'=> 2,'name'=>"Name 2", 'phone'=>'0769753488'],
        3=>['id'=> 3,'name'=>"Name 3", 'phone'=>'0716521431'],
    ];
}
}
