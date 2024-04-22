<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\Training;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\Facades\Toast;

class TrainingController extends Controller
{
    public function index() {
        return view('training.index', [
            'trainings' => SpladeTable::for(Training::class)
                ->column('id')
                ->column('profil.name')
                ->column('resto_name')
                ->column('tanggapan_m', label:'Tanggapan Makanan')
                ->column('kategori_m', label:'Kategori Makanan')
                ->column('tanggapan_p', label:'Tanggapan Pelayanan')
                ->column('kategori_p', label:'Kategori Pelayanan')
                ->column('tanggapan_s', label:'Tanggapan Suasana')
                ->column('kategori_s', label:'Kategori Suasana')
                ->column('actions')
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

        // dd($request->all());
        Training::create([
            'profil_id'    => $request->profil_id,
            'resto_name'   => $request->resto_name,
            'tanggapan_m'  => $request->tanggapan_m,
            'tanggapan_p'  => $request->tanggapan_p,
            'tanggapan_s'  => $request->tanggapan_s,
            'kategori_m'  => $request->kategori_m,
            'kategori_p'  => $request->kategori_p,
            'kategori_s'  => $request->kategori_s,
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

    public function update(Request $request, Training $training)
    {
        $training->update([
            'profil_id'    => $request->profil_id,
            'resto_name'   => $request->resto_name,
            'tanggapan_m'  => $request->tanggapan_m,
            'tanggapan_p'  => $request->tanggapan_p,
            'tanggapan_s'  => $request->tanggapan_s,
            'kategori_m'   => $request->kategori_m,
            'kategori_p'   => $request->kategori_p,
            'kategori_s'   => $request->kategori_s,
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
