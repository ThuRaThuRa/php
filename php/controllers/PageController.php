<?php

class PageController {
    public function home()
 {
        // $users = App::get('database')->selectAll( 'users' );
        
        // require 'views/index.view.php';

        return view('index');
    
    }
    
    public function about()
    {
      return view('about');
    }

    public function contact()
 {
    return view('contact');
    }

    public function product()
 {
        return view('product');
    }

    
}