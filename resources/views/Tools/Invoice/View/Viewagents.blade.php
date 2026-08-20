@extends('Tools.Invoice.layout.lay')

@section('title',"View Agents")

@section('content')

<div class="min-h-screen bg-gray-100">

    <div class="mx-auto max-w-7xl px-6 py-8">

        <!-- Header -->
        <div class="mb-8 flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">

            <div>

                <div class="mb-2 flex items-center gap-2 text-sm text-gray-500">

                    <a href="#"
                       class="transition hover:text-blue-600">
                        Dashboard
                    </a>

                    <span>/</span>

                    <span class="text-gray-700">
                        Agents
                    </span>

                </div>

                <h1 class="text-3xl font-bold tracking-tight text-gray-800">
                    Agents
                </h1>

                <p class="mt-2 text-gray-500">
                    Manage agents who have access to your invoice system.
                </p>

            </div>


            <!-- Add Agent -->
            <a href="{{ route("InvoiceCreateAgentGet") }}"
               class="inline-flex items-center justify-center gap-2 rounded-xl
                      bg-green-600 px-5 py-3 text-sm font-semibold text-white
                      shadow-sm transition hover:bg-green-700
                      focus:outline-none focus:ring-4 focus:ring-green-200">

                <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-5 w-5"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M12 4v16m8-8H4"/>

                </svg>

                Add Agent

            </a>

        </div>


        <!-- Statistics -->
        <div class="mb-6 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

            <!-- Total -->
            <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm font-medium text-gray-500">
                            Total Agents
                        </p>

                        <h2 class="mt-2 text-3xl font-bold text-gray-800">{{ count($Agent) }}</h2>
                    </div>

                    <div class="flex h-12 w-12 items-center justify-center
                                rounded-xl bg-green-100 text-green-600">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M17 20h5v-2a4 4 0
                                     00-4-4h-1M9 20H4v-2a4 4
                                     0 014-4h1m4-10a4 4 0
                                     110 8 4 4 0 010-8z
                                     m6 4a3 3 0 11-6 0"/>

                        </svg>

                    </div>

                </div>

            </div>


            <!-- Active -->
            <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm font-medium text-gray-500">
                            Active Agents
                        </p>

                        <h2 class="mt-2 text-3xl font-bold text-green-600">{{ count($Agent) }}</h2>
                    </div>

                    <div class="flex h-12 w-12 items-center justify-center
                                rounded-xl bg-green-100 text-green-600">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M5 13l4 4L19 7"/>

                        </svg>

                    </div>

                </div>

            </div>


            <!-- Inactive -->
            <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm font-medium text-gray-500">
                            Inactive Agents
                        </p>

                        <h2 class="mt-2 text-3xl font-bold text-red-500">{{ count($Agent) }}</h2>
                    </div>

                    <div class="flex h-12 w-12 items-center justify-center
                                rounded-xl bg-red-100 text-red-500">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M18.364 5.636l-12.728
                                     12.728M5.636 5.636l12.728
                                     12.728"/>

                        </svg>

                    </div>

                </div>

            </div>

        </div>


        <!-- Search & Filter -->
        <div class="mb-6 rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">

            <div class="flex flex-col gap-4 md:flex-row md:items-center
                        md:justify-between">

                <!-- Search -->
                <div class="relative w-full md:max-w-md">

                    <div class="pointer-events-none absolute inset-y-0 left-0
                                flex items-center pl-4 text-gray-400">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-5 w-5"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M21 21l-4.35-4.35m2.35-5.65a8
                                     8 0 11-16 0 8 8 0 0116 0z"/>

                        </svg>

                    </div>

                    <input
                        type="text"
                        placeholder="Search agents..."
                        class="w-full rounded-xl border border-gray-300
                               bg-white py-3 pl-12 pr-4 text-sm text-gray-800
                               outline-none transition
                               focus:border-green-500
                               focus:ring-4 focus:ring-green-100"
                    >

                </div>


                <!-- Filter -->
                <select
                    class="rounded-xl border border-gray-300 bg-white
                           px-4 py-3 text-sm text-gray-700 outline-none
                           transition focus:border-green-500
                           focus:ring-4 focus:ring-green-100">

                    <option>All Agents</option>
                    <option>Active</option>
                    <option>Inactive</option>

                </select>

            </div>

        </div>


        <!-- Agents Table -->

         <div id="successBanner" class="hidden fixed top-20 right-0 z-30 animate-pulse rounded-xl bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4 text-center text-white font-semibold shadow-lg"> ✅ Status updated successfully.</div>

        <div id="errorBanner" class="hidden fixed top-20 right-0 z-30 animate-pulse rounded-xl bg-gradient-to-r from-red-300 to-red-600 px-6 py-4 text-center text-white font-semibold shadow-lg"> Something went wrong: </div>

        <div class="overflow-hidden rounded-2xl border border-gray-200
                    bg-white shadow-sm">

            <div class="overflow-x-auto">

                <table class="min-w-full">

                    <div id="loadingBar" class="opacity-0 h-1 w-full overflow-hidden bg-gray-100"><div class="h-full w-1/3 animate-[loading_1.5s_ease-in-out_infinite] bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500"></div></div>

                    <!-- Table Header -->
                    <thead class="border-b border-gray-200 bg-gray-50">

                        <tr>

                            <th class="px-6 py-4 text-left text-xs
                                       font-bold uppercase tracking-wider
                                       text-gray-500">

                                Agent

                            </th>

                            <th class="px-6 py-4 text-left text-xs
                                       font-bold uppercase tracking-wider
                                       text-gray-500">

                                Email

                            </th>

                            <th class="px-6 py-4 text-left text-xs
                                       font-bold uppercase tracking-wider
                                       text-gray-500">

                                Invoices

                            </th>

                            <th class="px-6 py-4 text-left text-xs
                                       font-bold uppercase tracking-wider
                                       text-gray-500">

                                Status

                            </th>

                            <th class="px-6 py-4 text-left text-xs
                                       font-bold uppercase tracking-wider
                                       text-gray-500">

                                Joined

                            </th>

                            <th class="px-6 py-4 text-right text-xs
                                       font-bold uppercase tracking-wider
                                       text-gray-500">

                                Action

                            </th>

                        </tr>

                    </thead>


                    <!-- Table Body -->
                    <tbody class="divide-y divide-gray-100">

                        @if (count($Agent)===0)
                            <tr><p>No Agents Created</p></tr>
                        @else
                            @foreach ($Agent as $ag)
                                <tr class="transition hover:bg-gray-50">

                            <td class="whitespace-nowrap px-6 py-5">

                                <div class="flex items-center gap-3">

                                    <div class="flex h-11 w-11 items-center
                                                justify-center rounded-full
                                                bg-green-100 font-bold
                                                text-green-700">{{ $ag['name'][0] }} </div>

                                    <div>

                                        <p class="font-semibold text-gray-800">{{ $ag['name']}}</p>

                                       {{--  <p class="text-sm text-gray-500">
                                            AGT-001
                                        </p> --}}

                                    </div>

                                </div>

                            </td>


                            <td class="whitespace-nowrap px-6 py-5 text-sm text-gray-600">{{ $ag['email'] }}</td>


                            <td class="whitespace-nowrap px-6 py-5 text-sm
                                       font-semibold text-gray-700">0</td>


                            <td class="whitespace-nowrap px-6 py-5">

                                <span class="inline-flex items-center gap-2
                                             rounded-full  px-3
                                             py-1 text-xs font-semibold
                                             {{ $ag['active']=='Active'?'text-green-700 bg-green-100':'bg-red-100 text-red-700' }}"id="agentPoint{{$ag['id']}}">

                                    <span class="h-2 w-2 rounded-full {{ $ag['active']=='Active'?'bg-green-500':'bg-red-500' }}" id="actagent{{$ag['id']}}"></span>

                                    <span class="agtWor">{{ $ag['active'] }}</span>

                                </span>

                            </td>


                            <td class="whitespace-nowrap px-6 py-5 text-sm text-gray-500">{{ $ag['created_at']->format('M-d-y') }}</td>


                            <td class="whitespace-nowrap px-6 py-5 text-right">

                                <button id="{{ $ag['id'] }}"
                                    class="Agent_Change_Active_Status rounded-lg p-2 text-gray-500
                                           transition hover:bg-blue-50
                                           hover:text-blue-600">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="h-5 w-5"
                                         fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor">

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M15 12a3 3 0 11-6 0
                                                 3 3 0 016 0z"/>

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M2.458 12C3.732 7.943
                                                 7.523 5 12 5c4.478
                                                 0 8.268 2.943 9.542
                                                 7-1.274 4.057-5.064
                                                 7-9.542 7-4.477
                                                 0-8.268-2.943-9.542-7z"/>

                                    </svg>

                                </button>

                                <button
                                    class="rounded-lg p-2 text-gray-500
                                           transition hover:bg-yellow-50
                                           hover:text-yellow-600">
                                <a href="{{ route('InvoiceEditAgentGet',['id'=>$ag['id']]) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="h-5 w-5"
                                         fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor">

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M11 5H6a2 2 0
                                                 00-2 2v11a2 2 0
                                                 002 2h11a2 2 0
                                                 002-2v-5M18.5
                                                 2.5a2.121 2.121
                                                 0 013 3L12 15l-4
                                                 1 1-4 9.5-9.5z"/>

                                    </svg>
                                    </a>
                                </button>

                            </td>

                        </tr>

                            @endforeach
                        @endif

                    </tbody>

                </table>

            </div>


            <!-- Pagination -->
           {{--  <div class="flex flex-col gap-4 border-t border-gray-200
                        px-6 py-4 sm:flex-row sm:items-center
                        sm:justify-between">

                <p class="text-sm text-gray-500">
                    Showing <span class="font-semibold text-gray-700">1</span>
                    to
                    <span class="font-semibold text-gray-700">3</span>
                    of
                    <span class="font-semibold text-gray-700">24</span>
                    agents
                </p>

                <div class="flex items-center gap-2">

                    <button
                        class="rounded-lg border border-gray-300 bg-white
                               px-3 py-2 text-sm text-gray-500
                               hover:bg-gray-50">

                        Previous

                    </button>

                    <button
                        class="rounded-lg bg-green-600 px-3 py-2
                               text-sm font-semibold text-white">

                        1

                    </button>

                    <button
                        class="rounded-lg border border-gray-300 bg-white
                               px-3 py-2 text-sm text-gray-700
                               hover:bg-gray-50">

                        2

                    </button>

                    <button
                        class="rounded-lg border border-gray-300 bg-white
                               px-3 py-2 text-sm text-gray-700
                               hover:bg-gray-50">

                        3

                    </button>

                    <button
                        class="rounded-lg border border-gray-300 bg-white
                               px-3 py-2 text-sm text-gray-700
                               hover:bg-gray-50">

                        Next

                    </button>

                </div>

            </div> --}}
   <div class="mt-4"> {{ $Agent->links() }}</div>
        </div>

    </div>

</div>

@endsection