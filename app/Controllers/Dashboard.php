<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AccountModel;
use App\Models\RecordModel;
 
class Dashboard extends Controller
{
    public function index()
    {
        return view('account/dashboard');
    }

    public function record($id)
    {
        //pemanggilan model dan session
        $model = new RecordModel();
        $session = session();

        //pencarian data berdasarkan id pada database
		$data['record'] = $model->where('account_id', $id)->findAll();
        
        //pengecekan session terhadap request berdasarkan id
        if(!$data['record'] || $id != $session->get('account_id')){
			throw PageNotFoundException::forPageNotFound();
		}
        // kirim data ke view
		echo view('account/record', $data);
    }

    public function edit($id)
    {
        $account = new AccountModel();
        $session = session();
		$data['account'] = $account->where('account_id', $id)->first();
		
		if(!$data['account'] || $id != $session->get('account_id')){
			throw PageNotFoundException::forPageNotFound();
		}
        //var_dump($data['account']);
		return view('account/edit', $data);
    }

    public function update($id){
        //include helper form
        helper(['form']);
        $account = new AccountModel();
        //$data['account'] = $account->where('account_id',$id)->first();
        $rules = [
            'surename'      => 'required|min_length[3]|max_length[50]',
            'username'      => 'required|min_length[6]|max_length[25]',
            'confpassword'  => 'min_length[6]|max_length[100]',
        ];

        if ($this->request->getVar('confpassword') != ''){
            $data = [
                'surename'      => $this->request->getVar('surename'),
                'username'      => $this->request->getVar('username'),
                'userpwd'      => password_hash($this->request->getVar('confpassword'), PASSWORD_DEFAULT),
            ];
        }else{
            $data = [
                'surename'  => $this->request->getVar('surename'),
                'username'  => $this->request->getVar('username'),   
            ];
        }
        $account->update($id, $data);
        return redirect()->to('/login/logout');
    }
}