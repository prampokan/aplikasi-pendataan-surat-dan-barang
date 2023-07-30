<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBarang extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['id', 'no_resi', 'nm_barang', 'id_penerima', 'status', 'catatan', 'foto1', 'foto2', 'foto3'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
}
