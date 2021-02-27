<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RecordModel;

class Calculator extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('calculator/rfm');
    }

    public function count()
    {
        helper(['form']);
        $session = session();
        $data = [
            'tinggi_badan'      => $this->request->getVar('tinggi_badan'),
            'lingkar_pinggang'  => $this->request->getVar('lingkar_pinggang'),
            'j_kelamin'         => $this->request->getVar('gender'),
            'hasil'             => 0,
            'keterangan'        => ''
        ];
        if ($session->get('logged_in') == 1){
            $data['j_kelamin'] = $session->get('gender');
        }

        if ($data['j_kelamin'] == 'P'){
            // perhitungan untuk pria
            // RFM = 64 – (20 x tinggi badan / lingkar pinggang).
            $data['hasil']  =  64 - (20 * $data['tinggi_badan'] / $data['lingkar_pinggang']);
        }else{
            // perhitungan untuk wanita
            // RFM = 76 – (20 x tinggi badan / lingkar pinggang).
            $data['hasil'] = 76 - (20 * $data['tinggi_badan'] / $data['lingkar_pinggang']);
        }
        
        //menganalisa keterangan
        switch($data['j_kelamin'])
        {
            case 'P' :
                    if ($data['hasil'] >= 25)
                    {
                        $data['keterangan'] = 'sudah tergolong obesitas.';
                    }
                    elseif ($data['hasil'] >= 18)
                    {
                        $data['keterangan'] = 'kamu biasa saja / normal.';
                    }
                    elseif ($data['hasil'] >= 14)
                    {
                        $data['keterangan'] = 'kamu bugar dan sering berolahraga.';
                    }
                    elseif ($data['hasil'] >= 6)
                    {
                        $data['keterangan'] = 'kamu pasti atlet olahraga.';
                    }
                    else
                    {
                        $data['keterangan'] = 'kamu memiliki essential fat.';
                    }
                    break;
            case 'W' :
                    if ($data['hasil'] >= 32)
                    {
                        $data['keterangan'] = 'sudah tergolong obesitas.';
                    }
                    elseif ($data['hasil'] >= 25)
                    {
                        $data['keterangan'] = 'kamu biasa saja / normal.';
                    }
                    elseif ($data['hasil'] >= 21)
                    {
                        $data['keterangan'] = 'kamu bugar dan sering berolahraga.';
                    }
                    elseif ($data['hasil'] >= 14)
                    {
                        $data['keterangan'] = 'kamu pasti atlet olahraga.';
                    }
                    else
                    {
                        $data['keterangan'] = 'kamu memiliki essential fat.';
                    }
                    break;
            default :
                    $data['keterangan'] = 'Tidak ada';
        }
        //menampilkan hasil
        return view('calculator/result', $data);
    }

    public function save($tb, $lp, $result){
        $session = session();
        $model = new RecordModel;
        // echo "hasil ".$result;
        // echo "hasil ".$tb;
        // echo "hasil ".$lp;
        if ($session->get('logged_in') == 1){
            $data = [
                'account_id'    => $session->get('account_id'),
                'tinggi'        => $tb,
                'pinggang'      => $lp,
                'hasil'         => $result
            ];
            $model->save($data);
            return redirect()->to('/dashboard/'.$session->get('account_id').'/record');
        }else{
            return redirect()->to('/login');
        }
    }
}