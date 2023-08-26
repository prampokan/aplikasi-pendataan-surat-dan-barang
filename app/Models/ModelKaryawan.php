<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKaryawan extends Model
{
    protected $table      = 'karyawan';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['id', 'username', 'email'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // public function countTotalPengguna()
    // {
    //     return $this->countAll();
    // }
    public function countTotalKaryawan()
    {
        return $this->countAll();
    }
}
