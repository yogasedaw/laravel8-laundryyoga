<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengusahaModel;


class PengusahaController extends Controller
{

    public function __construct()
    {
        $this->PengusahaModel = new PengusahaModel();
    }

    public function index()
    {
        $data = [
            'pengusaha' => $this->PengusahaModel->allData(),
        ];
        return view('v_pengusaha', $data);
    }

    public function detail($id_pengusaha)
    {
        if (!$this->PengusahaModel->detailData($id_pengusaha)) {
            abort(404);
        }
        $data = [
            'pengusaha' => $this->PengusahaModel->detailData($id_pengusaha),
        ];
        return view('v_detpeng', $data);
    }
}
