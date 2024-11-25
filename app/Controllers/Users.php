<?php
namespace App\Controllers;

class Users extends BaseController{
    public function index(){
        // Load the model
        $usersmodel = model('Users_model');

        // Retrieve the data from the table
        $data['users'] = $usersmodel->get()->getResult();
        // $this->dd($data['users']);

        $data['title'] = "List of Users";

        return view('include\header', $data)
            .view('include\navbar')
            .view('users_view', $data)
            .view('include\footer');
    }

    public function add(){
        if($this->request->is('POST')){
            // Load model
            $usersmodel = model('Users_model');

            // Retrieve data from form
            $registerdata = $this->request->getPost([
                'username',
                'password',
                'email',
                'fullname',
            ]);

            // Insert data to the table
            $usersmodel->insert($registerdata);

            // Redirect to the users list page
            return redirect()->to('users');
        }


        $data['title'] = "Register New User";

        return view('include\header', $data)
            .view('include\navbar')
            .view('registration_view')
            .view('include\footer');
    }

    public function view($id = 0){
        // Load the model
        $usersmodel = model('Users_model');

        // Retrieve the data from the table
        $data['user'] = $usersmodel->where('id', $id)->first();
        // $this->dd($data['users']);

        $data['title'] = "View User Account";

        return view('include\header', $data)
            .view('include\navbar')
            .view('user_view', $data)
            .view('include\footer');
    }

    public function edit($id = 0){
        $usersmodel = model('Users_model');

        if($this->request->is('POST')){
            // Retrieve data from form
            $updatedata = $this->request->getPost([
                'username',
                'password',
                'email',
                'fullname',
            ]);

            // Update data in the table
            $usersmodel->update($id, $updatedata);

            // Redirect to the users list page
            return redirect()->to('users');
        }

        // Retrieve the data from the table
        $data['user'] = $usersmodel->where('id', $id)->first();
        $data['title'] = "Edit User";

        return view('include\header', $data)
            .view('include\navbar')
            .view('edit_view', $data)
            .view('include\footer');
    }

    public function delete($id = 0){
        $usersmodel = model('Users_model');
        $usersmodel->delete($id);
        return redirect()->to('users');
    }
}

?>
