@extends('AdOwn.layout')

@section('content')

<div class="min-h-screen bg-gray-100">

    <div class="mx-auto max-w-7xl px-6 py-8">

        <!-- Header -->
        <div class="mb-8 flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">

            <div>

                <div class="mb-2 flex items-center gap-2 text-sm text-gray-500">

                    <a href="{{ route('quesAdmin') }}"
                       class="transition hover:text-blue-600">
                        Dashboard
                    </a>

                    <span>/</span>

                    <span class="text-gray-700">
                        Messages
                    </span>

                </div>

                <h1 class="text-3xl font-bold tracking-tight text-gray-800">
                    Messages
                </h1>

                <p class="mt-2 text-gray-500">
                    View and manage messages sent to you.
                </p>

            </div>

        </div>


        <!-- Statistics -->
        <div class="mb-6 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

            <!-- Total -->
            <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-sm font-medium text-gray-500">
                            Total Messages
                        </p>

                        <h2 class="mt-2 text-3xl font-bold text-gray-800">{{ count($messages) }}</h2>

                    </div>

                    <div class="flex h-12 w-12 items-center justify-center
                                rounded-xl bg-blue-100 text-blue-600">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M21 11.5a8.38 8.38 0
                                     01-1.9 5.4 8.5 8.5 0
                                     01-6.6 3.1 8.38 8.38
                                     0 01-3.4-.7L3 21l1.7-5.1
                                     A8.38 8.38 0 013 10.5
                                     8.5 8.5 0 0111.5 2
                                     8.5 8.5 0 0120 10.5z"/>

                        </svg>

                    </div>

                </div>

            </div>


            <!-- Unread -->
            <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-sm font-medium text-gray-500">
                            Unread Messages
                        </p>

                        <h2 class="mt-2 text-3xl font-bold text-red-500"></h2>

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
                                  d="M3 8l9 6 9-6M5 19h14a2
                                     2 0 002-2V7a2 2 0
                                     00-2-2H5a2 2 0
                                     00-2 2v10a2 2 0
                                     002 2z"/>

                        </svg>

                    </div>

                </div>

            </div>


            <!-- Today -->
            <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-sm font-medium text-gray-500">
                            Received Today
                        </p>

                        <h2 class="mt-2 text-3xl font-bold text-green-600"></h2>

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
                                  d="M12 8v4l3 3m6-3a9 9
                                     0 11-18 0 9 9 0
                                     0118 0z"/>

                        </svg>

                    </div>

                </div>

            </div>

        </div>


        <!-- Messages Container -->
        <div class="overflow-hidden rounded-2xl border border-gray-200
                    bg-white shadow-sm">

            <!-- Toolbar -->
            <div class="border-b border-gray-200 p-5">

                <div class="flex flex-col gap-4 lg:flex-row
                            lg:items-center lg:justify-between">

                    <!-- Search -->
                    <div class="relative w-full lg:max-w-md">

                        <div class="pointer-events-none absolute inset-y-0
                                    left-0 flex items-center pl-4
                                    text-gray-400">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M21 21l-4.35-4.35m2.35-5.65a8
                                         8 0 11-16 0 8 8 0
                                         0116 0z"/>

                            </svg>

                        </div>

                        <input
                            type="text"
                            placeholder="Search messages..."
                            class="w-full rounded-xl border border-gray-300
                                   bg-white py-3 pl-12 pr-4 text-sm
                                   text-gray-800 outline-none transition
                                   focus:border-blue-500
                                   focus:ring-4 focus:ring-blue-100"
                        >

                    </div>


                    <!-- Filters -->
                    <div class="flex flex-wrap gap-3">

                        <button
                            class="rounded-xl bg-blue-600 px-4 py-3 text-sm
                                   font-semibold text-white">

                            All

                        </button>

                        <button
                            class="rounded-xl border border-gray-300
                                   bg-white px-4 py-3 text-sm font-medium
                                   text-gray-600 transition
                                   hover:bg-gray-50">

                            Unread

                        </button>

                        <button
                            class="rounded-xl border border-gray-300
                                   bg-white px-4 py-3 text-sm font-medium
                                   text-gray-600 transition
                                   hover:bg-gray-50">

                            Read

                        </button>

                    </div>

                </div>

            </div>


            <!-- Messages -->
            <div class="divide-y divide-gray-100">

                    @foreach ($messages as $mes)
                          <a href="{{ route("singMessage",['id'=>$mes->id]) }}"
                   class="group block bg-blue-50/40 px-6 py-5
                          transition hover:bg-blue-50">

                    <div class="flex items-start gap-4">

                        <!-- Avatar -->
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-blue-100  font-bold text-blue-700"> </div>


                        <!-- Content -->
                        <div class="min-w-0 flex-1">

                            <div class="flex flex-col gap-1 sm:flex-row
                                        sm:items-center sm:justify-between">

                                <div class="flex items-center gap-2">

                                    <h3 class="font-bold text-gray-900">{{ $mes['name'] }} </h3>

                                    <!-- Unread indicator -->
                                    <span class="h-2.5 w-2.5 rounded-full
                                                 bg-blue-600"></span>

                                </div>

                                <span class="text-xs text-gray-500">{{ $mes['created_at']->diffForHumans() }} </span>

                            </div>


                            <h4 class="mt-1 font-semibold text-gray-800">{{ $mes['subject'] }}   </h4>


                            <p class="mt-1 line-clamp-2 text-sm text-gray-500">{{ $mes['message'] }}  </p>

                        </div>


                        <!-- Arrow -->
                        <div class="hidden text-gray-400 transition
                                    group-hover:translate-x-1
                                    group-hover:text-blue-600 sm:block">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M9 5l7 7-7 7"/>

                            </svg>

                        </div>

                    </div>

                </a>

                    @endforeach
            </div>


            <!-- Pagination -->
            <div class="mt-4"> {{ $messages->links() }}</div>
          
        </div>

    </div>

</div>

@endsection