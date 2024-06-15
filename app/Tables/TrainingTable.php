<?php

namespace App\Tables;

use App\Models\Training;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\AbstractTable;

class TrainingTable extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return Training::query()->where('is_dataset', false);
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            ->column('id', sortable: true)
            ->column('pengulas')
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
            ->paginate(15);
    }
}
