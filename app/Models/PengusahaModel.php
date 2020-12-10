<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PengusahaModel extends Model
{
    public function allData()
    {
        return DB::table('pengusaha')->get();
    }

    public function detailData($id_pengusaha)
    {
        return DB::table('pengusaha')->where('id_pengusaha', $id_pengusaha)->first();
    }
}
