<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AccountModel;
 
class Register extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }
 
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'username'      => 'required|min_length[6]|max_length[25]',
            'password'      => 'required|min_length[6]|max_length[100]',
            'surename'      => 'required|min_length[3]|max_length[50]',
            'gender'        => 'required',
            'confpassword'  => 'matches[password]'
        ];
         
        if($this->validate($rules)){
            $model = new AccountModel();
            $data = [
                'surename'  => $this->request->getVar('surename'),
                'username'  => $this->request->getVar('username'),
                'userpwd'   => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'gender'    => $this->request->getVar('gender')
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
         
    }
 
}