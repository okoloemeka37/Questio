<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Questiontag Limited')</title>

    @vite(['resources/css/app.css'])
</head>
<body>

<nav class="sticky top-0 z-50 border-b border-gray-200 bg-white shadow-sm">
    <div class="mx-auto flex h-16 items-center justify-between px-6">

        <!-- Left -->
        <div class="flex items-center gap-8">

            <!-- Logo -->
            <a href="{{ route('InvoiceTool') }}" class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-sky-600 text-lg font-bold text-white">
                    IG
                </div>

                <div>
                    <h1 class="text-lg font-bold text-gray-800">
                        Invoice Generator
                    </h1>
                    <p class="text-xs text-gray-500">
                        Admin Dashboard
                    </p>
                </div>
            </a>

            <!-- Navigation -->
            <div class="hidden items-center gap-6 lg:flex">
                <a href="{{ route('InvoiceTool') }}" class="font-medium text-sky-600">
                    Dashboard
                </a>

                <a href="" class="font-medium text-gray-500 transition hover:text-sky-600">
                    Invoices
                </a>

                <a href="{{ route('InvoiceViewAgents') }}" class="font-medium text-gray-500 transition hover:text-sky-600">
                    Agents
                </a>

                <a href="{{ route('InvoiceViewFields') }}" class="font-medium text-gray-500 transition hover:text-sky-600">
                    Fields
                </a>

                <a href="#" class="font-medium text-gray-500 transition hover:text-sky-600">
                    Settings
                </a>
            </div>

        </div>

        <!-- Right -->
        <div class="flex items-center gap-4">

            <!-- Search -->
            <div class="hidden md:block">
                <input
                    type="text"
                    placeholder="Search..."
                    class="w-64 rounded-xl border border-gray-300 px-4 py-2 text-sm outline-none focus:border-sky-500 focus:ring-2 focus:ring-sky-200">
            </div>

            <!-- Notification -->
            <button
                class="relative rounded-xl p-2 text-gray-500 transition hover:bg-gray-100 hover:text-sky-600">

                <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-6 w-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M15 17h5l-1.4-1.4A2 2 0 0118 14.2V11a6 6 0 10-12 0v3.2a2 2 0 01-.6 1.4L4 17h5m6 0a3 3 0 11-6 0h6z"/>
                </svg>

                <span class="absolute right-1 top-1 h-2.5 w-2.5 rounded-full bg-red-500"></span>

            </button>

            <!-- Profile -->
            <div class="flex cursor-pointer items-center gap-3 rounded-xl px-3 py-2 transition hover:bg-gray-100">

                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-sky-600 text-sm font-bold text-white">
                    {{-- {{ strtoupper(substr(Auth::user()->username,0,1)) }} --}}
                    Z.C
                </div>

                <div class="hidden md:block">
                    <h4 class="text-sm font-semibold text-gray-800">
                        {{-- {{ Auth::user()->username }} --}}
                        Zyler.com
                    </h4>

                    <p class="text-xs text-gray-500">
                        Administrator
                    </p>
                </div>

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

            </div>

        </div>

    </div>
</nav>

    <main>
        @yield('content')
    </main>

    </body>
    </html>