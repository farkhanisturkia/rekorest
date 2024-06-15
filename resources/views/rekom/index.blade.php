<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Rekomendasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="text-center font-bold fs-3 mt-2 mb-3">TOP 2</p>
                    <div class="container d-flex justify-content-around">
                        @foreach ($rekomendasi as $datas => $data)
                            <a href="{{route('rekom.detail', ['id' => $data['id']])}}">
                                <div class="card" style="width: 30rem;">
                                    <div class="card-body">
                                        <p class="card-text text-center font-medium fs-5 mb-2">{{ $datas }}</p>
                                        <p class="card-text text-center">{{ $data['alamat'] }}</p>
                                        <div class="container d-flex justify-content-around mb-3">
                                            <p class="card-text mb-2">JTU : {{ $data['jtu'] }}KM</p>
                                            <p class="card-text mb-2">JHP : {{ $data['jhp'] }}KM</p>
                                            <p class="card-text mb-2">JPK : {{ $data['jpk'] }}KM</p>
                                        </div>
                                        <div class="container d-flex justify-content-around align-items-center mb-3">
                                            <p class="card-text px-3 py-1 rounded-md {{ $data['kategori_m']}}">{{ $data['kategori_m'] }}</p>
                                            <p class="card-text px-3 py-1 rounded-md {{ $data['kategori_s']}}">{{ $data['kategori_s'] }}</p>
                                            <p class="card-text px-3 py-1 rounded-md {{ $data['kategori_p']}}">{{ $data['kategori_p'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                @if ($loop->iteration >= 2)
                                    @break
                                @endif
                            </a>
                        @endforeach
                    </div>
                    <p class="text-center font-bold fs-4 mt-5 mb-3">ALL RECOMENDATION</p>
                    <div class="container d-flex justify-content-center flex-wrap gap-4">
                        @foreach ($rekomendasi as $datas => $data)
                            <a href="{{route('rekom.detail', ['id' => $data['id']])}}">
                                @if ($loop->iteration > 2)
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                        <p class="card-text text-center font-medium fs-5 mb-2">{{ $datas }}</p>
                                            <div class="container d-flex justify-content-around align-items-center mb-3">
                                                <p class="card-text px-3 py-1 rounded-md {{ $data['kategori_m']}}">{{ $data['kategori_m'] }}</p>
                                                <p class="card-text px-3 py-1 rounded-md {{ $data['kategori_s']}}">{{ $data['kategori_s'] }}</p>
                                                <p class="card-text px-3 py-1 rounded-md {{ $data['kategori_p']}}">{{ $data['kategori_p'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>