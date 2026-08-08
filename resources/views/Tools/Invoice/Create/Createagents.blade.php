@extends('Tools.Invoice.layout.lay')

@section('title',"Add Agents")

@section('content')

<div class="min-h-screen bg-gray-100">

    <div class="mx-auto max-w-5xl px-6 py-8">

        <!-- Header -->
        <div class="mb-8 flex items-center justify-between">

            <div>
                <div class="mb-2 flex items-center gap-2 text-sm text-gray-500">

                    <a href="#" class="transition hover:text-blue-600">
                        Dashboard
                    </a>

                    <span>/</span>

                    <a href="#" class="transition hover:text-blue-600">
                        Agents
                    </a>

                    <span>/</span>

                    <span class="text-gray-700">
                        Create Agent
                    </span>

                </div>

                <h1 class="text-3xl font-bold tracking-tight text-gray-800">
                    Create New Agent
                </h1>

                <p class="mt-2 text-gray-500">
                    Register a new agent who can manage invoices.
                </p>
            </div>

            <!-- Back Button -->
            <a href="{{ route('InvoiceViewAgents') }}
               class="hidden items-center gap-2 rounded-xl border border-gray-300
                      bg-white px-5 py-3 text-sm font-semibold text-gray-700
                      shadow-sm transition hover:bg-gray-50 sm:flex">

                <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-5 w-5"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M15 19l-7-7 7-7"/>

                </svg>

                Back to Agents

            </a>

        </div>


        <!-- Main Card -->
        <div class="overflow-hidden rounded-2xl border border-gray-200
                    bg-white shadow-sm">

            <!-- Card Header -->
            <div class="border-b border-gray-200 bg-gray-50/70 px-8 py-6">

                <div class="flex items-center gap-4">

                    <!-- Icon -->
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
                                  d="M18 9a3 3 0 10-6 0 3 3 0
                                     006 0zM9 9a3 3 0 10-6 0 3 3
                                     0 006 0zM21 21a6 6 0 00-12
                                     0m-6 0a6 6 0 016-6"/>

                        </svg>

                    </div>

                    <div>
                        <h2 class="text-lg font-bold text-gray-800">
                            Agent Information
                        </h2>

                        <p class="mt-1 text-sm text-gray-500">
                            Enter the agent's account details below.
                        </p>
                    </div>

                </div>

            </div>

                    @if($errors->has('failed')){<div class="bg-red-100 text-red-700 p-4 rounded-lg">{{$errors->first('failed')}}</div>} @endif

            <!-- Form -->
            <form class="p-8" action="{{ route('InvoiceCreateAgentPost') }}" method="POST" >
                    @csrf
                <div class="space-y-6">

                    <!-- Name -->
                    <div>

                        <label for="name"
                               class="mb-2 block text-sm font-semibold text-gray-700">

                            Agent Name

                            <span class="text-red-500">*</span>

                        </label>

                        <div class="relative">

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
                                          d="M16 7a4 4 0 11-8 0 4 4 0
                                             018 0zM12 14a7 7 0 00-7
                                             7h14a7 7 0 00-7-7z"/>

                                </svg>

                            </div>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Enter agent name"
                                class="w-full rounded-xl border border-gray-300
                                       bg-white py-3.5 pl-12 pr-4 text-gray-800
                                       placeholder-gray-400 outline-none
                                       transition duration-200
                                       focus:border-green-500
                                       focus:ring-4 focus:ring-green-100"
                           value="{{old('name')}}"  >

                        </div>
                            @error('name')<p class="text-red-500">{{ $message }}</p>@enderror
                    </div>


                    <!-- Email -->
                    <div>

                        <label for="email"
                               class="mb-2 block text-sm font-semibold text-gray-700">

                            Email Address

                            <span class="text-red-500">*</span>

                        </label>

                        <div class="relative">

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
                                          d="M3 8l9 6 9-6M5 19h14a2 2
                                             0 002-2V7a2 2 0 00-2-2H5a2
                                             2 0 00-2 2v10a2 2 0 002 2z"/>

                                </svg>

                            </div>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="agent@example.com"
                                class="w-full rounded-xl border border-gray-300
                                       bg-white py-3.5 pl-12 pr-4 text-gray-800
                                       placeholder-gray-400 outline-none
                                       transition duration-200
                                       focus:border-green-500
                                       focus:ring-4 focus:ring-green-100"
                          value="{{old('email')}}"   >

                        </div>
@error('email')<p class="text-red-500">{{ $message }}</p>@enderror
                    </div>


                    <!-- Password -->
                    <div>

                        <label for="password"
                               class="mb-2 block text-sm font-semibold text-gray-700">

                            Password

                            <span class="text-red-500">*</span>

                        </label>

                        <div class="relative">

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
                                          d="M12 15v2m-6 4h12a2 2 0
                                             002-2v-5a2 2 0 00-2-2H6a2
                                             2 0 00-2 2v5a2 2 0 002 2z
                                             M8 10V7a4 4 0 118 0v3"/>

                                </svg>

                            </div>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Enter a secure password"
                                class="w-full rounded-xl border border-gray-300
                                       bg-white py-3.5 pl-12 pr-4 text-gray-800
                                       placeholder-gray-400 outline-none
                                       transition duration-200
                                       focus:border-green-500
                                       focus:ring-4 focus:ring-green-100"
                            value="{{old('password')}}" >
@error('name')<p class="text-red-500">{{ $message }}</p>@enderror
                        </div>

                        <p class="mt-2 text-xs text-gray-500">
                            Use at least 8 characters with a combination of letters
                            and numbers.
                        </p>

                    </div>

                </div>


                <!-- Bottom Actions -->
                <div class="mt-8 flex flex-col-reverse gap-3 border-t
                            border-gray-200 pt-6 sm:flex-row sm:justify-end">

                    <a href="#"
                       class="inline-flex items-center justify-center rounded-xl
                              border border-gray-300 bg-white px-6 py-3
                              text-sm font-semibold text-gray-700
                              transition hover:bg-gray-50">

                        Cancel

                    </a>

                    <button
                        type="submit"
                        class="inline-flex items-center justify-center gap-2
                               rounded-xl bg-green-600 px-7 py-3 text-sm
                               font-semibold text-white shadow-sm
                               transition duration-200
                               hover:bg-green-700
                               focus:outline-none
                               focus:ring-4 focus:ring-green-200">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-5 w-5"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M5 13l4 4L19 7"/>

                        </svg>

                        Create Agent

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection