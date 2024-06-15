<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profil;
use App\Tables\UserTable;
use App\Tables\AdminTable;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\Facades\Toast;

class ProfilController extends Controller
{
    public function index() {
        return view('profil.index', [
            'admins' => AdminTable::class,
            'users' => UserTable::class,
        ]);
    }

    public function create() {
        return view('profil.create');
    }

    public function store(Request $request) {
        User::create([
            'name'          => $request->name,
            'username'      => $request->username,
            'email'         => $request->email,
            'password'      => $request->password,
            'role'          => 'admin'
        ]);

        Toast::title('Data Profil Telah Dibuat')->autoDismiss(3);

        return to_route('profil.index');
    }

    public function edit(User $user) {
        return view('profil.edit', [
            'user'   => $user,
        ]);
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            'name'          => $request->name,
            'username'      => $request->username,
            'email'         => $request->email,
            'password'      => $request->password,
            'role'          => 'admin'
        ]);

        Toast::title('Data Telah Diubah')->warning()->autoDismiss(3);

        return to_route('profil.index');
    }

    public function destroy(User $user) {
        $user->delete();

        Toast::title('Data Profil Telah Dihapus')->danger()->autoDismiss(3);

        return to_route('profil.index');
    }
}
