<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AccountModel;
 
class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    } 
 
    public function auth()
    {
        $session = session();
        $model = new AccountModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        if($data){
            $pass = $data['userpwd'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'account_id'    => $data['account_id'],
                    'username'      => $data['username'],
                    'surename'      => $data['surename'],
                    'gender'        => $data['gender'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'User not Found');
            return redirect()->to('/login');
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
} 