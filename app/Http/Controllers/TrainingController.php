<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\Training;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;
use Phpml\Classification\NaiveBayes;
use ProtoneMedia\Splade\Facades\Toast;

class TrainingController extends Controller
{
    public function index() {
        return view('training.index', [
            'trainings' => SpladeTable::for(Training::class)
                ->column('id', sortable: true)
                ->column('profil.name')
                ->column('resto_name', sortable: true)
                ->column('tanggapan_m', label:'Tanggapan Makanan')
                ->column('kategori_m', label:'Kategori Makanan')
                ->column('tanggapan_p', label:'Tanggapan Pelayanan')
                ->column('kategori_p', label:'Kategori Pelayanan')
                ->column('tanggapan_s', label:'Tanggapan Suasana')
                ->column('kategori_s', label:'Kategori Suasana')
                ->column('alamat', label:'Alamat')
                ->column('jtu', label:'JTU')
                ->column('jhp', label:'JHP')
                ->column('jpk', label:'JPK')
                ->column('actions')
                ->defaultSort('id', 'desc')
                ->paginate(15),
        ]);
    }

    public function create() {

        $profil = Profil::get();

        return view('training.create', [
            'profils' => $profil
        ]);
    }

    public function store(Request $request) {

        $training = Training::get();

        $samples = [];
        $labels = [];

        foreach ($training as $data) {

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

            $samples[] = [$score_m, $score_p, $score_s];
            $labels[] = $data->is_recomended;
        }

        $classifier = new NaiveBayes();
        $classifier->train($samples, $labels);

        switch ($request->kategori_m) {
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

        switch ($request->kategori_p) {
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

        switch ($request->kategori_s) {
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

        $predictions = $classifier->predict([$score_m, $score_p, $score_s]);

        Training::create([
            'profil_id'    => $request->profil_id,
            'is_recomended'=> $predictions,
            'resto_name'   => $request->resto_name,
            'tanggapan_m'  => $request->tanggapan_m,
            'tanggapan_p'  => $request->tanggapan_p,
            'tanggapan_s'  => $request->tanggapan_s,
            'kategori_m'   => $request->kategori_m,
            'kategori_p'   => $request->kategori_p,
            'kategori_s'   => $request->kategori_s,
            'alamat'       => $request->alamat,
            'jtu'          => $request->jtu,
            'jhp'          => $request->jhp,
            'jpk'          => $request->jpk
        ]);

        Toast::title('Data Profil Telah Dibuat')->autoDismiss(3);

        return to_route('training.index');
    }

    public function edit(Training $training) {

        $profil = Profil::get();

        return view('training.edit', [
            'training'   => $training,
            'profils' => $profil
        ]);
    }

    public function update(Request $request, Training $training) {

        $datas = Training::get();

        $samples = [];
        $labels = [];

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

            $samples[] = [$score_m, $score_p, $score_s];
            $labels[] = $data->is_recomended;
        }

        $classifier = new NaiveBayes();
        $classifier->train($samples, $labels);

        switch ($request->kategori_m) {
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

        switch ($request->kategori_p) {
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

        switch ($request->kategori_s) {
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

        $predictions = $classifier->predict([$score_m, $score_p, $score_s]);

        $training->update([
            'profil_id'    => $request->profil_id,
            'is_recomended'=> $predictions,
            'resto_name'   => $request->resto_name,
            'tanggapan_m'  => $request->tanggapan_m,
            'tanggapan_p'  => $request->tanggapan_p,
            'tanggapan_s'  => $request->tanggapan_s,
            'kategori_m'   => $request->kategori_m,
            'kategori_p'   => $request->kategori_p,
            'kategori_s'   => $request->kategori_s,
            'alamat'       => $request->alamat,
            'jtu'          => $request->jtu,
            'jhp'          => $request->jhp,
            'jpk'          => $request->jpk
        ]);

        Toast::title('Data Telah Diubah')->warning()->autoDismiss(3);

        return to_route('training.index');
    }

    public function destroy(Training $training) {
        $training->delete();

        Toast::title('Data Training Telah Dihapus')->danger()->autoDismiss(3);

        return to_route('training.index');
    }
}
