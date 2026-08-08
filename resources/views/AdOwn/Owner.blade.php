@extends('AdOwn.layout')

@section('content')


<!-- Right Messages Sidebar -->
<aside id="SideMsg" class="hidden fixed top-15 right-0 h-screen w-96 bg-white border-l border-gray-200 shadow-2xl flex-col">

    <!-- Header -->
    <div class="flex items-center justify-between px-6 py-5 border-b bg-gradient-to-r from-sky-600 to-blue-600">
        <div>
            <h2 class="text-xl font-bold text-white">
                Notifications
            </h2>
            <p class="text-sm text-sky-100">{{ count($notifications) }}</p>
        </div>

        <button id="closeSideMsg" class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 text-white transition">
            ✕
        </button>
    </div>

    <!-- Search -->
    <div class="p-4 border-b bg-gray-50">
        <input
            type="text"
            placeholder="Search messages..."
            class="w-full rounded-xl border border-gray-200 px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-sky-500"
        >
    </div>

    <!-- Messages -->
    <div class="flex-1 overflow-y-auto">

          @foreach ($notifications as $note )
              <!-- Item -->
        <button class="group w-full text-left px-5 py-4 hover:bg-gray-50 transition">
            <a href="{{ route('OwnerMessages') }}">
            <div class="flex items-start gap-3">

                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-purple-500 text-white font-bold">
                    {{ substr($note['name'],0,1) }}
                </div>

                <div class="flex-1 min-w-0">
                    <div class="flex justify-between">
                        <h3 class="font-semibold text-gray-900">{{ $note['name'] }}</h3>

                        <span class="text-xs text-gray-400">
                           {{ $note->created_at->format('M d') }}
                        </span>
                    </div>
                    <p class="mt-1 text-xs text-gray-500 truncate">{{ $note['summary'] }}...</p>
                </div>

            </div>
            </a>
        </button>
          @endforeach      

    </div>

</aside>

<div class="min-h-screen bg-slate-100">



    <div class="mx-auto max-w-7xl px-8 py-10">

        <!-- Statistics -->

        <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">

            <div class="rounded-3xl bg-white p-7 shadow-sm">

                <p class="text-slate-500">
                    Total Software
                </p>

                <h2 class="mt-3 text-4xl font-bold">
                    8
                </h2>

            </div>

            <div class="rounded-3xl bg-white p-7 shadow-sm">

                <p class="text-slate-500">
                    Active Clients
                </p>

                <h2 class="mt-3 text-4xl font-bold">
                    214
                </h2>

            </div>

            <div class="rounded-3xl bg-white p-7 shadow-sm">

                <p class="text-slate-500">
                    Monthly Revenue
                </p>

                <h2 class="mt-3 text-4xl font-bold">
                    ₦3.4M
                </h2>

            </div>

            <div class="rounded-3xl bg-white p-7 shadow-sm">

                <p class="text-slate-500">
                    Pending Renewals
                </p>

                <h2 class="mt-3 text-4xl font-bold">
                    17
                </h2>

            </div>

        </div>


        <!-- Quick Actions -->

        <div class="mt-10 flex flex-wrap gap-4">

            <button class="rounded-xl bg-sky-600 px-6 py-3 text-white">
                + New Software
            </button>

            <button class="rounded-xl bg-emerald-600 px-6 py-3 text-white">
                + New Client
            </button>

            <button class="rounded-xl bg-orange-500 px-6 py-3 text-white">
                Revenue Report
            </button>

            <button class="rounded-xl bg-indigo-600 px-6 py-3 text-white">
                Broadcast Email
            </button>

        </div>


        <!-- Software -->

        <div class="mt-14">

            <div class="mb-8 flex items-center justify-between">

                <h2 class="text-3xl font-bold">

                    Active Software

                </h2>

                <a href="#" class="text-sky-600">
                    View All
                </a>

            </div>



            <div class="grid gap-8 lg:grid-cols-2 xl:grid-cols-3">


            @foreach ($admins as $admin)
                    
                
                <!-- Invoice Generator -->

                <div class="rounded-3xl bg-white p-8 shadow-sm transition hover:-translate-y-2 hover:shadow-xl">

                    <div class="flex items-start justify-between">

                        <div
                            class="flex h-16 w-16 items-center justify-center rounded-2xl bg-sky-100 text-4xl">

                            🧾

                        </div>

                        <span
                            class="rounded-full bg-emerald-100 px-3 py-1 text-sm font-semibold text-emerald-700">

                            Active

                        </span>

                    </div>

                    <h3 class="mt-6 text-2xl font-bold">{{ $admin->tool}}</h3>

                    <p class="mt-3 leading-7 text-slate-600">

                        Generate professional invoices,
                        quotations and receipts for businesses.

                    </p>

                    <div class="mt-8 grid grid-cols-2 gap-6">

                        <div>

                            <p class="text-sm text-slate-500">
                                Clients
                            </p>

                        <h4 class="mt-1 text-2xl font-bold"> {{ $admin->toolCount }} </h4>
 
                        </div>

                        <div>

                            <p class="text-sm text-slate-500">
                                Revenue
                            </p>

                            <h4 class="mt-1 text-2xl font-bold">
                                ₦460k
                            </h4>

                        </div>

                    </div>

                    <div class="mt-8 flex gap-3">

                        <button
                            class="rounded-xl bg-sky-600 px-5 py-3 text-white">

                            Open

                        </button>

                        <button
                            class="rounded-xl border border-slate-300 px-5 py-3">

                            Edit

                        </button>

                    </div>

                </div>

               

            @endforeach


            </div>

        </div>

    </div>

</div>

@endsection