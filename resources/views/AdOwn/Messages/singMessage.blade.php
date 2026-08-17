@extends('AdOwn.layout')

@section('content')

<div class="min-h-screen bg-gray-100">

    <div class="mx-auto max-w-5xl px-6 py-8">

        <!-- Top Navigation -->
        <div class="mb-6">

            <a href="{{ route('OwnerMessages') }}"
               class="inline-flex items-center gap-2 text-sm font-medium
                      text-gray-500 transition hover:text-blue-600">

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

                Back to Messages

            </a>

        </div>


        <!-- Main Message Card -->
        <div class="overflow-hidden rounded-2xl border border-gray-200
                    bg-white shadow-sm">

            <!-- Message Header -->
            <div class="border-b border-gray-200 px-6 py-6 sm:px-8">

                <div class="flex flex-col gap-5 sm:flex-row
                            sm:items-start sm:justify-between">

                    <div class="min-w-0">

                        <h1 class="text-2xl font-bold tracking-tight  text-gray-800 sm:text-3xl">{{ $message['subject'] }}</h1>

                        <p class="mt-2 text-sm text-gray-500">Received {{ $message['created_at']->diffForHumans()}}</p>

                    </div>


                    <!-- Message Status -->
                 {{--    <span class="inline-flex w-fit items-center gap-2
                                 rounded-full bg-blue-100 px-3 py-1.5
                                 text-xs font-semibold text-blue-700">

                        <span class="h-2 w-2 rounded-full bg-blue-600"></span>

                        Unread

                    </span> --}}

                </div>

            </div>


            <!-- Sender Information -->
            <div class="border-b border-gray-200 bg-gray-50/70
                        px-6 py-6 sm:px-8">

                <div class="flex items-center gap-4">

                    <!-- Avatar -->
                    <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-blue-100 text-lg font-bold text-blue-700">{{ $message['name'][0] }}</div>


                    <!-- Sender -->
                    <div class="min-w-0">

                        <h2 class="font-bold text-gray-800">{{$message['name']}}</h2>

                        <p class="mt-1 truncate text-sm text-gray-500">{{$message['email']}}</p>

                    </div>

                </div>

            </div>


            <!-- Message Body -->
            <div class="px-6 py-8 sm:px-8">

                <div class="prose max-w-none">

                 

                    <p class="mt-5 text-base leading-7 text-gray-700">{{ $message['message'] }}</p>

                  

                </div>

            </div>


            <!-- Message Information -->
            <div class="border-t border-gray-200 px-6 py-6 sm:px-8">

                <div class="grid gap-5 sm:grid-cols-3">

                    <!-- Sender -->
                    <div>

                        <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">  From </p>

                        <p class="mt-2 text-sm font-medium text-gray-700">
                            {{ $message['name'] }}
                        </p>

                    </div>


                    <!-- Email -->
                    <div>

                        <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">Email</p>

                        <p class="mt-2 text-sm font-medium text-gray-700">{{ $message['email'] }}</p>

                    </div>


                    <!-- Date -->
                    <div>

                        <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">Received</p>

                        <p class="mt-2 text-sm font-medium text-gray-700">{{ $message['created_at']->format('Y-M-d H:i:s') }}</p>

                    </div>

                </div>

            </div>


            <!-- Actions -->
            <div class="border-t border-gray-200 bg-gray-50
                        px-6 py-5 sm:px-8">

                <div class="flex flex-col gap-3 sm:flex-row
                            sm:justify-between">

                    <!-- Delete -->
                    <button
                        type="button"
                        class="inline-flex items-center justify-center
                               gap-2 rounded-xl border border-red-200
                               bg-white px-5 py-3 text-sm font-semibold
                               text-red-600 transition
                               hover:bg-red-50
                               focus:outline-none
                               focus:ring-4 focus:ring-red-100">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-5 w-5"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M19 7l-.867 12.142A2 2
                                     0 0116.138 21H7.862a2 2
                                     0 01-1.995-1.858L5 7m5
                                     4v6m4-6v6M9 7V4a1 1
                                     0 011-1h4a1 1 0
                                     011 1v3m-7 0h10"/>

                        </svg>

                        Delete Message

                    </button>


                    <!-- Reply -->
                    <button id="Show-Reply-Section"
                        type="button"
                        class="inline-flex items-center justify-center
                               gap-2 rounded-xl bg-blue-600 px-6 py-3
                               text-sm font-semibold text-white
                               shadow-sm transition
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
                                  d="M3 10l9-7 9 7-9 7-9-7z"/>

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M3 10v7l9 4 9-4v-7"/>

                        </svg>

                        Reply to Message

                    </button>

                </div>

            </div>

        </div>


        <!-- Reply Section -->
     <div class="min-h-0">
                <div id="Contact-Message-Reply-Section" class="mt-6 grid grid-rows-[0fr] overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm opacity-0 transition-all duration-500 ease-in-out">

            <div class="border-b border-gray-200 px-6 py-5 sm:px-8">

                <h2 class="text-lg font-bold text-gray-800">
                    Reply
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    Send a response to {{ $message['name'] }}.
                </p>

            </div>


            <div class="p-6 sm:p-8">

                <!-- Message -->
                <div>

                    <label for="reply"
                           class="mb-2 block text-sm font-semibold
                                  text-gray-700">

                        Your Message

                    </label>

                    <textarea
                        id="reply"
                        name="reply"
                        rows="7"
                        placeholder="Write your reply..."
                        class="w-full resize-none rounded-xl border
                               border-gray-300 bg-white px-4 py-3
                               text-sm text-gray-800
                               placeholder-gray-400 outline-none
                               transition
                               focus:border-blue-500
                               focus:ring-4 focus:ring-blue-100"
                    ></textarea>

                </div>


                <!-- Reply Actions -->
                <div class="mt-5 flex flex-col gap-3 sm:flex-row
                            sm:justify-end">

                    <button
                        type="button"
                        class="rounded-xl border border-gray-300
                               bg-white px-6 py-3 text-sm font-semibold
                               text-gray-700 transition
                               hover:bg-gray-50">

                        Cancel

                    </button>

                    <button
                        type="button"
                        class="inline-flex items-center justify-center
                               gap-2 rounded-xl bg-blue-600 px-7 py-3
                               text-sm font-semibold text-white
                               shadow-sm transition
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
                                  d="M3 10l9-7 9 7-9 7-9-7z"/>

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M3 10v7l9 4 9-4v-7"/>

                        </svg>

                        Send Reply

                    </button>

                </div>

            </div>

        </div>
     </div>
    </div>

</div>
@endsection