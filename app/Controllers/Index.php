<?php

// Set the path
namespace App\Controllers;

class Index extends BaseController{
    public function index(){
        $data['title'] = "Welcome my Blog";

        return view('include\header', $data)
            .view('include\navbar')
            .view('index_view')
            .view('include\footer');
    }

    public function about(){
        $data['title'] = "About This Page";

        return view('include\header', $data)
            .view('include\navbar')
            .view('about_view')
            .view('include\footer');
    }

    public function login(){
        // Check if submit button is clicked
        if($this->request->is('POST')){
            // Load model
            $usersmodel = model('Users_model');
            // Retrieve data from form
            $logindata = $this->request->getPost(['username', 'password']);
            // Set filter then query from tblusers
            $user  = $usersmodel->where('username', $logindata['username'])
                ->where('password', $logindata['password'])
                ->first();
            if(!$user){ // If there is no user found with the credentials
                // Code when user is not found
            }else{
                // Redirects to home page if log in was successful
                return redirect()->to('index');
            }
        }

        $data['title'] = "Log In";

        return view('include\header', $data)
            .view('include\navbar')
            .view('login_view')
            .view('include\footer');
    }

    public function dd($data){
        echo "<pre>";
        echo print_r($data);
        echo "</pre>";
        die();
    }
}

?>