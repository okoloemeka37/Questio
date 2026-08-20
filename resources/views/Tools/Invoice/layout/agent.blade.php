<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

    <title>@yield('title', 'Questiontag Limited')</title>

    @vite(['resources/css/app.css','resources/js/Invoice/Field.js','resources/js/Invoice/Agent.js']) 
</head>
<body>

    <nav class="sticky top-0 z-50 border-b border-gray-200 bg-white shadow-sm">

    <div class="mx-auto flex h-16 items-center justify-between px-6">

        <!-- Left -->
        <div class="flex items-center gap-8">

            <!-- Logo -->
            <a href="#"
               class="flex items-center gap-3">

                <div class="flex h-10 w-10 items-center justify-center
                            rounded-xl bg-sky-600 text-lg font-bold text-white">
                    IG
                </div>

                <div>
                    <h1 class="text-lg font-bold text-gray-800">
                        Invoice Generator
                    </h1>

                    <p class="text-xs text-gray-500">
                        Agent Portal
                    </p>
                </div>

            </a>


            <!-- Navigation -->
            <div class="hidden items-center gap-6 lg:flex">

                <a href="#"
                   class="font-medium text-sky-600">
                    Dashboard
                </a>

                <a href="#"
                   class="font-medium text-gray-500 transition
                          hover:text-sky-600">
                    Invoices
                </a>

                <a href="#"
                   class="font-medium text-gray-500 transition
                          hover:text-sky-600">
                    Customers
                </a>

            </div>

        </div>



        <!-- Right -->
        <div class="flex items-center gap-4">

            <!-- Notification -->
            <button
                type="button"
                class="relative rounded-xl p-2 text-gray-500
                       transition hover:bg-gray-100
                       hover:text-sky-600">

                <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-6 w-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M15 17h5l-1.4-1.4
                             A2 2 0 0118 14.2V11
                             a6 6 0 10-12 0v3.2
                             a2 2 0 01-.6 1.4L4 17h5
                             m6 0a3 3 0 11-6 0h6z"/>

                </svg>

                <span
                    class="absolute right-1 top-1 h-2.5 w-2.5
                           rounded-full bg-red-500">
                </span>

            </button>



            <!-- Profile Dropdown -->
            <details class="relative">

                <!-- Profile Button -->
                <summary
                    class="flex cursor-pointer list-none
                           items-center gap-3 rounded-xl
                           px-3 py-2 transition
                           hover:bg-gray-100
                           [&::-webkit-details-marker]:hidden">

                    <!-- Avatar -->
                    <div
                        class="flex h-10 w-10 items-center
                               justify-center rounded-full
                               bg-sky-600 text-sm font-bold
                               text-white">

                        {{ strtoupper(substr(auth('agent')->user()->name, 0, 1)) }}

                    </div>


                    <!-- Agent Info -->
                    <div class="hidden md:block">

                        <h4 class="text-sm font-semibold text-gray-800">

                            {{ auth('agent')->user()->name }}

                        </h4>

                        <p class="text-xs text-gray-500">
                            Agent
                        </p>

                    </div>


                    <!-- Arrow -->
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5 text-gray-500"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M19 9l-7 7-7-7"/>

                    </svg>

                </summary>



                <!-- Dropdown -->
                <div
                    class="absolute right-0 top-full z-50 mt-2 w-60
                           overflow-hidden rounded-xl
                           border border-gray-200 bg-white
                           py-1 shadow-xl">


                    <!-- Account Info -->
                    <div class="border-b border-gray-100 px-4 py-4">

                        <div class="flex items-center gap-3">

                            <div
                                class="flex h-10 w-10 shrink-0
                                       items-center justify-center
                                       rounded-full bg-sky-600
                                       text-sm font-bold text-white">

                                {{ strtoupper(substr(auth('agent')->user()->name, 0, 1)) }}

                            </div>

                            <div class="min-w-0">

                                <p class="truncate text-sm font-semibold
                                          text-gray-800">

                                    {{ auth('agent')->user()->name }}

                                </p>

                                <p class="truncate text-xs text-gray-500">

                                    {{ auth('agent')->user()->email }}

                                </p>

                            </div>

                        </div>

                    </div>



                    <!-- Profile -->
                    <a href="#"
                       class="flex items-center gap-3 px-4 py-3
                              text-sm text-gray-700 transition
                              hover:bg-gray-50">

                        <div
                            class="flex h-9 w-9 items-center
                                   justify-center rounded-lg
                                   bg-sky-50 text-sky-600">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M15.75 6a3.75 3.75
                                         0 11-7.5 0
                                         3.75 3.75 0 017.5 0z
                                         M4.5 20.25a7.5 7.5
                                         0 0115 0"/>

                            </svg>

                        </div>

                        <div>

                            <p class="font-medium">
                                My Profile
                            </p>

                            <p class="text-xs text-gray-400">
                                View your profile
                            </p>

                        </div>

                    </a>



                    <!-- Divider -->
                    <div class="my-1 border-t border-gray-100"></div>



                    <!-- Logout -->
                    <form method="POST"
                          action="">

                        @csrf

                        <button
                            type="submit"
                            class="flex w-full items-center gap-3
                                   px-4 py-3 text-left text-sm
                                   text-red-600 transition
                                   hover:bg-red-50">

                            <div
                                class="flex h-9 w-9 items-center
                                       justify-center rounded-lg
                                       bg-red-50 text-red-600">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-5 w-5"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M15.75 9V5.25
                                             A2.25 2.25 0 0013.5 3h-6
                                             A2.25 2.25 0 005.25 5.25v13.5
                                             A2.25 2.25 0 007.5 21h6
                                             a2.25 2.25 0 002.25-2.25V15
                                             M12 15l3-3m0 0l-3-3m3 3H3"/>

                                </svg>

                            </div>

                            <div>

                                <p class="font-medium">
                                    Sign out
                                </p>

                                <p class="text-xs text-red-400">
                                    Logout from your account
                                </p>

                            </div>

                        </button>

                    </form>

                </div>

            </details>

        </div>

    </div>

</nav>


    <main>
        @yield('content')
    </main>

</body>

</html>