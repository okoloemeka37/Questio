@extends('Tools.Invoice.layout.lay')

@section('title',"Add Fields")

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

                    <a href="{{ route('InvoiceViewFields') }}" class="transition hover:text-blue-600">
                        Fields
                    </a>

                    <span>/</span>

                    <span class="text-gray-700">
                        Add Field
                    </span>
                </div>

                <h1 class="text-3xl font-bold tracking-tight text-gray-800">
                    Add New Field
                </h1>

                <p class="mt-2 text-gray-500">
                    Add a new customer or business field to your invoice system.
                </p>
            </div>

            <!-- Back Button -->
            <a href="{{ route('InvoiceViewFields') }}
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

                Back to Fields

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
                                rounded-xl bg-blue-100 text-blue-600">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M12 4v16m8-8H4"/>

                        </svg>

                    </div>

                    <div>
                        <h2 class="text-lg font-bold text-gray-800">
                            Field Information
                        </h2>

                        <p class="mt-1 text-sm text-gray-500">
                            Enter the details below to create a new field.
                        </p>
                    </div>

                </div>

            </div>


            <!-- Form -->
            <form class="p-8" action="{{ route('InvoiceCreateFieldPost') }}" method="POST">
                @csrf
                <div class="space-y-6">

                    @if($errors->has('failed')){<div class="bg-red-100 text-red-700 p-4 rounded-lg">{{$errors->first('failed')}}</div>} @endif

                    <div>

                        <label for="name"
                               class="mb-2 block text-sm font-semibold text-gray-700">

                            Name

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
                                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0z
                                             M12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>

                                </svg>

                            </div>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Enter name"
                                class="w-full rounded-xl border border-gray-300
                                       bg-white py-3.5 pl-12 pr-4 text-gray-800
                                       placeholder-gray-400 outline-none
                                       transition duration-200
                                       focus:border-blue-500
                                       focus:ring-4 focus:ring-blue-100" value="{{old('name') }}" >

                        </div>
                        @error('name')<p class="text-red-500">{{ $message }}</p>@enderror
                    </div>


                    <!-- Email & Phone -->
                    <div class="grid gap-6 md:grid-cols-2">

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
                                              d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7
                                                 a2 2 0 00-2-2H5a2 2 0 00-2 2v10
                                                 a2 2 0 002 2z"/>

                                    </svg>

                                </div>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    placeholder="example@email.com"
                                    class="w-full rounded-xl border border-gray-300
                                           bg-white py-3.5 pl-12 pr-4 text-gray-800
                                           placeholder-gray-400 outline-none
                                           transition duration-200
                                           focus:border-blue-500
                                           focus:ring-4 focus:ring-blue-100"
                               value="{{ old('email') }}" >

                            </div>
                        @error('email')<p class="text-red-500">{{ $message }}</p>@enderror

                        </div>


                        <!-- Phone -->
                        <div>

                            <label for="phone"
                                   class="mb-2 block text-sm font-semibold text-gray-700">

                                Phone Number

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
                                              d="M3 5a2 2 0 012-2h3.28a2 2 0
                                                 011.94 1.515L11.1 7.9a2 2 0
                                                 01-.5 1.94l-1.27 1.27a16.001
                                                 16.001 0 006.56 6.56l1.27-1.27
                                                 a2 2 0 011.94-.5l3.385.885A2
                                                 2 0 0121 18.72V22a2 2 0 01-2
                                                 2C9.611 24 0 14.389 0 2a2 2
                                                 0 012-2h3.28z"/>

                                    </svg>

                                </div>

                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    placeholder="08012345678"
                                    class="w-full rounded-xl border border-gray-300
                                           bg-white py-3.5 pl-12 pr-4 text-gray-800
                                           placeholder-gray-400 outline-none
                                           transition duration-200
                                           focus:border-blue-500
                                           focus:ring-4 focus:ring-blue-100"
                               value="{{old('phone') }}" >

                            </div>
                        @error('phone')<p class="text-red-500">{{ $message }}</p>@enderror

                        </div>

                    </div>


                    <!-- Address -->
                    <div>

                        <label for="address"
                               class="mb-2 block text-sm font-semibold text-gray-700">

                            Address

                            <span class="text-red-500">*</span>

                        </label>

                        <div class="relative">

                            <div class="pointer-events-none absolute left-4 top-4
                                        text-gray-400">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-5 w-5"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M17.657 16.657L13.414 21
                                             a2 2 0 01-2.828 0l-4.243-4.243
                                             a8 8 0 1111.314 0z"/>

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M15 11a3 3 0 11-6 0 3 3 0
                                             016 0z"/>

                                </svg>

                            </div>

                            <textarea
                                id="address"
                                name="address"
                                rows="5"
                                placeholder="Enter full address"
                                class="w-full resize-none rounded-xl border
                                       border-gray-300 bg-white py-3.5 pl-12 pr-4
                                       text-gray-800 placeholder-gray-400 outline-none
                                       transition duration-200
                                       focus:border-blue-500
                                       focus:ring-4 focus:ring-blue-100"
                            >{{old('address') }}</textarea>

                        </div>
                        @error('address')<p class="text-red-500">{{ $message }}</p>@enderror

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
                               rounded-xl bg-blue-600 px-7 py-3 text-sm
                               font-semibold text-white shadow-sm
                               transition duration-200
                               hover:bg-blue-700
                               focus:outline-none
                               focus:ring-4 focus:ring-blue-200">

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

                        Create Field

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection