<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;

class HasilController extends Controller
{
    public function index() {
        return view('hasil.index', [
            'trainings' => SpladeTable::for(Training::where('is_dataset', false))
                ->column('pengulas')
                ->column('resto_name', sortable: true)
                ->column('actions')
                ->paginate(15),
        ]);
    }

    public function detail($id) {
        
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

        $pppt      = $p_m_pos_t * $p_p_pos_t * $p_s_pos_t * $p_true;
        $ppnt      = $p_m_pos_t * $p_p_pos_t * $p_s_net_t * $p_true;
        $ppnegt      = $p_m_pos_t * $p_p_pos_t * $p_s_neg_t * $p_true;
        $pnpt      = $p_m_pos_t * $p_p_net_t * $p_s_pos_t * $p_true;
        $pnnt      = $p_m_pos_t * $p_p_net_t * $p_s_net_t * $p_true;
        $pnnegt      = $p_m_pos_t * $p_p_net_t * $p_s_neg_t * $p_true;
        $pnegpt      = $p_m_pos_t * $p_p_neg_t * $p_s_pos_t * $p_true;
        $pnegnt      = $p_m_pos_t * $p_p_neg_t * $p_s_net_t * $p_true;
        $pnegnegt      = $p_m_pos_t * $p_p_neg_t * $p_s_neg_t * $p_true;

        $nppt      = $p_m_net_t * $p_p_pos_t * $p_s_pos_t * $p_true;
        $npnt      = $p_m_net_t * $p_p_pos_t * $p_s_net_t * $p_true;
        $npnegt      = $p_m_net_t * $p_p_pos_t * $p_s_neg_t * $p_true;
        $nnpt      = $p_m_net_t * $p_p_net_t * $p_s_pos_t * $p_true;
        $nnnt      = $p_m_net_t * $p_p_net_t * $p_s_net_t * $p_true;
        $nnnegt      = $p_m_net_t * $p_p_net_t * $p_s_neg_t * $p_true;
        $nnegpt      = $p_m_net_t * $p_p_neg_t * $p_s_pos_t * $p_true;
        $nnegnt      = $p_m_net_t * $p_p_neg_t * $p_s_net_t * $p_true;
        $nnegnegt      = $p_m_net_t * $p_p_neg_t * $p_s_neg_t * $p_true;

        $negppt      = $p_m_neg_t * $p_p_pos_t * $p_s_pos_t * $p_true;
        $negpnt      = $p_m_neg_t * $p_p_pos_t * $p_s_net_t * $p_true;
        $negpnegt      = $p_m_neg_t * $p_p_pos_t * $p_s_neg_t * $p_true;
        $negnpt      = $p_m_neg_t * $p_p_net_t * $p_s_pos_t * $p_true;
        $negnnt      = $p_m_neg_t * $p_p_net_t * $p_s_net_t * $p_true;
        $negnnegt      = $p_m_neg_t * $p_p_net_t * $p_s_neg_t * $p_true;
        $negnegpt      = $p_m_neg_t * $p_p_neg_t * $p_s_pos_t * $p_true;
        $negnegnt      = $p_m_neg_t * $p_p_neg_t * $p_s_net_t * $p_true;
        $negnegnegt      = $p_m_neg_t * $p_p_neg_t * $p_s_neg_t * $p_true;

        $pppf      = $p_m_pos_f * $p_p_pos_f * $p_s_pos_f * $p_false;
        $ppnf      = $p_m_pos_f * $p_p_pos_f * $p_s_net_f * $p_false;
        $ppnegf      = $p_m_pos_f * $p_p_pos_f * $p_s_neg_f * $p_false;
        $pnpf      = $p_m_pos_f * $p_p_net_f * $p_s_pos_f * $p_false;
        $pnnf      = $p_m_pos_f * $p_p_net_f * $p_s_net_f * $p_false;
        $pnnegf      = $p_m_pos_f * $p_p_net_f * $p_s_neg_f * $p_false;
        $pnegpf      = $p_m_pos_f * $p_p_neg_f * $p_s_pos_f * $p_false;
        $pnegnf      = $p_m_pos_f * $p_p_neg_f * $p_s_net_f * $p_false;
        $pnegnegf      = $p_m_pos_f * $p_p_neg_f * $p_s_neg_f * $p_false;

        $nppf      = $p_m_net_f * $p_p_pos_f * $p_s_pos_f * $p_false;
        $npnf      = $p_m_net_f * $p_p_pos_f * $p_s_net_f * $p_false;
        $npnegf      = $p_m_net_f * $p_p_pos_f * $p_s_neg_f * $p_false;
        $nnpf      = $p_m_net_f * $p_p_net_f * $p_s_pos_f * $p_false;
        $nnnf      = $p_m_net_f * $p_p_net_f * $p_s_net_f * $p_false;
        $nnnegf      = $p_m_net_f * $p_p_net_f * $p_s_neg_f * $p_false;
        $nnegpf      = $p_m_net_f * $p_p_neg_f * $p_s_pos_f * $p_false;
        $nnegnf      = $p_m_net_f * $p_p_neg_f * $p_s_net_f * $p_false;
        $nnegnegf      = $p_m_net_f * $p_p_neg_f * $p_s_neg_f * $p_false;

        $negppf      = $p_m_neg_f * $p_p_pos_f * $p_s_pos_f * $p_false;
        $negpnf      = $p_m_neg_f * $p_p_pos_f * $p_s_net_f * $p_false;
        $negpnegf      = $p_m_neg_f * $p_p_pos_f * $p_s_neg_f * $p_false;
        $negnpf      = $p_m_neg_f * $p_p_net_f * $p_s_pos_f * $p_false;
        $negnnf      = $p_m_neg_f * $p_p_net_f * $p_s_net_f * $p_false;
        $negnnegf      = $p_m_neg_f * $p_p_net_f * $p_s_neg_f * $p_false;
        $negnegpf      = $p_m_neg_f * $p_p_neg_f * $p_s_pos_f * $p_false;
        $negnegnf      = $p_m_neg_f * $p_p_neg_f * $p_s_net_f * $p_false;
        $negnegnegf      = $p_m_neg_f * $p_p_neg_f * $p_s_neg_f * $p_false;

        $p_pppt      = $pppt / ($pppt + $pppf);
        $p_ppnt      = $ppnt / ($ppnt + $ppnf);
        $p_ppnegt      = $ppnegt / ($ppnegt + $ppnegf);
        $p_pnpt      = $pnpt / ($pnpt + $pnpf);
        $p_pnnt      = $pnnt / ($pnnt + $pnnf);
        $p_pnnegt      = $pnnegt / ($pnnegt + $pnnegf);
        $p_pnegpt      = $pnegpt / ($pnegpt + $pnegpf);
        $p_pnegnt      = $pnegnt / ($pnegnt + $pnegnf);
        $p_pnegnegt      = $pnegnegt / ($pnegnegt + $pnegnegf);

        $p_nppt      = $nppt / ($nppt + $nppf);
        $p_npnt      = $npnt / ($npnt + $npnf);
        $p_npnegt      = $npnegt / ($npnegt + $npnegf);
        $p_nnpt      = $nnpt / ($nnpt + $nnpf);
        $p_nnnt      = $nnnt / ($nnnt + $nnnf);
        $p_nnnegt      = $nnnegt / ($nnnegt + $nnnegf);
        $p_nnegpt      = $nnegpt / ($nnegpt + $nnegpf);
        $p_nnegnt      = $nnegnt / ($nnegnt + $nnegnf);
        $p_nnegnegt      = $nnegnegt / ($nnegnegt + $nnegnegf);

        $p_negppt      = $negppt / ($negppt + $negppf);
        $p_negpnt      = $negpnt / ($negpnt + $negpnf);
        $p_negpnegt      = $negpnegt / ($negpnegt + $negpnegf);
        $p_negnpt      = $negnpt / ($negnpt + $negnpf);
        $p_negnnt      = $negnnt / ($negnnt + $negnnf);
        $p_negnnegt      = $negnnegt / ($negnnegt + $negnnegf);
        $p_negnegpt      = $negnegpt / ($negnegpt + $negnegpf);
        $p_negnegnt      = $negnegnt / ($negnegnt + $negnegnf);
        $p_negnegnegt      = $negnegnegt / ($negnegnegt + $negnegnegf);

        $p_pppf      = $pppf / ($pppt + $pppf);
        $p_ppnf      = $ppnf / ($ppnt + $ppnf);
        $p_ppnegf      = $ppnegf / ($ppnegt + $ppnegf);
        $p_pnpf      = $pnpf / ($pnpt + $pnpf);
        $p_pnnf      = $pnnf / ($pnnt + $pnnf);
        $p_pnnegf      = $pnnegf / ($pnnegt + $pnnegf);
        $p_pnegpf      = $pnegpf / ($pnegpt + $pnegpf);
        $p_pnegnf      = $pnegnf / ($pnegnt + $pnegnf);
        $p_pnegnegf      = $pnegnegf / ($pnegnegt + $pnegnegf);

        $p_nppf      = $nppf / ($nppt + $nppf);
        $p_npnf      = $npnf / ($npnt + $npnf);
        $p_npnegf      = $npnegf / ($npnegt + $npnegf);
        $p_nnpf      = $nnpf / ($nnpt + $nnpf);
        $p_nnnf      = $nnnf / ($nnnt + $nnnf);
        $p_nnnegf      = $nnnegf / ($nnnegt + $nnnegf);
        $p_nnegpf      = $nnegpf / ($nnegpt + $nnegpf);
        $p_nnegnf      = $nnegnf / ($nnegnt + $nnegnf);
        $p_nnegnegf      = $nnegnegf / ($nnegnegt + $nnegnegf);

        $p_negppf      = $negppf / ($negppt + $negppf);
        $p_negpnf      = $negpnf / ($negpnt + $negpnf);
        $p_negpnegf      = $negpnegf / ($negpnegt + $negpnegf);
        $p_negnpf      = $negnpf / ($negnpt + $negnpf);
        $p_negnnf      = $negnnf / ($negnnt + $negnnf);
        $p_negnnegf      = $negnnegf / ($negnnegt + $negnnegf);
        $p_negnegpf      = $negnegpf / ($negnegpt + $negnegpf);
        $p_negnegnf      = $negnegnf / ($negnegnt + $negnegnf);
        $p_negnegnegf      = $negnegnegf / ($negnegnegt + $negnegnegf);

        $choice = Training::where('id', $id)->first();
        $match = Training::where('id', '!=', $id)
                ->where('kategori_m', $choice->kategori_m)
                ->where('kategori_p', $choice->kategori_p)
                ->where('kategori_s', $choice->kategori_s)
                ->get();

        return view('hasil.detail', [
            'trainings' => SpladeTable::for(Training::class)
                ->column('resto_name', sortable: true)
                ->column('kategori_m', label:'Kategori Makanan')
                ->column('kategori_p', label:'Kategori Pelayanan')
                ->column('kategori_s', label:'Kategori Suasana')
                ->column('is_recomended', label:'Rekomended')
                ->paginate(3),

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

            'choice'      => $choice,

            'pppt'        => $pppt,
            'ppnt'        => $ppnt,
            'ppnegt'        => $ppnegt,
            'pnpt'        => $pnpt,
            'pnnt'        => $pnnt,
            'pnnegt'        => $pnnegt,
            'pnegpt'        => $pnegpt,
            'pnegnt'        => $pnegnt,
            'pnegnegt'        => $pnegnegt,

            'nppt'        => $nppt,
            'npnt'        => $npnt,
            'npnegt'        => $npnegt,
            'nnpt'        => $nnpt,
            'nnnt'        => $nnnt,
            'nnnegt'        => $nnnegt,
            'nnegpt'        => $nnegpt,
            'nnegnt'        => $nnegnt,
            'nnegnegt'        => $nnegnegt,

            'negppt'        => $negppt,
            'negpnt'        => $negpnt,
            'negpnegt'        => $negpnegt,
            'negnpt'        => $negnpt,
            'negnnt'        => $negnnt,
            'negnnegt'        => $negnnegt,
            'negnegpt'        => $negnegpt,
            'negnegnt'        => $negnegnt,
            'negnegnegt'        => $negnegnegt,

            'pppf'        => $pppf,
            'ppnf'        => $ppnf,
            'ppnegf'        => $ppnegf,
            'pnpf'        => $pnpf,
            'pnnf'        => $pnnf,
            'pnnegf'        => $pnnegf,
            'pnegpf'        => $pnegpf,
            'pnegnf'        => $pnegnf,
            'pnegnegf'        => $pnegnegf,

            'nppf'        => $nppf,
            'npnf'        => $npnf,
            'npnegf'        => $npnegf,
            'nnpf'        => $nnpf,
            'nnnf'        => $nnnf,
            'nnnegf'        => $nnnegf,
            'nnegpf'        => $nnegpf,
            'nnegnf'        => $nnegnf,
            'nnegnegf'        => $nnegnegf,

            'negppf'        => $negppf,
            'negpnf'        => $negpnf,
            'negpnegf'        => $negpnegf,
            'negnpf'        => $negnpf,
            'negnnf'        => $negnnf,
            'negnnegf'        => $negnnegf,
            'negnegpf'        => $negnegpf,
            'negnegnf'        => $negnegnf,
            'negnegnegf'        => $negnegnegf,

            'p_pppt'        => $p_pppt,
            'p_ppnt'        => $p_ppnt,
            'p_ppnegt'        => $p_ppnegt,
            'p_pnpt'        => $p_pnpt,
            'p_pnnt'        => $p_pnnt,
            'p_pnnegt'        => $p_pnnegt,
            'p_pnegpt'        => $p_pnegpt,
            'p_pnegnt'        => $p_pnegnt,
            'p_pnegnegt'        => $p_pnegnegt,

            'p_nppt'        => $p_nppt,
            'p_npnt'        => $p_npnt,
            'p_npnegt'        => $p_npnegt,
            'p_nnpt'        => $p_nnpt,
            'p_nnnt'        => $p_nnnt,
            'p_nnnegt'        => $p_nnnegt,
            'p_nnegpt'        => $p_nnegpt,
            'p_nnegnt'        => $p_nnegnt,
            'p_nnegnegt'        => $p_nnegnegt,

            'p_negppt'        => $p_negppt,
            'p_negpnt'        => $p_negpnt,
            'p_negpnegt'        => $p_negpnegt,
            'p_negnpt'        => $p_negnpt,
            'p_negnnt'        => $p_negnnt,
            'p_negnnegt'        => $p_negnnegt,
            'p_negnegpt'        => $p_negnegpt,
            'p_negnegnt'        => $p_negnegnt,
            'p_negnegnegt'        => $p_negnegnegt,

            'p_pppf'        => $p_pppf,
            'p_ppnf'        => $p_ppnf,
            'p_ppnegf'        => $p_ppnegf,
            'p_pnpf'        => $p_pnpf,
            'p_pnnf'        => $p_pnnf,
            'p_pnnegf'        => $p_pnnegf,
            'p_pnegpf'        => $p_pnegpf,
            'p_pnegnf'        => $p_pnegnf,
            'p_pnegnegf'        => $p_pnegnegf,

            'p_nppf'        => $p_nppf,
            'p_npnf'        => $p_npnf,
            'p_npnegf'        => $p_npnegf,
            'p_nnpf'        => $p_nnpf,
            'p_nnnf'        => $p_nnnf,
            'p_nnnegf'        => $p_nnnegf,
            'p_nnegpf'        => $p_nnegpf,
            'p_nnegnf'        => $p_nnegnf,
            'p_nnegnegf'        => $p_nnegnegf,

            'p_negppf'        => $p_negppf,
            'p_negpnf'        => $p_negpnf,
            'p_negpnegf'        => $p_negpnegf,
            'p_negnpf'        => $p_negnpf,
            'p_negnnf'        => $p_negnnf,
            'p_negnnegf'        => $p_negnnegf,
            'p_negnegpf'        => $p_negnegpf,
            'p_negnegnf'        => $p_negnegnf,
            'p_negnegnegf'        => $p_negnegnegf,

            'matchs' => SpladeTable::for($match)
                ->column('resto_name', sortable: true)
                ->column('kategori_m', label:'Kategori Makanan')
                ->column('kategori_p', label:'Kategori Pelayanan')
                ->column('kategori_s', label:'Kategori Suasana')
                ->column('is_recomended', label:'Rekomended'),
        ]);
    }
}
