<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PagesController extends Controller
{
    public function getIndex(){
        $posts = Post::orderBy('created_at','desc')->limit(4)->get();
        return view("pages.welcome")->withPosts($posts);
        
    }
    
    public function getAbout(){
        $first = 'Nasir';
        $last = 'Hussain';
        
        $fullname = $first." ".$last;
        $email = 'nasirhussain0@outlook.com';
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;
        
        
        return view("pages.about")->withData($data);
            
//            ->withFullname($fullname)->withEmail($emsil);
        
    }
    
    public function getContact(){
        return view("pages.contact");
        
    }
    
//    public function postContact(){
//        
//    }
}


