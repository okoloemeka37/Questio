@extends('Tools.Invoice.layout.lay')

@section('title',"Edit Field")

@section('content')

<div class="min-h-screen bg-gray-100">

    <div class="mx-auto max-w-5xl px-6 py-8">

        <!-- Header -->
        <div class="mb-8 flex flex-col gap-5 sm:flex-row sm:items-center
                    sm:justify-between">

            <div>

                <!-- Breadcrumb -->
                <div class="mb-2 flex items-center gap-2 text-sm text-gray-500">

                    <a href="#"
                       class="transition hover:text-blue-600">
                        Dashboard
                    </a>

                    <span>/</span>

                    <a href="#"
                       class="transition hover:text-blue-600">
                        Agents
                    </a>

                    <span>/</span>

                    <span class="text-gray-700">
                        Edit Agent
                    </span>

                </div>

                <h1 class="text-3xl font-bold tracking-tight text-gray-800">
                    Edit Agent
                </h1>

                <p class="mt-2 text-gray-500">
                    Update the agent's account information and access.
                </p>

            </div>


            <!-- Back -->
            <a href="#"
               class="inline-flex items-center justify-center gap-2
                      rounded-xl border border-gray-300 bg-white px-5 py-3
                      text-sm font-semibold text-gray-700 shadow-sm
                      transition hover:bg-gray-50">

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

                    <!-- Avatar -->
                    <div class="flex h-12 w-12 items-center justify-center
                                rounded-xl bg-green-100 text-lg font-bold
                                text-green-700">

                        JD

                    </div>


                    <div>

                        <h2 class="text-lg font-bold text-gray-800">
                            John Doe
                        </h2>

                        <p class="mt-1 text-sm text-gray-500">
                            Update agent account details
                        </p>

                    </div>

                </div>

            </div>


            <!-- Form -->
            <form class="p-8" method="POST" action="{{ route('InvoiceEditAgentPost',['id'=>$agent['id']]) }}">
                    @if($errors->has('failed')){<div class="bg-red-100 text-red-700 p-4 rounded-lg">{{$errors->first('failed')}}</div>} @endif

                <div class="grid gap-6 md:grid-cols-2">
                        @csrf

                    <!-- Name -->
                    <div>

                        <label for="name"
                               class="mb-2 block text-sm font-semibold
                                      text-gray-700">

                            Agent Name

                            <span class="text-red-500">*</span>

                        </label>

                        <div class="relative">

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
                                          d="M16 7a4 4 0 11-8 0
                                             4 4 0 018 0zM12 14a7
                                             7 0 00-7 7h14a7 7 0
                                             00-7-7z"/>

                                </svg>

                            </div>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ $agent['name'] }}"
                                placeholder="Enter agent name"
                                class="w-full rounded-xl border
                                       border-gray-300 bg-white py-3.5
                                       pl-12 pr-4 text-gray-800
                                       placeholder-gray-400 outline-none
                                       transition
                                       focus:border-green-500
                                       focus:ring-4 focus:ring-green-100"
                            >

                        </div>
 @error('name')<p class="text-red-500">{{ $message }}</p>@enderror
                    </div>


                    <!-- Email -->
                    <div>

                        <label for="email"
                               class="mb-2 block text-sm font-semibold
                                      text-gray-700">

                            Email Address

                            <span class="text-red-500">*</span>

                        </label>

                        <div class="relative">

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
                                          d="M3 8l9 6 9-6M5 19h14a2
                                             2 0 002-2V7a2 2 0
                                             00-2-2H5a2 2 0
                                             00-2 2v10a2 2 0
                                             002 2z"/>

                                </svg>

                            </div>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ $agent['email'] }}"
                                placeholder="Enter email address"
                                class="w-full rounded-xl border
                                       border-gray-300 bg-white py-3.5
                                       pl-12 pr-4 text-gray-800
                                       placeholder-gray-400 outline-none
                                       transition
                                       focus:border-green-500
                                       focus:ring-4 focus:ring-green-100"
                            >

                        </div>
 @error('email')<p class="text-red-500">{{ $message }}</p>@enderror
                    </div>


                    <!-- Password -->
                    <div>

                        <label for="password"
                               class="mb-2 block text-sm font-semibold
                                      text-gray-700">

                            New Password

                        </label>

                        <div class="relative">

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
                                          d="M12 15v2m-6 4h12a2 2
                                             0 002-2v-5a2 2 0
                                             00-2-2H6a2 2 0
                                             00-2 2v5a2 2
                                             002 2zM8 10V7a4
                                             4 0 118 0v3"/>

                                </svg>

                            </div>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Leave blank to keep current password"
                                class="w-full rounded-xl border
                                       border-gray-300 bg-white py-3.5
                                       pl-12 pr-4 text-gray-800
                                       placeholder-gray-400 outline-none
                                       transition
                                       focus:border-green-500
                                       focus:ring-4 focus:ring-green-100"
                            >

                        </div>
 @error('password')<p class="text-red-500">{{ $message }}</p>@enderror
                        <p class="mt-2 text-xs text-gray-500">
                            Leave this field empty if you don't want to
                            change the password.
                        </p>

                    </div>


                    <!-- Status -->
                 {{--    <div>

                        <label for="status"
                               class="mb-2 block text-sm font-semibold
                                      text-gray-700">

                            Account Status

                        </label>

                        <select
                            id="status"
                            name="status"
                            class="w-full rounded-xl border border-gray-300
                                   bg-white px-4 py-3.5 text-gray-800
                                   outline-none transition
                                   focus:border-green-500
                                   focus:ring-4 focus:ring-green-100">

                            <option value="Active" selected>
                                Active
                            </option>

                            <option value="Inactive">
                                Inactive
                            </option>

                        </select>

                    </div> --}}

                </div>


                <!-- Agent Information -->
                <div class="mt-8 rounded-xl border border-gray-200
                            bg-gray-50 p-5">

                    <div class="flex items-start gap-3">

                        <div class="mt-0.5 text-gray-400">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M13 16h-1v-4h-1m1-4h.01M12
                                         20a8 8 0 100-16 8 8 0
                                         000 16z"/>

                            </svg>

                        </div>

                        <div>

                            <p class="text-sm font-semibold text-gray-700">
                                Agent account
                            </p>

                            <p class="mt-1 text-sm leading-5 text-gray-500">
                                Changing the password will immediately
                                update the agent's login credentials.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- Actions -->
                <div class="mt-8 flex flex-col-reverse gap-3 border-t
                            border-gray-200 pt-6 sm:flex-row
                            sm:justify-end">

                    <a href="#"
                       class="inline-flex items-center justify-center
                              rounded-xl border border-gray-300 bg-white
                              px-6 py-3 text-sm font-semibold text-gray-700
                              transition hover:bg-gray-50">

                        Cancel

                    </a>


                    <button
                        type="submit"
                        class="inline-flex items-center justify-center
                               gap-2 rounded-xl bg-green-600 px-7 py-3
                               text-sm font-semibold text-white shadow-sm
                               transition
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

                        Save Changes

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection