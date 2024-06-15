<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 d-flex flex-wrap gap-2 justify-content-center bg-white border-b border-gray-200">
                    @foreach ($training as $training)
                    <a href="{{route('rekom.detail', ['id' => $training->id])}}">
                        <div class="card justify-content-center" style="width: 18rem;">
                            <img class="card-img-top" style="height: 18rem;" src="{{ asset($training->path) }}" alt="{{ asset($training->path) }}">
                            <div class="card-body bg-slate-300">
                                <p class="card-text text-center font-semibold">{{ $training->resto_name }}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
