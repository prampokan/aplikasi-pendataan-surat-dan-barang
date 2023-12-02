<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSurat extends Model
{
    public function getSuratWithKaryawan()
    {
        return $this->db->table('surat')
            ->select('surat.*, karyawan.username AS nama_penerima, karyawan.email AS email_penerima')
            ->orderBy('surat.id', 'desc')
            ->join('karyawan', 'surat.id_penerima = karyawan.id', 'left')
            ->get()
            ->getResultArray();
    }

    public function getSuratWithKaryawanById($id)
    {
        return $this->db->table('surat')
            ->select('surat.*, karyawan.username AS nama_penerima, karyawan.email AS email_penerima')
            ->join('karyawan', 'surat.id_penerima = karyawan.id', 'left')
            ->where('surat.id', $id)
            ->get()
            ->getRowArray();
    }
    protected $table      = 'surat';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['id', 'no_surat', 'pengirim', 'nm_surat', 'id_penerima', 'status', 'catatan', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5', 'waktu'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    public function countTotalSurat()
    {
        return $this->countAll();
    }
}
