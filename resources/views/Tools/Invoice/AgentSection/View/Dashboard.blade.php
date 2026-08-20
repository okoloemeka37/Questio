@extends('Tools.Invoice.layout.agent')

@section('title','Invoice Agent')

@section('content')



    <!-- =========================================================
         MAIN
    ========================================================== -->

    <main class="mx-auto max-w-7xl px-6 py-8">


        <!-- =====================================================
             WELCOME HEADER
        ====================================================== -->

        <div class="mb-8 flex flex-col justify-between gap-5
                    sm:flex-row sm:items-center">

            <div>

                <p class="text-sm font-medium text-sky-600">
                    Agent Dashboard
                </p>

                <h1 class="mt-1 text-2xl font-bold text-gray-800">
                    Welcome back
                </h1>

                <p class="mt-1 text-sm text-gray-500">
                    Manage your assigned fields and invoices.
                </p>

            </div>


            <!-- Create Invoice -->
            <a href="#"
               class="inline-flex items-center justify-center gap-2
                      rounded-xl bg-sky-600 px-5 py-3
                      text-sm font-semibold text-white shadow-sm
                      transition hover:bg-sky-700
                      focus:outline-none focus:ring-4
                      focus:ring-sky-200">

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

                Create Invoice

            </a>

        </div>



        <!-- =====================================================
             STATISTICS
        ====================================================== -->

        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">


            <!-- Assigned Fields -->
            <div class="rounded-2xl border border-gray-200
                        bg-white p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-sm font-medium text-gray-500">
                            Assigned Fields
                        </p>

                        <p class="mt-2 text-3xl font-bold text-gray-800">{{ count($fields) }}</p>

                    </div>

                    <div class="flex h-11 w-11 items-center
                                justify-center rounded-xl
                                bg-sky-50 text-sky-600">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M9 12h6m-6 4h6m2
                                     5H7a2 2 0 01-2-2V5a2
                                     2 0 012-2h7.586a2 2
                                     0 011.414.586l3.414
                                     3.414A2 2 0 0120 8.414V19
                                     a2 2 0 01-2 2z"/>

                        </svg>

                    </div>

                </div>

            </div>


            <!-- Total Invoices -->
            <div class="rounded-2xl border border-gray-200
                        bg-white p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-sm font-medium text-gray-500">
                            Total Invoices
                        </p>

                        <p class="mt-2 text-3xl font-bold text-gray-800">
                            0
                        </p>

                    </div>

                    <div class="flex h-11 w-11 items-center
                                justify-center rounded-xl
                                bg-purple-50 text-purple-600">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M9 12h6m-6 4h6m2
                                     5H7a2 2 0 01-2-2V5a2
                                     2 0 012-2h7.586a2 2
                                     0 011.414.586l3.414
                                     3.414A2 2 0 0120 8.414V19
                                     a2 2 0 01-2 2z"/>

                        </svg>

                    </div>

                </div>

            </div>


            <!-- Pending -->
            <div class="rounded-2xl border border-gray-200
                        bg-white p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-sm font-medium text-gray-500">
                            Pending
                        </p>

                        <p class="mt-2 text-3xl font-bold text-gray-800">
                            0
                        </p>

                    </div>

                    <div class="flex h-11 w-11 items-center
                                justify-center rounded-xl
                                bg-amber-50 text-amber-600">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <circle cx="12"
                                    cy="12"
                                    r="9"/>

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M12 6v6l4 2"/>

                        </svg>

                    </div>

                </div>

            </div>


            <!-- Completed -->
            <div class="rounded-2xl border border-gray-200
                        bg-white p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-sm font-medium text-gray-500">
                            Completed
                        </p>

                        <p class="mt-2 text-3xl font-bold text-gray-800">
                            0
                        </p>

                    </div>

                    <div class="flex h-11 w-11 items-center
                                justify-center rounded-xl
                                bg-green-50 text-green-600">

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

        </div>



        <!-- =====================================================
             MY ASSIGNED FIELDS
        ====================================================== -->

        <div class="mt-8 rounded-2xl border border-gray-200
                    bg-white shadow-sm">


            <!-- Header -->
            <div class="flex flex-col justify-between gap-4
                        border-b border-gray-100 px-6 py-5
                        sm:flex-row sm:items-center">

                <div>

                    <h2 class="text-lg font-bold text-gray-800">
                        My Assigned Fields
                    </h2>

                    <p class="mt-1 text-sm text-gray-500">
                        Fields currently assigned to you.
                    </p>

                </div>


                <a href="#"
                   class="inline-flex items-center justify-center
                          gap-2 rounded-xl border border-gray-200
                          bg-white px-4 py-2.5 text-sm font-semibold
                          text-gray-600 transition
                          hover:border-sky-200 hover:bg-sky-50
                          hover:text-sky-600">

                    View All

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-4 w-4"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M9 5l7 7-7 7"/>

                    </svg>

                </a>

            </div>



            <!-- Field List -->
            <div class="divide-y divide-gray-100">

                @if (count($fields)===0)
                    <p>You have not been assigned to a field yet; Contact your admin for followup</p>
                @else
                    @foreach ($fields as $field)

                      <div class="flex flex-col gap-4 px-6 py-5
                            transition hover:bg-gray-50
                            sm:flex-row sm:items-center
                            sm:justify-between">

                    <div class="flex min-w-0 items-center gap-4">


                        <!-- Icon -->
                        <div class="flex h-11 w-11 shrink-0
                                    items-center justify-center
                                    rounded-xl bg-sky-50
                                    text-sky-600">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M9 12h6m-6 4h6m2
                                         5H7a2 2 0 01-2-2V5a2
                                         2 0 012-2h7.586a2
                                         2 0 011.414.586l3.414
                                         3.414A2 2 0 0120 8.414V19
                                         a2 2 0 01-2 2z"/>

                            </svg>

                        </div>


                        <!-- Details -->
                        <div class="min-w-0">

                            <div class="flex flex-wrap items-center gap-2">

                                <h3 class="truncate text-sm font-semibold
                                           text-gray-800">{{ $field['name'] }}</h3>

                                <span class="rounded-full bg-green-50
                                             px-2.5 py-1 text-xs
                                             font-medium text-green-700">

                                    Active

                                </span>

                            </div>

                            <p class="mt-1 truncate text-sm text-gray-500">{{ $field['email'] }}  </p>

                            <p class="mt-1 text-xs text-gray-400">{{ $field['Tracking_Id'] }}</p>

                        </div>

                    </div>


                    <!-- Action -->
                    <a href="{{ route('getInviceAgentField',['field_id'=>$field['id']]) }}"
                       class="inline-flex shrink-0 items-center
                              justify-center gap-2 rounded-xl
                              bg-sky-600 px-4 py-2.5
                              text-sm font-semibold text-white
                              transition hover:bg-sky-700
                              focus:outline-none focus:ring-4
                              focus:ring-sky-100">

                        View Field

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-4 w-4"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M9 5l7 7-7 7"/>

                        </svg>

                    </a>

                </div>
                        
                    @endforeach
                @endif
              
            </div>


            <!-- Footer -->
            <div class="border-t border-gray-100 bg-gray-50
                        px-6 py-4">

                <p class="text-xs text-gray-500">
                    Only fields assigned to your account are displayed here.
                </p>

            </div>

        </div>



        <!-- =====================================================
             BOTTOM CONTENT
        ====================================================== -->

        <div class="mt-8 grid gap-6 lg:grid-cols-3">


            <!-- Recent Invoices -->
            <div class="lg:col-span-2 overflow-hidden rounded-2xl
                        border border-gray-200 bg-white shadow-sm">


                <div class="flex items-center justify-between
                            border-b border-gray-100 px-6 py-5">

                    <div>

                        <h2 class="text-lg font-bold text-gray-800">
                            Recent Invoices
                        </h2>

                        <p class="mt-1 text-sm text-gray-500">
                            Your latest invoice activity.
                        </p>

                    </div>


                    <a href="#"
                       class="text-sm font-medium text-sky-600
                              hover:text-sky-700">

                        View all

                    </a>

                </div>


                <!-- Empty State -->
                <div class="flex min-h-60 flex-col items-center
                            justify-center px-6 py-10 text-center">

                    <div class="flex h-14 w-14 items-center
                                justify-center rounded-2xl
                                bg-gray-100 text-gray-400">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-7 w-7"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1.5"
                                  d="M9 12h6m-6 4h6m2
                                     5H7a2 2 0 01-2-2V5a2
                                     2 0 012-2h7.586a2
                                     2 0 011.414.586l3.414
                                     3.414A2 2 0 0120 8.414V19
                                     a2 2 0 01-2 2z"/>

                        </svg>

                    </div>

                    <h3 class="mt-4 text-sm font-semibold text-gray-800">
                        No invoices yet
                    </h3>

                    <p class="mt-1 max-w-sm text-sm text-gray-500">
                        Your recently created invoices will appear here.
                    </p>

                </div>

            </div>



            <!-- Quick Actions -->
            <div class="rounded-2xl border border-gray-200
                        bg-white p-6 shadow-sm">

                <h2 class="text-lg font-bold text-gray-800">
                    Quick Actions
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    Common tasks.
                </p>


                <div class="mt-5 space-y-3">


                    <!-- Create Invoice -->
                    <a href="#"
                       class="group flex items-center gap-4 rounded-xl
                              border border-gray-200 p-4 transition
                              hover:border-sky-200 hover:bg-sky-50">

                        <div class="flex h-10 w-10 items-center
                                    justify-center rounded-lg
                                    bg-sky-50 text-sky-600
                                    group-hover:bg-white">

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

                        </div>


                        <div class="flex-1">

                            <p class="text-sm font-semibold text-gray-800">
                                Create Invoice
                            </p>

                            <p class="text-xs text-gray-500">
                                Generate a new invoice
                            </p>

                        </div>


                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-5 w-5 text-gray-400
                                    transition group-hover:translate-x-1
                                    group-hover:text-sky-600"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M9 5l7 7-7 7"/>

                        </svg>

                    </a>



                    <!-- View Fields -->
                    <a href="#"
                       class="group flex items-center gap-4 rounded-xl
                              border border-gray-200 p-4 transition
                              hover:border-sky-200 hover:bg-sky-50">

                        <div class="flex h-10 w-10 items-center
                                    justify-center rounded-lg
                                    bg-gray-100 text-gray-600
                                    group-hover:bg-white">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M4 6h16M4 12h16M4 18h16"/>

                            </svg>

                        </div>


                        <div class="flex-1">

                            <p class="text-sm font-semibold text-gray-800">
                                My Fields
                            </p>

                            <p class="text-xs text-gray-500">
                                View your assigned fields
                            </p>

                        </div>


                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-5 w-5 text-gray-400
                                    transition group-hover:translate-x-1
                                    group-hover:text-sky-600"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M9 5l7 7-7 7"/>

                        </svg>

                    </a>



                    <!-- Customers -->
                    <a href="#"
                       class="group flex items-center gap-4 rounded-xl
                              border border-gray-200 p-4 transition
                              hover:border-sky-200 hover:bg-sky-50">

                        <div class="flex h-10 w-10 items-center
                                    justify-center rounded-lg
                                    bg-purple-50 text-purple-600
                                    group-hover:bg-white">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M15 19a4 4 0
                                         10-8 0m8 0a4 4
                                         0 018 0m-8-8a4
                                         4 0 11-8 0 4 4
                                         0 018 0z"/>

                            </svg>

                        </div>


                        <div class="flex-1">

                            <p class="text-sm font-semibold text-gray-800">
                                Customers
                            </p>

                            <p class="text-xs text-gray-500">
                                View customer records
                            </p>

                        </div>


                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-5 w-5 text-gray-400
                                    transition group-hover:translate-x-1
                                    group-hover:text-sky-600"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M9 5l7 7-7 7"/>

                        </svg>

                    </a>

                </div>

            </div>

        </div>

    </main>

@endsection
