<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Training') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-splade-form action="{{ route('training.update', $training) }}" :default="$training" method="put">
                        <x-splade-input class="mb-4" id="pengulas" name="pengulas" label="Nama Pengulas" required />
                        <x-splade-select class="mb-4" name="resto_name" label="Nama Restaurant" required>
                            <option value="Nua Indah Coffee & Resto">Nua Indah Coffee & Resto</option>
                            <option value="Restaurant Wisata">Restaurant Wisata</option>
                            <option value="Ampupu Beach Resort">Ampupu Beach Resort</option>
                            <option value="RM Reza Pasera">RM Reza Pasera</option>
                            <option value="Laroka Hotel & Resto">Laroka Hotel & Resto</option>
                            <option value="RM Pasundan Binongko Wakatobi">RM Pasundan Binongko Wakatobi</option>
                        </x-splade-select>
                        <x-splade-input class="mb-4" id="tanggapan_m" name="tanggapan_m" label="tanggapan makanan" required />
                        <x-splade-select class="mb-4" name="kategori_m" label="Kategori makanan" required>
                            <option value="positif">Positif</option>
                            <option value="netral">Netral</option>
                            <option value="negatif">Negatif</option>
                        </x-splade-select>
                        <x-splade-input class="mb-4" id="tanggapan_p" name="tanggapan_p" label="tanggapan pelayanan" required />
                        <x-splade-select class="mb-4" name="kategori_p" label="Kategori makanan" required>
                            <option value="positif">Positif</option>
                            <option value="netral">Netral</option>
                            <option value="negatif">Negatif</option>
                        </x-splade-select>
                        <x-splade-input class="mb-4" id="tanggapan_s" name="tanggapan_s" label="tanggapan suasanan" required />
                        <x-splade-select class="mb-4" name="kategori_s" label="Kategori makanan" required>
                            <option value="positif">Positif</option>
                            <option value="netral">Netral</option>
                            <option value="negatif">Negatif</option>
                        </x-splade-select>
                        <x-splade-input class="mb-4" id="alamat" name="alamat" label="alamat" required />
                        <x-splade-input class="mb-4" id="jtu" name="jtu" label="jarak dari transportasi umum (KM)" required />
                        <x-splade-input class="mb-4" id="jhp" name="jhp" label="jarak dari hotel/penginapan (KM)" required />
                        <x-splade-input class="mb-4" id="jpk" name="jpk" label="jarak dari pusat kota (KM)" required />
                        <x-splade-file class="mb-3" id="path" name="path" label="Image" min-size="10KB" max-size="5MB" filepond preview required />
                        <x-splade-submit label="Tambahkan" />
                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>