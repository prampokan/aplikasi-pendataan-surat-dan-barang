<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBarang extends Model
{

    public function getBarangWithKaryawan()
    {
        return $this->db->table('barang')
            ->select('barang.*, karyawan.username AS nama_penerima, karyawan.email AS email_penerima')
            ->join('karyawan', 'barang.id_penerima = karyawan.id', 'left')
            ->get()
            ->getResultArray();
    }

    public function getBarangWithKaryawanById($id)
    {
        return $this->db->table('barang')
            ->select('barang.*, karyawan.username AS nama_penerima, karyawan.email AS email_penerima')
            ->join('karyawan', 'barang.id_penerima = karyawan.id', 'left')
            ->where('barang.id', $id)
            ->get()
            ->getRowArray();
    }

    protected $table      = 'barang';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['id', 'no_resi', 'nm_barang', 'id_penerima', 'nama_penerima', 'email_penerima', 'status', 'catatan', 'foto1', 'foto2', 'foto3'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;

    public function countTotalBarang()
    {
        return $this->countAll();
    }
}
