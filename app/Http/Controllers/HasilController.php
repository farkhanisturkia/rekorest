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
        $total_mt    = $count_mpost + $count_mnett + $count_mnegt;
        $p_total_mt  = $total_mt / $count_true;
        $total_mf    = $count_mposf + $count_mnetf + $count_mnegf;
        $p_total_mf  = $total_mf / $count_false;

        $count_ppost = count(Training::where('kategori_p', 'positif')->where('is_recomended', true)->get());
        $count_pnett = count(Training::where('kategori_p', 'netral')->where('is_recomended', true)->get());
        $count_pnegt = count(Training::where('kategori_p', 'negatif')->where('is_recomended', true)->get());
        $count_pposf = count(Training::where('kategori_p', 'positif')->where('is_recomended', false)->get());
        $count_pnetf = count(Training::where('kategori_p', 'netral')->where('is_recomended', false)->get());
        $count_pnegf = count(Training::where('kategori_p', 'negatif')->where('is_recomended', false)->get());
        $total_pt    = $count_ppost + $count_pnett + $count_pnegt;
        $p_total_pt  = $total_pt / $count_true;
        $total_pf    = $count_pposf + $count_pnetf + $count_pnegf;
        $p_total_pf  = $total_pf / $count_false;

        $count_spost = count(Training::where('kategori_s', 'positif')->where('is_recomended', true)->get());
        $count_snett = count(Training::where('kategori_s', 'netral')->where('is_recomended', true)->get());
        $count_snegt = count(Training::where('kategori_s', 'negatif')->where('is_recomended', true)->get());
        $count_sposf = count(Training::where('kategori_s', 'positif')->where('is_recomended', false)->get());
        $count_snetf = count(Training::where('kategori_s', 'netral')->where('is_recomended', false)->get());
        $count_snegf = count(Training::where('kategori_s', 'negatif')->where('is_recomended', false)->get());
        $total_st    = $count_spost + $count_snett + $count_snegt;
        $p_total_st  = $total_st / $count_true;
        $total_sf    = $count_sposf + $count_snetf + $count_snegf;
        $p_total_sf  = $total_sf / $count_false;

        $p_m_pos_t = $count_mpost / $count_true;
        $p_m_pos_f = $count_mposf / $count_false;
        $p_m_net_t = $count_mnett / $count_true;
        $p_m_net_f = $count_mnetf / $count_false;
        $p_m_neg_t = $count_mnegt / $count_true;
        $p_m_neg_f = $count_mnegf / $count_false;

        $p_p_pos_t = $count_ppost / $count_true;
        $p_p_pos_f = $count_pposf / $count_false;
        $p_p_net_t = $count_pnett / $count_true;
        $p_p_net_f = $count_pnetf / $count_false;
        $p_p_neg_t = $count_pnegt / $count_true;
        $p_p_neg_f = $count_pnegf / $count_false;

        $p_s_pos_t = $count_spost / $count_true;
        $p_s_pos_f = $count_sposf / $count_false;
        $p_s_net_t = $count_snett / $count_true;
        $p_s_net_f = $count_snetf / $count_false;
        $p_s_neg_t = $count_snegt / $count_true;
        $p_s_neg_f = $count_snegf / $count_false;

        $p_true    = $count_true / $count;
        $p_false   = $count_false / $count;
        $total     = $count_true + $count_false;
        $p_total   = $total / $count;

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
            'total_mt'    => $total_mt,
            'p_total_mt'  => $p_total_mt,
            'total_mf'    => $total_mf,
            'p_total_mf'  => $p_total_mf,

            'count_ppost' => $count_ppost,
            'count_pnett' => $count_pnett,
            'count_pnegt' => $count_pnegt,
            'count_pposf' => $count_pposf,
            'count_pnetf' => $count_pnetf,
            'count_pnegf' => $count_pnegf,
            'total_pt'    => $total_pt,
            'p_total_pt'  => $p_total_pt,
            'total_pf'    => $total_pf,
            'p_total_pf'  => $p_total_pf,

            'count_spost' => $count_spost,
            'count_snett' => $count_snett,
            'count_snegt' => $count_snegt,
            'count_sposf' => $count_sposf,
            'count_snetf' => $count_snetf,
            'count_snegf' => $count_snegf,
            'total_st'    => $total_st,
            'p_total_st'  => $p_total_st,
            'total_sf'    => $total_sf,
            'p_total_sf'  => $p_total_sf,

            'p_m_pos_t'   => $p_m_pos_t,
            'p_m_pos_f'   => $p_m_pos_f,
            'p_m_net_t'   => $p_m_net_t,
            'p_m_net_f'   => $p_m_net_f,
            'p_m_neg_t'   => $p_m_neg_t,
            'p_m_neg_f'   => $p_m_neg_f,

            'p_p_pos_t'   => $p_p_pos_t,
            'p_p_pos_f'   => $p_p_pos_f,
            'p_p_net_t'   => $p_p_net_t,
            'p_p_net_f'   => $p_p_net_f,
            'p_p_neg_t'   => $p_p_neg_t,
            'p_p_neg_f'   => $p_p_neg_f,

            'p_s_pos_t'   => $p_s_pos_t,
            'p_s_pos_f'   => $p_s_pos_f,
            'p_s_net_t'   => $p_s_net_t,
            'p_s_net_f'   => $p_s_net_f,
            'p_s_neg_t'   => $p_s_neg_t,
            'p_s_neg_f'   => $p_s_neg_f,

            'p_true'      => $p_true,
            'p_false'     => $p_false,
            'total'       => $total,
            'p_total'     => $p_total,
        ]);
    }
}
