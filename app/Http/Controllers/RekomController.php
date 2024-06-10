<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;
use Phpml\Classification\NaiveBayes;

class RekomController extends Controller
{
    public function index() {

        $datas = Training::where('is_recomended', true)->where('is_testing', true)->get();

        $recommendations = [];
        foreach ($datas as $data) {

            switch ($data->kategori_m) {
                case 'positif':
                    $score_m = 3;
                    break;
                case 'netral':
                    $score_m = 2;
                    break;
                case 'negatif':
                    $score_m = 1;
                    break;
            }

            switch ($data->kategori_p) {
                case 'positif':
                    $score_p = 3;
                    break;
                case 'netral':
                    $score_p = 2;
                    break;
                case 'negatif':
                    $score_p = 1;
                    break;
            }

            switch ($data->kategori_s) {
                case 'positif':
                    $score_s = 3;
                    break;
                case 'netral':
                    $score_s = 2;
                    break;
                case 'negatif':
                    $score_s = 1;
                    break;
            }

            $prediction = $score_m + $score_p + $score_s;

            $recommendations[$data->resto_name] = [
                'score'     =>$prediction,
                'score_m'   =>$score_m,
                'score_p'   =>$score_p,
                'score_s'   =>$score_s,
                'kategori_m'=>$data->kategori_m,
                'kategori_p'=>$data->kategori_p,
                'kategori_s'=>$data->kategori_s,
                'alamat'    =>$data->alamat,
                'jtu'       =>$data->jtu,
                'jhp'       =>$data->jhp,
                'jpk'       =>$data->jpk
            ];
        }
        arsort($recommendations);

        $topRecommendations = array_slice($recommendations, 0, 100);

        return view('rekom.index',[
            'rekomendasi'   => $topRecommendations
        ]);
    }
}
