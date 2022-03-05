<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $posts = [
        '4200001' => [
            'lastname'       =>  'seno',
            'firstname'      =>  'chris',
            'birthday'       =>  '1998/02/23',
            'isnewstudent'   =>  true
        ],
        '4200011 ' => [
            'lastname'       =>  'ortiz',
            'firstname'      =>  'bryan',
            'birthday'       =>  '2001/09/21',
            'isnewstudent'   =>  false
        ],
    ];

    

    public function index()
    {
        return view('records.index',['posts'=>$this->posts ]);
    }

 
    public function create()
    {
        return view('records.create');
    }

 
    public function store(Request $request)
    {
        $lastname      =   request()->input('lastname');
        $firstname    =   request()->input('firstname');
        $birthday    =   request()->input('birthday');
        $post      =   ['lastname'=>$lastname, 'firstname'=>$firstname, 'birthday'=>$birthday];
        return view('blogs.store',['post'=> $post ]);
    }


    public function show($id)
    {
        abort_if(!(isset($this->posts[$id])), 404);
        return view('records.show',['post'=>$this->posts[$id] ]);
    }

 
    public function edit($id)
    {
        abort_if(!(isset($this->posts[$id])), 404);
        return view('records.edit',['post'=>$this->posts[$id] ]);
    }


    public function update(Request $request, $id)
    {
        $lastname      =   request()->input('lastname');
        $firstname    =   request()->input('firstname');
        $birthday    =   request()->input('birthday');
        $post      =   ['lastname'=>$lastname, 'firstname'=>$firstname, 'birthday'=>$birthday];
        return view('blogs.store',['post'=> $post ]);
    }


    public function destroy($id)
    {
        $lastname      =  NULL;
        $firstname    =   NULL;
        $birthday    =  NULL;
        $post      =   ['lastname'=>$lastname, 'firstname'=>$firstname, 'birthday'=>$birthday];
        return view('blogs.store',['post'=> $post ]);
    }
}
