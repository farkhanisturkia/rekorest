<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Tables\TestingTable;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class TestingController extends Controller
{
    public function index() {
        return view('testing.index', [
            'trainings' => TestingTable::class
        ]);
    }

    public function create() {
        return view('testing.create', [
            'trainings' => Training::where('is_testing', false)->where('is_dataset', false)->get()
        ]);
    }

    public function store(Request $request) {

        $training = Training::where('id', $request->training_id)->first();

        $training->update([
            'is_testing' => true
        ]);

        Toast::title('Data Testing Telah Dibuat')->autoDismiss(3);

        return to_route('testing.index');
    }

    public function destroy($id) {

        $training = Training::find($id);
        
        $training->update([
            'is_testing' => false
        ]);

        Toast::title('Data Testing Telah Dihapus')->danger()->autoDismiss(3);

        return to_route('testing.index');
    }
}
