<?php namespace App\Models;
use CodeIgniter\Model;
class RecordModel extends Model{
    protected $table = 'record';
    protected $primaryKey   = 'record_id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['account_id','tanggal','tinggi','pinggang','hasil'];
}