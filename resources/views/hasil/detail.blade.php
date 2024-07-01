<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hasil Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-20 py-6 bg-white border-b border-gray-200">
                    <div class="flex justify-center">
                        <p class="fs-4 font-bold">
                            All Data Training
                        </p>
                    </div>
                    <x-splade-table class="mb-4" :for="$trainings"  pagination-scroll="preserve"></x-splade-table>
                    <div class="d-flex justify-between flex-wrap gap-5 mb-4">
                        <table style="border-collapse: collapse; width: 45%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Kategori Makanan</th>
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Yes</th>
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">No</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Positif</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_mpost }}/{{ $count_true }} ({{ $p_m_pos_t }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_mposf }}/{{ $count_false }} ({{ $p_m_pos_f }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Netral</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_mnett }}/{{ $count_true }} ({{ $p_m_net_t }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_mnetf }}/{{ $count_false }} ({{ $p_m_net_f }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Negatif</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_mnegt }}/{{ $count_true }} ({{ $p_m_neg_t }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_mnegf }}/{{ $count_false }} ({{ $p_m_neg_f }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Total</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $total_mt }}/{{ $count_true }} ({{ $p_total_mt }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $total_mf }}/{{ $count_false }} ({{ $p_total_mf }})</td>
                                </tr>
                            </tbody>
                        </table>
    
                        <table style="border-collapse: collapse; width: 45%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Kategori Pelayanan</th>
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Yes</th>
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">No</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Positif</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_ppost }}/{{ $count_true }} ({{ $p_p_pos_t }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_pposf }}/{{ $count_false }} ({{ $p_p_pos_f }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Netral</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_pnett }}/{{ $count_true }} ({{ $p_p_net_t }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_pnetf }}/{{ $count_false }} ({{ $p_p_net_f }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Negatif</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_pnegt }}/{{ $count_true }} ({{ $p_p_neg_t }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_pnegf }}/{{ $count_false }} ({{ $p_p_neg_f }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Total</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $total_pt }}/{{ $count_true }} ({{ $p_total_pt }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $total_pf }}/{{ $count_false }} ({{ $p_total_pf }})</td>
                                </tr>
                            </tbody>
                        </table>

                        <table style="border-collapse: collapse; width: 45%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Kategori Suasana</th>
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Yes</th>
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">No</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Positif</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_spost }}/{{ $count_true }} ({{ $p_s_pos_t }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_sposf }}/{{ $count_false }} ({{ $p_s_pos_f }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Netral</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_snett }}/{{ $count_true }} ({{ $p_s_net_t }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_snetf }}/{{ $count_false }} ({{ $p_s_net_f }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Negatif</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_snegt }}/{{ $count_true }} ({{ $p_s_neg_t }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_snegf }}/{{ $count_false }} ({{ $p_s_neg_f }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Total</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $total_st }}/{{ $count_true }} ({{ $p_total_st }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $total_sf }}/{{ $count_false }} ({{ $p_total_sf }})</td>
                                </tr>
                            </tbody>
                        </table>

                        <table style="border-collapse: collapse; width: 45%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Is Recomended</th>
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">P</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">True</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_true }}/{{ $count }} ({{ $p_true }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">False</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_false }}/{{ $count }} ({{ $p_false }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Total</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $total }}/{{ $count }} ({{ $p_total }})</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex justify-center mb-4">
                        <p class="text-center">
                            Berdasarkan data tersebut, apabila diketahui suatu data dengan 
                            kategori penilaian makanan <span class="font-bold">{{ $choice->kategori_m }}</span>
                            dan kategori penilaian pelayanan <span class="font-bold">{{ $choice->kategori_p }}</span>
                            dan kategori penilaian suasana <span class="font-bold">{{ $choice->kategori_s }}</span>,
                            maka dapat dihitung :
                        </p>
                    </div>
                    <div class="mb-4">
                        <table style="border-collapse: collapse; width: 100%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">
                                        Likelihood Recomended is True =
                                        (P|Makanan={{ $choice->kategori_m }}&Yes) x 
                                        (P|Pelayanan={{ $choice->kategori_p }}&Yes) x
                                        (P|Suasana={{ $choice->kategori_s }}&Yes) x
                                        (P|True)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">

                                    @if ($choice->kategori_m == 'positif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_pos_t }} x 
                                            {{ $p_p_pos_t }} x 
                                            {{ $p_s_pos_t }} x 
                                            {{ $p_true }} =
                                            {{ $pppt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_pos_t }} x 
                                            {{ $p_p_pos_t }} x 
                                            {{ $p_s_net_t }} x 
                                            {{ $p_true }} =
                                            {{ $ppnt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_pos_t }} x 
                                            {{ $p_p_pos_t }} x 
                                            {{ $p_s_neg_t }} x 
                                            {{ $p_true }} =
                                            {{ $ppnegt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_pos_t }} x 
                                            {{ $p_p_net_t }} x 
                                            {{ $p_s_pos_t }} x 
                                            {{ $p_true }} =
                                            {{ $pnpt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_pos_t }} x 
                                            {{ $p_p_net_t }} x 
                                            {{ $p_s_net_t }} x 
                                            {{ $p_true }} =
                                            {{ $pnnt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_pos_t }} x 
                                            {{ $p_p_net_t }} x 
                                            {{ $p_s_neg_t }} x 
                                            {{ $p_true }} =
                                            {{ $pnnegt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_pos_t }} x 
                                            {{ $p_p_neg_t }} x 
                                            {{ $p_s_pos_t }} x 
                                            {{ $p_true }} =
                                            {{ $pnegpt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_pos_t }} x 
                                            {{ $p_p_neg_t }} x 
                                            {{ $p_s_net_t }} x 
                                            {{ $p_true }} =
                                            {{ $pnegnt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_pos_t }} x 
                                            {{ $p_p_neg_t }} x 
                                            {{ $p_s_neg_t }} x 
                                            {{ $p_true }} =
                                            {{ $pnegnegt }}
                                        </td>


                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_net_t }} x 
                                            {{ $p_p_pos_t }} x 
                                            {{ $p_s_pos_t }} x 
                                            {{ $p_true }} =
                                            {{ $nppt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_net_t }} x 
                                            {{ $p_p_pos_t }} x 
                                            {{ $p_s_net_t }} x 
                                            {{ $p_true }} =
                                            {{ $npnt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_net_t }} x 
                                            {{ $p_p_pos_t }} x 
                                            {{ $p_s_neg_t }} x 
                                            {{ $p_true }} =
                                            {{ $npnegt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_net_t }} x 
                                            {{ $p_p_net_t }} x 
                                            {{ $p_s_pos_t }} x 
                                            {{ $p_true }} =
                                            {{ $nnpt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_net_t }} x 
                                            {{ $p_p_net_t }} x 
                                            {{ $p_s_net_t }} x 
                                            {{ $p_true }} =
                                            {{ $nnnt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_net_t }} x 
                                            {{ $p_p_net_t }} x 
                                            {{ $p_s_neg_t }} x 
                                            {{ $p_true }} =
                                            {{ $nnnegt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_net_t }} x 
                                            {{ $p_p_neg_t }} x 
                                            {{ $p_s_pos_t }} x 
                                            {{ $p_true }} =
                                            {{ $nnegpt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_net_t }} x 
                                            {{ $p_p_neg_t }} x 
                                            {{ $p_s_net_t }} x 
                                            {{ $p_true }} =
                                            {{ $nnegnt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_net_t }} x 
                                            {{ $p_p_neg_t }} x 
                                            {{ $p_s_neg_t }} x 
                                            {{ $p_true }} =
                                            {{ $nnegnegt }}
                                        </td>


                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_neg_t }} x 
                                            {{ $p_p_pos_t }} x 
                                            {{ $p_s_pos_t }} x 
                                            {{ $p_true }} =
                                            {{ $negppt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_neg_t }} x 
                                            {{ $p_p_pos_t }} x 
                                            {{ $p_s_net_t }} x 
                                            {{ $p_true }} =
                                            {{ $negpnt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_neg_t }} x 
                                            {{ $p_p_pos_t }} x 
                                            {{ $p_s_neg_t }} x 
                                            {{ $p_true }} =
                                            {{ $negpnegt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_neg_t }} x 
                                            {{ $p_p_net_t }} x 
                                            {{ $p_s_pos_t }} x 
                                            {{ $p_true }} =
                                            {{ $negnpt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_neg_t }} x 
                                            {{ $p_p_net_t }} x 
                                            {{ $p_s_net_t }} x 
                                            {{ $p_true }} =
                                            {{ $negnnt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_neg_t }} x 
                                            {{ $p_p_net_t }} x 
                                            {{ $p_s_neg_t }} x 
                                            {{ $p_true }} =
                                            {{ $negnnegt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_neg_t }} x 
                                            {{ $p_p_neg_t }} x 
                                            {{ $p_s_pos_t }} x 
                                            {{ $p_true }} =
                                            {{ $negnegpt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_neg_t }} x 
                                            {{ $p_p_neg_t }} x 
                                            {{ $p_s_net_t }} x 
                                            {{ $p_true }} =
                                            {{ $negnegnt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_neg_t }} x 
                                            {{ $p_p_neg_t }} x 
                                            {{ $p_s_neg_t }} x 
                                            {{ $p_true }} =
                                            {{ $negnegnegt }}
                                        </td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mb-4">
                        <table style="border-collapse: collapse; width: 100%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">
                                        Likelihood Recomended is False =
                                        (P|Makanan={{ $choice->kategori_m }}&No) x 
                                        (P|Pelayanan={{ $choice->kategori_p }}&No) x
                                        (P|Suasana={{ $choice->kategori_s }}&No) x
                                        (P|False)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">
                                    
                                    @if ($choice->kategori_m == 'positif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_pos_f }} x 
                                            {{ $p_p_pos_f }} x 
                                            {{ $p_s_pos_f }} x 
                                            {{ $p_false }} =
                                            {{ $pppf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_pos_f }} x 
                                            {{ $p_p_pos_f }} x 
                                            {{ $p_s_net_f }} x 
                                            {{ $p_false }} =
                                            {{ $ppnf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_pos_f }} x 
                                            {{ $p_p_pos_f }} x 
                                            {{ $p_s_neg_f }} x 
                                            {{ $p_false }} =
                                            {{ $ppnegf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_pos_f }} x 
                                            {{ $p_p_net_f }} x 
                                            {{ $p_s_pos_f }} x 
                                            {{ $p_false }} =
                                            {{ $pnpf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_pos_f }} x 
                                            {{ $p_p_net_f }} x 
                                            {{ $p_s_net_f }} x 
                                            {{ $p_false }} =
                                            {{ $pnnf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_pos_f }} x 
                                            {{ $p_p_net_f }} x 
                                            {{ $p_s_neg_f }} x 
                                            {{ $p_false }} =
                                            {{ $pnnegf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_pos_f }} x 
                                            {{ $p_p_neg_f }} x 
                                            {{ $p_s_pos_f }} x 
                                            {{ $p_false }} =
                                            {{ $pnegpf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_pos_f }} x 
                                            {{ $p_p_neg_f }} x 
                                            {{ $p_s_net_f }} x 
                                            {{ $p_false }} =
                                            {{ $pnegnf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_pos_f }} x 
                                            {{ $p_p_neg_f }} x 
                                            {{ $p_s_neg_f }} x 
                                            {{ $p_false }} =
                                            {{ $pnegnegf }}
                                        </td>


                                    @elseif ($choice->kafegori_m == 'netral' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'positif')
                                        <td style="bordef: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_net_f }} x 
                                            {{ $p_p_pos_f }} x 
                                            {{ $p_s_pos_f }} x 
                                            {{ $p_false }} =
                                            {{ $nppf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_net_f }} x 
                                            {{ $p_p_pos_f }} x 
                                            {{ $p_s_net_f }} x 
                                            {{ $p_false }} =
                                            {{ $npnf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_net_f }} x 
                                            {{ $p_p_pos_f }} x 
                                            {{ $p_s_neg_f }} x 
                                            {{ $p_false }} =
                                            {{ $npnegf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_net_f }} x 
                                            {{ $p_p_net_f }} x 
                                            {{ $p_s_pos_f }} x 
                                            {{ $p_false }} =
                                            {{ $nnpf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_net_f }} x 
                                            {{ $p_p_net_f }} x 
                                            {{ $p_s_net_f }} x 
                                            {{ $p_false }} =
                                            {{ $nnnf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_net_f }} x 
                                            {{ $p_p_net_f }} x 
                                            {{ $p_s_neg_f }} x 
                                            {{ $p_false }} =
                                            {{ $nnnegf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_net_f }} x 
                                            {{ $p_p_neg_f }} x 
                                            {{ $p_s_pos_f }} x 
                                            {{ $p_false }} =
                                            {{ $nnegpf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_net_f }} x 
                                            {{ $p_p_neg_f }} x 
                                            {{ $p_s_net_f }} x 
                                            {{ $p_false }} =
                                            {{ $nnegnf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_net_f }} x 
                                            {{ $p_p_neg_f }} x 
                                            {{ $p_s_neg_f }} x 
                                            {{ $p_false }} =
                                            {{ $nnegnegf }}
                                        </td>


                                    @elseif ($choice->kafegori_m == 'negatif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'positif')
                                        <td style="bordef: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_neg_f }} x 
                                            {{ $p_p_pos_f }} x 
                                            {{ $p_s_pos_f }} x 
                                            {{ $p_false }} =
                                            {{ $negppf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_neg_f }} x 
                                            {{ $p_p_pos_f }} x 
                                            {{ $p_s_net_f }} x 
                                            {{ $p_false }} =
                                            {{ $negpnf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_neg_f }} x 
                                            {{ $p_p_pos_f }} x 
                                            {{ $p_s_neg_f }} x 
                                            {{ $p_false }} =
                                            {{ $negpnegf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_neg_f }} x 
                                            {{ $p_p_net_f }} x 
                                            {{ $p_s_pos_f }} x 
                                            {{ $p_false }} =
                                            {{ $negnpf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_neg_f }} x 
                                            {{ $p_p_net_f }} x 
                                            {{ $p_s_net_f }} x 
                                            {{ $p_false }} =
                                            {{ $negnnf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_neg_f }} x 
                                            {{ $p_p_net_f }} x 
                                            {{ $p_s_neg_f }} x 
                                            {{ $p_false }} =
                                            {{ $negnnegf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_neg_f }} x 
                                            {{ $p_p_neg_f }} x 
                                            {{ $p_s_pos_f }} x 
                                            {{ $p_false }} =
                                            {{ $negnegpf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_neg_f }} x 
                                            {{ $p_p_neg_f }} x 
                                            {{ $p_s_net_f }} x 
                                            {{ $p_false }} =
                                            {{ $negnegnf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_m_neg_f }} x 
                                            {{ $p_p_neg_f }} x 
                                            {{ $p_s_neg_f }} x 
                                            {{ $p_false }} =
                                            {{ $negnegnegf }}
                                        </td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex justify-center mb-4">
                        <p class="text-center">
                            Nilai probabilitas dapat dihitung dengan melakukan normalisasi terhadap 
                            <span class="font-bold">Likelihood</span>
                            tersebut sehingga jumlah nilai yang di peroleh 1, maka:
                        </p>
                    </div>
                    <div class="d-flex justify-between flex-wrap gap-5 mb-4">
                        <table style="border-collapse: collapse; width: 45%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">
                                        Probabilitas Yes =
                                        Likelihood Yes / 
                                        (Likelihood Yes + Likelihood No)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">

                                    @if ($choice->kategori_m == 'positif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_pppt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_ppnt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_ppnegt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_pnpt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_pnnt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_pnnegt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_pnegpt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_pnegnt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_pnegnegt }}
                                        </td>


                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_nppt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_npnt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_npnegt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_nnpt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_nnnt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_nnnegt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_nnegpt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_nnegnt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_nnegnegt }}
                                        </td>


                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_negppt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_negpnt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_negpnegt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_negnpt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_negnnt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_negnnegt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_negnegpt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_negnegnt }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_negnegnegt }}
                                        </td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                        <table style="border-collapse: collapse; width: 45%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">
                                        Probabilitas No =
                                        Likelihood No / 
                                        (Likelihood Yes + Likelihood No)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">
                                    
                                    @if ($choice->kategori_m == 'positif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_pppf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_ppnf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_ppnegf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_pnpf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_pnnf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_pnnegf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_pnegpf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_pnegnf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'positif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_pnegnegf }}
                                        </td>


                                    @elseif ($choice->kafegori_m == 'netral' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'positif')
                                        <td style="bordef: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_nppf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_npnf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_npnegf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_nnpf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_nnnf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_nnnegf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_nnegpf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_nnegnf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'netral' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_nnegnegf }}
                                        </td>


                                    @elseif ($choice->kafegori_m == 'negatif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'positif')
                                        <td style="bordef: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_negppf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_negpnf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'positif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_negpnegf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_negnpf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_negnnf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'netral' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_negnnegf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'positif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_negnegpf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'netral')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_negnegnf }}
                                        </td>
                                    @elseif ($choice->kategori_m == 'negatif' && $choice->kategori_p == 'negatif' && $choice->kategori_s == 'negatif')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_negnegnegf }}
                                        </td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-20 py-6 bg-white border-b border-gray-200">
                    <div class="flex justify-center">
                        <p class="fs-4 font-bold">
                            Match With ID
                        </p>
                    </div>
                    <x-splade-table class="mb-4" :for="$matchs"  pagination-scroll="preserve"></x-splade-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
