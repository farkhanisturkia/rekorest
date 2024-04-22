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
                    <x-splade-form action="{{ route('training.update', $training) }}"  :default="$training" method="put">
                        <x-splade-select class="mb-4" name="profil_id" label="Nama Profil" required>
                            @foreach ($profils as $profil)
                                <option value="{{ $profil->id }}">{{ $profil->name }}</option>
                            @endforeach
                        </x-splade-select>
                        <x-splade-input class="mb-4" id="resto_name" name="resto_name" label="Nama Restaurant" required />
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
                        <x-splade-submit label="Tambahkan" />
                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>