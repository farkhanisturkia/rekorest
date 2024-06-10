<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index() {
        $count = count(Training::get());
        $count_true = count(Training::where('is_recomended', true)->get());
        $count_false = count(Training::where('is_recomended', false)->get());

        $count_mpost = count(Training::where('kategori_m', 'positif')->where('is_recomended', true)->get());
        $count_mnett = count(Training::where('kategori_m', 'netral')->where('is_recomended', true)->get());
        $count_mnegt = count(Training::where('kategori_m', 'negatif')->where('is_recomended', true)->get());
        $count_mposf = count(Training::where('kategori_m', 'positif')->where('is_recomended', false)->get());
        $count_mnetf = count(Training::where('kategori_m', 'netral')->where('is_recomended', false)->get());
        $count_mnegf = count(Training::where('kategori_m', 'negatif')->where('is_recomended', false)->get());

        $count_ppost = count(Training::where('kategori_p', 'positif')->where('is_recomended', true)->get());
        $count_pnett = count(Training::where('kategori_p', 'netral')->where('is_recomended', true)->get());
        $count_pnegt = count(Training::where('kategori_p', 'negatif')->where('is_recomended', true)->get());
        $count_pposf = count(Training::where('kategori_p', 'positif')->where('is_recomended', false)->get());
        $count_pnetf = count(Training::where('kategori_p', 'netral')->where('is_recomended', false)->get());
        $count_pnegf = count(Training::where('kategori_p', 'negatif')->where('is_recomended', false)->get());

        $count_spost = count(Training::where('kategori_s', 'positif')->where('is_recomended', true)->get());
        $count_snett = count(Training::where('kategori_s', 'netral')->where('is_recomended', true)->get());
        $count_snegt = count(Training::where('kategori_s', 'negatif')->where('is_recomended', true)->get());
        $count_sposf = count(Training::where('kategori_s', 'positif')->where('is_recomended', false)->get());
        $count_snetf = count(Training::where('kategori_s', 'netral')->where('is_recomended', false)->get());
        $count_snegf = count(Training::where('kategori_s', 'negatif')->where('is_recomended', false)->get());

        return view('hasil.index', [
            'count'       => $count,
            'count_true'  => $count_true,
            'count_false' => $count_false,

            'count_mpost' => $count_mpost,
            'count_mnett' => $count_mnett,
            'count_mnegt' => $count_mnegt,
            'count_mposf' => $count_mposf,
            'count_mnetf' => $count_mnetf,
            'count_mnegf' => $count_mnegf,

            'count_ppost' => $count_ppost,
            'count_pnett' => $count_pnett,
            'count_pnegt' => $count_pnegt,
            'count_pposf' => $count_pposf,
            'count_pnetf' => $count_pnetf,
            'count_pnegf' => $count_pnegf,

            'count_spost' => $count_spost,
            'count_snett' => $count_snett,
            'count_snegt' => $count_snegt,
            'count_sposf' => $count_sposf,
            'count_snetf' => $count_snetf,
            'count_snegf' => $count_snegf,
        ]);
    }
}
