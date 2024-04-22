<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\Facades\Toast;

class ProfilController extends Controller
{
    public function index() {
        return view('profil.index', [
            'profils' => SpladeTable::for(Profil::class)
                ->column('id')
                ->column('name')
                ->column('username')
                ->column('actions')
                ->paginate(15),
        ]);
    }

    public function create() {
        return view('profil.create');
    }

    public function store(Request $request) {
        Profil::create([
            'name'  => $request->name,
            'username'  => $request->username,
        ]);

        Toast::title('Data Profil Telah Dibuat')->autoDismiss(3);

        return to_route('profil.index');
    }

    public function edit(Profil $profil) {
        return view('profil.edit', [
            'profil'   => $profil,
        ]);
    }

    public function update(Request $request, Profil $profil)
    {
        $profil->update([
            'name'          => $request->name,
            'username'      => $request->username,
        ]);

        Toast::title('Data Telah Diubah')->warning()->autoDismiss(3);

        return to_route('profil.index');
    }

    public function destroy(Profil $profil) {
        $profil->delete();

        Toast::title('Data Profil Telah Dihapus')->danger()->autoDismiss(3);

        return to_route('profil.index');
    }
}
