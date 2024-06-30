<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($training as $training)    
                        <header class="header" style="background-image: url('{{ asset($training->path) }}')">
                            <div class="container">
                                <h1>{{ $training->resto_name }}</h1>
                                <p>{{ $training->alamat }}</p>
                            </div>
                        </header>
                        <div class=" mt-5 d-flex justify-between flex-wrap gap-5">
                            <table style="border-collapse: collapse; width: 100%;">
                                <thead>
                                    <tr class="header-row">
                                        <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #d6d6d6; position: sticky; right: 0; z-index: 2;">Kategori</th>
                                        <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #d6d6d6; position: sticky; right: 0; z-index: 2;">Hasil</th>
                                        <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #d6d6d6; position: sticky; right: 0; z-index: 2;">Kategori</th>
                                        <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #d6d6d6; position: sticky; right: 0; z-index: 2;">Hasil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="header-column">
                                        <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #d6d6d6; position: sticky; left: 0; z-index: 1;">Pengulas</th>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $training->pengulas }}</td>
                                        <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #d6d6d6; position: sticky; left: 0; z-index: 1;">Alamat</th>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $training->alamat }}</td>
                                    </tr>
                                    <tr class="header-column">
                                        <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #d6d6d6; position: sticky; left: 0; z-index: 1;">Nama Restorant</th>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $training->resto_name }}</td>
                                        <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #d6d6d6; position: sticky; left: 0; z-index: 1;">Jarak dari transportasi umum</th>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $training->jtu }}KM</td>
                                    </tr>
                                    <tr class="header-column">
                                        <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #d6d6d6; position: sticky; left: 0; z-index: 1;">Tanggapan Makanan</th>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $training->tanggapan_m }}</td>
                                        <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #d6d6d6; position: sticky; left: 0; z-index: 1;">Jarak dari hotel / penginapan</th>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $training->jhp }}KM</td>
                                    </tr>
                                    <tr class="header-column">
                                        <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #d6d6d6; position: sticky; left: 0; z-index: 1;">Tanggapan Pelayanan</th>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $training->tanggapan_p }}</td>
                                        <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #d6d6d6; position: sticky; left: 0; z-index: 1;">Jarak dari pusat kota</th>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $training->jpk }}KM</td>
                                    </tr>
                                    <tr class="header-column">
                                        <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #d6d6d6; position: sticky; left: 0; z-index: 1;">Tanggapan Suasana</th>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $training->tanggapan_s }}</td>
                                        <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #d6d6d6; position: sticky; left: 0; z-index: 1;">Penilaian</th>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                            <p class="card-text px-3 py-1 rounded-md {{ $training->kategori_m}}">Makanan {{ $training->kategori_m }}</p>
                                            <p class="card-text px-3 py-1 my-1 rounded-md {{ $training->kategori_s}}">Suasana {{ $training->kategori_s }}</p>
                                            <p class="card-text px-3 py-1 rounded-md {{ $training->kategori_p}}">Pelayanan {{ $training->kategori_p }}</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
