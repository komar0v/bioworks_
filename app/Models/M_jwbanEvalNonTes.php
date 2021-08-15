<?php

namespace App\Models;

use CodeIgniter\Model;

class M_jwbanEvalNonTes extends Model
{
    
    protected $table = 'jawaban_evaluasi_non_tes_tbl';
    protected $primaryKey = 'id_jawaban';

    protected $allowedFields = ['id_jawaban','id_evaluasi_non_tes','id_pertanyaan','id_murid','jawaban_skala'];
}