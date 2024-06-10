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
                    <table class="mb-5" style="border-collapse: collapse; width: 100%;">
                        <thead>
                            <tr class="header-row">
                                <th class="text-center" style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Kategori Makanan</th>
                                <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Yes</th>
                                <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">No</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="header-column">
                                <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Positif</th>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_mpost }}/{{ $count_true }}</td>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_mposf }}/{{ $count_false }}</td>
                            </tr>
                            <tr class="header-column">
                                <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Netral</th>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_mnett }}/{{ $count_true }}</td>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_mnetf }}/{{ $count_false }}</td>
                            </tr>
                            <tr class="header-column">
                                <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Negatif</th>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_mnegt }}/{{ $count_true }}</td>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_mnegf }}/{{ $count_false }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="mb-5" style="border-collapse: collapse; width: 100%;">
                        <thead>
                            <tr class="header-row">
                                <th class="text-center" style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Kategori Pelayanan</th>
                                <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Yes</th>
                                <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">No</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="header-column">
                                <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Positif</th>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_ppost }}/{{ $count_true }}</td>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_pposf }}/{{ $count_false }}</td>
                            </tr>
                            <tr class="header-column">
                                <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Netral</th>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_pnett }}/{{ $count_true }}</td>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_pnetf }}/{{ $count_false }}</td>
                            </tr>
                            <tr class="header-column">
                                <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Negatif</th>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_pnegt }}/{{ $count_true }}</td>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_pnegf }}/{{ $count_false }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="mb-5" style="border-collapse: collapse; width: 100%;">
                        <thead>
                            <tr class="header-row">
                                <th class="text-center" style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Kategori Suasana</th>
                                <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Yes</th>
                                <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">No</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="header-column">
                                <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Positif</th>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_spost }}/{{ $count_true }}</td>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_sposf }}/{{ $count_false }}</td>
                            </tr>
                            <tr class="header-column">
                                <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Netral</th>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_snett }}/{{ $count_true }}</td>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_snetf }}/{{ $count_false }}</td>
                            </tr>
                            <tr class="header-column">
                                <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Negatif</th>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_snegt }}/{{ $count_true }}</td>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_snegf }}/{{ $count_false }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <table style="border-collapse: collapse; width: 100%;">
                        <thead>
                            <tr class="header-row">
                                <th class="text-center" style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Is Recomended</th>
                                <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">P</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="header-column">
                                <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">True</th>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_true }}/{{ $count }}</td>
                            </tr>
                            <tr class="header-column">
                                <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">False</th>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_false }}/{{ $count }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
