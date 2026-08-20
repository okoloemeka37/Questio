@extends('Tools.Invoice.layout.lay')

@php
    $actions = [
        [
            'title' => 'Field',
            'description' => 'Add and view invoice fields',
            'color' => 'bg-blue-500',
            'create' => route('InvoiceCreateFieldGet'),
            'view' => route('InvoiceViewFields'),
            'icon' => '➕',
            'viewIcon' => '👁',
        ],
        [
            'title' => 'Agent',
            'description' => 'Register and view agents',
            'color' => 'bg-green-500',
            'create' => route('InvoiceCreateAgentGet'),
           'view' =>route('InvoiceViewAgents'),
            'icon' => '👤',
            'viewIcon' => '👁',
        ],
        [
            'title' => 'Parameters',
            'description' => 'Configure and view invoice rules',
            'color' => 'bg-purple-500',
            'create' =>'',// route('parameter.create'),
            'view' =>'',// route('parameter.index'),
            'icon' => '⚙',
            'viewIcon' => '👁',
        ],
        [
            'title' => 'Invoice',
            'description' => 'Create and view invoice',
            'color' => 'bg-orange-500',
            'create' => '',// route('invoice.create'),
            'view' =>'',// route('invoice.index'),
            'icon' => '📄',
            'viewIcon' => '👁',
        ],
    ];
@endphp

@section('content')


<div class="min-h-screen bg-gray-100">

    <div class="mx-auto max-w-7xl px-6 py-8">

        <!-- Header -->
        <div class="mb-8 flex items-center justify-between">

            <div>
                <h1 class="text-3xl font-bold text-gray-800">
                    Welcome back, {{auth('admin')->user()->username}} 👋
                </h1>

                <p class="mt-1 text-gray-500">
                    Manage your Invoice Generator from one dashboard.
                </p>
            </div>

            <a href=""
                class="rounded-xl bg-sky-600 px-5 py-3 font-semibold text-white transition hover:bg-sky-700">
                + Create Invoice
            </a>

        </div>

        <!-- Statistics -->
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">

            <div class="rounded-2xl bg-white p-6 shadow">
                <p class="text-sm text-gray-500">Total Agents</p>

                <h2 class="mt-3 text-3xl font-bold text-sky-600">{{ count($agents) }}</h2>

                <p class="mt-2 text-sm text-green-600"></p>
            </div>

            <div class="rounded-2xl bg-white p-6 shadow">
                <p class="text-sm text-gray-500">Invoice Fields</p>

                <h2 class="mt-3 text-3xl font-bold text-purple-600">{{ count($fields) }}</h2>

                <p class="mt-2 text-sm text-green-600">Updated Today </p>
            </div>

            <div class="rounded-2xl bg-white p-6 shadow">
                <p class="text-sm text-gray-500">Invoice Templates</p>

                <h2 class="mt-3 text-3xl font-bold text-orange-600">0</h2>

                <p class="mt-2 text-sm text-gray-500">Active</p>
            </div>

            <div class="rounded-2xl bg-white p-6 shadow">
                <p class="text-sm text-gray-500">Invoices Generated</p>

                <h2 class="mt-3 text-3xl font-bold text-green-600">0</h2>

                <p class="mt-2 text-sm text-green-600">0 Today  </p>
            </div>

        </div>
<!-- Quick Actions -->
<div class="mt-10">

    <div class="mb-5 flex items-center justify-between">

        <div>
            <h2 class="text-xl font-bold text-gray-800">
                Quick Actions
            </h2>

            <p class="mt-1 text-sm text-gray-500">
                Quickly manage your invoice system.
            </p>
        </div>

    </div>


    <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-4">

        @foreach ($actions as $act)

            <div class="group rounded-2xl border border-gray-200 bg-white
                        p-5 shadow-sm transition duration-200
                        hover:-translate-y-1 hover:border-gray-300
                        hover:shadow-lg">

                <!-- Top -->
                <div class="flex items-start justify-between">

                    <!-- Icon -->
                    <div class="flex h-11 w-11 items-center justify-center
                                rounded-xl {{ $act['color'] }}
                                text-white shadow-sm">

                        <span class="text-xl">
                            {{ $act['icon'] }}
                        </span>

                    </div>


                    <!-- View -->
                    <a href="{{ $act['view'] }}"
                       class="flex h-9 w-9 items-center justify-center
                              rounded-lg text-gray-400 transition
                              hover:bg-gray-100 hover:text-gray-700">

                        {{ $act['viewIcon'] }}

                    </a>

                </div>


                <!-- Content -->
                <div class="mt-5">

                    <h3 class="text-base font-bold text-gray-800">
                        {{ $act['title'] }}
                    </h3>

                    <p class="mt-1.5 text-sm leading-5 text-gray-500">
                        {{ $act['description'] }}
                    </p>

                </div>


                <!-- Create Action -->
                <div class="mt-5 border-t border-gray-100 pt-4">

                    <a href="{{ $act['create'] }}"
                       class="inline-flex items-center gap-2 text-sm
                              font-semibold text-gray-700 transition
                              hover:text-blue-600">

                        Create {{ $act['title'] }}

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-4 w-4 transition
                                    group-hover:translate-x-1"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M5 12h14m-6-6l6 6-6 6"/>

                        </svg>

                    </a>

                </div>

            </div>

        @endforeach

    </div>

</div>

        <!-- Recent Activity + Recent Invoices -->
        <div class="mt-10 grid gap-6 lg:grid-cols-3">

            <!-- Activity -->
            <div class="rounded-2xl bg-white p-6 shadow">

                <h2 class="mb-5 text-xl font-bold">
                    Recent Activity
                </h2>

                <div class="space-y-5">
                        @if (count($notifications)===0)
                            <p>No Activity</p>

                            @else
                            @foreach ($notifications as $note)
                             <div class="border-l-4 border-sky-500 pl-4">
                                <p class="font-semibold">{{$note->subject}}</p>

                                <p class="text-sm text-gray-500">{{$note->created_at->diffForHumans()}} </p>
                             </div>
                            @endforeach

                        @endif
                  
                  
                </div>

            </div>

            <!-- Recent Invoices -->
            <div class="overflow-hidden rounded-2xl bg-white shadow lg:col-span-2">

                <div class="border-b px-6 py-4">

                    <h2 class="text-xl font-bold">
                        Recent Invoices
                    </h2>

                </div>

                <table class="min-w-full">

                    <thead class="bg-gray-50">

                        <tr>

                            <th class="px-6 py-3 text-left text-sm font-semibold">
                                Invoice
                            </th>

                            <th class="px-6 py-3 text-left text-sm font-semibold">
                                Customer
                            </th>

                            <th class="px-6 py-3 text-left text-sm font-semibold">
                                Amount
                            </th>

                            <th class="px-6 py-3 text-left text-sm font-semibold">
                                Status
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr class="border-t">

                            <td class="px-6 py-4">
                                INV-1001
                            </td>

                            <td class="px-6 py-4">
                                John Doe
                            </td>

                            <td class="px-6 py-4">
                                ₦45,000
                            </td>

                            <td class="px-6 py-4">

                                <span class="rounded-full bg-green-100 px-3 py-1 text-sm font-semibold text-green-700">
                                    Paid
                                </span>

                            </td>

                        </tr>

                        <tr class="border-t">

                            <td class="px-6 py-4">
                                INV-1002
                            </td>

                            <td class="px-6 py-4">
                                Jane Smith
                            </td>

                            <td class="px-6 py-4">
                                ₦18,500
                            </td>

                            <td class="px-6 py-4">

                                <span class="rounded-full bg-yellow-100 px-3 py-1 text-sm font-semibold text-yellow-700">
                                    Pending
                                </span>

                            </td>

                        </tr>

                        <tr class="border-t">

                            <td class="px-6 py-4">
                                INV-1003
                            </td>

                            <td class="px-6 py-4">
                                Michael
                            </td>

                            <td class="px-6 py-4">
                                ₦92,000
                            </td>

                            <td class="px-6 py-4">

                                <span class="rounded-full bg-red-100 px-3 py-1 text-sm font-semibold text-red-700">
                                    Cancelled
                                </span>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>


@endsection