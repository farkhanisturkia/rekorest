<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Profil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-splade-form action="{{ route('profil.update', $user) }}" :default="$user" method="put">
                        <x-splade-input class="mb-3" id="name" name="name" label="Name" required />
                        <x-splade-input class="mb-3" id="username" type="text" name="username" label="Username" required />
                        <x-splade-input class="mb-3" id="email" type="email" name="email" label="Email" required />
                        <x-splade-input class="mb-3" id="password" type="password" name="password" label="Password" required />
                        <x-splade-submit label="Tambahkan" />
                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>