<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hasil Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-splade-table class="mt-4" :for="$trainings"  pagination-scroll="preserve">
                        <x-splade-cell actions as="$trainings">
                            <Link href="{{ route('hasil.detail', ['id' => $trainings]) }}" class="me-2 px-3 py-2 bg-green-500 rounded text-white hover:bg-green-300 hover:text-black font-semibold"> Naive Bayes </Link>
                        </x-splade-cell>
                    </x-splade-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
