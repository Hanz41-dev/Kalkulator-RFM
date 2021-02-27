<?php namespace App\Models;
use CodeIgniter\Model;
class AccountModel extends Model{
    protected $table = 'account';
    protected $primaryKey   = 'account_id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['username','userpwd','surename','gender','account_created_at'];
}