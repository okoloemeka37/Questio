@extends('Tools.Invoice.layout.lay')

@section('title',"View Fields")

@section('content')

<div class="min-h-screen bg-gray-100">

    <main class="mx-auto max-w-6xl px-6 py-8">

        <!-- Back -->
        <div class="mb-6">

            <a href="#"
               class="inline-flex items-center gap-2 text-sm font-medium
                      text-gray-500 transition hover:text-sky-600">

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


        <!-- Header -->
        <div class="mb-8 flex flex-col justify-between gap-4
                    sm:flex-row sm:items-center">

            <div>

                <p class="text-sm font-medium text-sky-600">
                    Field Details
                </p>

                <h1 class="mt-1 text-2xl font-bold text-gray-800">
                    Customer Field
                </h1>

                <p class="mt-1 text-sm text-gray-500">
                    View and manage this invoice field.
                </p>

            </div>


            <!-- Actions -->
            <div class="flex items-center gap-3">

                <a href="{{ route('InvoiceEditFieldGet',['id'=>$field['id']]) }}"
                   class="inline-flex items-center gap-2 rounded-xl
                          border border-gray-300 bg-white px-4 py-2.5
                          text-sm font-semibold text-gray-700
                          shadow-sm transition hover:bg-gray-50">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-4 w-4"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M16.862 4.487l1.687-1.688
                                 a1.875 1.875 0 112.652 2.652L10.582
                                 16.07a4.5 4.5 0 01-1.897 1.13L6
                                 18l.8-2.685a4.5 4.5 0
                                 011.13-1.897L16.862 4.487z"/>

                    </svg>

                    Edit Field

                </a>

            </div>

        </div>

 <div id="successBanner" class="hidden fixed top-20 right-0 z-30 animate-pulse rounded-xl bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4 text-center text-white font-semibold shadow-lg"> ✅ Status updated successfully.</div>

        <div id="errorBanner" class="hidden fixed top-20 right-0 z-30 animate-pulse rounded-xl bg-gradient-to-r from-red-300 to-red-600 px-6 py-4 text-center text-white font-semibold shadow-lg"> Something went wrong: </div>


        <!-- Main Grid -->
        <div class="grid gap-6 lg:grid-cols-3">


            <!-- =====================================================
                 FIELD INFORMATION
            ====================================================== -->
            <div class="lg:col-span-2">

                <div class="overflow-hidden rounded-2xl border
                            border-gray-200 bg-white shadow-sm">

                    <!-- Card Header -->
                    <div class="border-b border-gray-100 px-6 py-5">

                        <h2 class="text-lg font-bold text-gray-800">
                            Field Information
                        </h2>

                        <p class="mt-1 text-sm text-gray-500">
                            Details associated with this invoice field.
                        </p>

                    </div>


                    <!-- Details -->
                    <div class="grid gap-x-8 gap-y-6 p-6 sm:grid-cols-2">


                        <!-- Name -->
                        <div>

                            <p class="text-xs font-medium uppercase
                                      tracking-wide text-gray-400">
                                Name
                            </p>

                            <p class="mt-2 text-sm font-semibold text-gray-800">{{ $field['name'] }} </p>

                        </div>


                        <!-- Email -->
                        <div>

                            <p class="text-xs font-medium uppercase
                                      tracking-wide text-gray-400">
                                Email Address
                            </p>

                            <p class="mt-2 text-sm font-semibold text-gray-800">{{ $field['email'] }} </p>

                        </div>


                        <!-- Phone -->
                        <div>

                            <p class="text-xs font-medium uppercase
                                      tracking-wide text-gray-400">
                                Phone Number
                            </p>

                            <p class="mt-2 text-sm font-semibold text-gray-800">{{ $field['phone'] }} </p>

                        </div>


                        <!-- Tracking ID -->
                        <div>

                            <p class="text-xs font-medium uppercase
                                      tracking-wide text-gray-400">
                                Tracking ID
                            </p>

                            <p class="mt-2 inline-flex rounded-lg
                                      bg-gray-100 px-3 py-1.5
                                      text-sm font-medium text-gray-700">{{ $field['Tracking_Id'] }}  </p>

                        </div>


                        <!-- Address -->
                        <div class="sm:col-span-2">

                            <p class="text-xs font-medium uppercase
                                      tracking-wide text-gray-400">
                                Address
                            </p>

                            <p class="mt-2 text-sm font-semibold
                                      leading-6 text-gray-800">{{ $field['address'] }} </p>

                        </div>


                        <!-- Status -->
                        <div>

                            <p class="text-xs font-medium uppercase
                                      tracking-wide text-gray-400">
                                Status
                            </p>

                            <span class="mt-2 inline-flex items-center
                                         gap-2 rounded-full 
                                         px-3 py-1.5 text-xs font-semibold
                                          {{ $field['active'] == 'Active'
           ? 'bg-green-100 text-green-700'
           : 'bg-red-100 text-red-700' }}">

                                <span class="h-2 w-2 rounded-full
                                            {{$field['active']=='Active'?'bg-green-500':'bg-red-500'}}">
                                </span>{{ $field['active'] }}  </span>

                        </div>


                        <!-- Created -->
                        <div>

                            <p class="text-xs font-medium uppercase
                                      tracking-wide text-gray-400">
                                Created
                            </p>

                            <p class="mt-2 text-sm font-semibold
                                      text-gray-800">{{ $field['created_at']->format('M d,y')}} </p>

                        </div>

                    </div>

                </div>

            </div>



            <!-- =====================================================
                 AGENT ASSIGNMENT
            ====================================================== -->
            
            <div>

                <div class="rounded-2xl border border-gray-200
                            bg-white p-6 shadow-sm">

                    <!-- Header -->
                   <div id="loadingBar" class="opacity-0 h-1 w-full overflow-hidden bg-gray-100"><div class="h-full w-1/3 animate-[loading_1.5s_ease-in-out_infinite] bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500"></div></div>

                    <div class="mb-5">

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
                                      d="M15 19a4 4 0
                                         10-8 0m8 0a4 4
                                         0 018 0m-8-8a4
                                         4 0 11-8 0 4 4
                                         0 018 0z"/>

                            </svg>

                        </div>

                        <h2 class="mt-4 text-lg font-bold text-gray-800">
                            Assign Agent
                        </h2>

                        <p class="mt-1 text-sm leading-5 text-gray-500">
                            Select an agent responsible for this field.
                        </p>

                    </div>


                    <!-- Dropdown -->
                    <div>

                        <label for="agent"
                               class="mb-2 block text-sm font-medium
                                      text-gray-700">

                            Assigned Agent

                        </label>

                        <div class="relative">

                            <select
                                id="Chooseagent"
                                name="agent"
                                class="w-full appearance-none rounded-xl
                                       border border-gray-300
                                       bg-white px-4 py-3 pr-10
                                       text-sm text-gray-700
                                       outline-none transition
                                       focus:border-sky-500
                                       focus:ring-4 focus:ring-sky-100">

                                <option value="">
                                    Select an agent
                                </option>

                               @if (count($agents)===0)
                                   <p>No Agents Available</p>
                                @else
                                @foreach ($agents as $agent){
                                     <option value="{{ $agent['id']  }}" class="agent{{ $agent['id']  }}" name="{{ $agent['name'] }}" email="{{ $agent['email'] }}" id="{{ $agent['id'] }}">{{ $agent['name'] }}</option>
                                }
                                    
                                @endforeach
                               @endif

                               

                            </select>


                            <!-- Dropdown Icon -->
                            <div class="pointer-events-none absolute
                                        inset-y-0 right-0 flex
                                        items-center px-3
                                        text-gray-400">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-5 w-5"
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


                    <!-- Current Agent -->
                    <div class="mt-6 rounded-xl border
                                border-gray-200 bg-gray-50 p-4">

                        <p class="text-xs font-medium uppercase
                                  tracking-wide text-gray-400">
                            Currently Assigned
                        </p>

                        <div class="mt-3 flex items-center gap-3">

                            <div class="flex h-10 w-10 items-center
                                        justify-center rounded-full
                                        bg-sky-600 text-sm font-bold
                                        text-white" id="ChIcon"></div>

                            <div>

                                <p class="text-sm font-semibold text-gray-800" id="ChName"></p>

                                <p class="text-xs text-gray-500" id="ChEmail"></p>

                            </div>

                        </div>

                    </div>


                    <!-- Save -->
                    <button 
                        type="submit" field_id="{{ $field['id'] }}" a_Id="{{ $admin_id }}"
                        class="SaveChoiceAgent hidden mt-5 w-full rounded-xl
                               bg-sky-600 px-4 py-3
                               text-sm font-semibold text-white
                               shadow-sm transition
                               hover:bg-sky-700
                               focus:outline-none
                               focus:ring-4 focus:ring-sky-200">

                        Save Assignment

                    </button>

                </div>




                <!-- =====================================================
     ASSIGNED AGENTS
====================================================== -->
<div class="mt-6 rounded-2xl border border-gray-200
            bg-white shadow-sm">

    <!-- Header -->
    <div class="border-b border-gray-100 px-6 py-5">

        <div class="flex items-center justify-between">

            <div>

                <h2 class="text-lg font-bold text-gray-800">
                    Assigned Agents
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    Agents currently assigned to this field.
                </p>

            </div>

            <!-- Count -->
            <span
                class="inline-flex h-8 min-w-8 items-center justify-center
                       rounded-full bg-sky-50 px-2 text-sm font-semibold
                       text-sky-600" id="AgentsInFieldCount">{{ count($AgentsInField) }} </span>

        </div>

    </div>


    <!-- Agents List -->
    <div id="AgentList" class="divide-y divide-gray-100">


        <!-- Agent -->
       @if (count($AgentsInField)==0)
           <p>No Agent Assigned To This Field</p>
        @else
        
            @foreach ($AgentsInField as $gent)
                  <div class="flex items-center justify-between
                    gap-4 px-6 py-4">

            <div class="flex min-w-0 items-center gap-3">

                <!-- Avatar -->
                <div
                    class="flex h-10 w-10 shrink-0 items-center
                           justify-center rounded-full
                           bg-sky-100 text-sm font-bold
                           text-sky-700">{{ $gent['name'][0] }}</div>


                <!-- Details -->
                <div class="min-w-0">

                    <p class="truncate text-sm font-semibold
                              text-gray-800">{{ $gent['name'] }}   </p>

                    <p class="truncate text-xs text-gray-500">{{ $gent['email']}} </p>

                </div>

            </div>


            <!-- Remove -->
            <button 
                type="button"
                id="{{ $gent['id'] }}"  field_id="{{ $field['id'] }}" a_Id="{{ $admin_id }}" name="{{ $gent['name'] }}" email="{{ $gent['email'] }}"
                class="UnassignAgent shrink-0 rounded-lg p-2
                       text-gray-400 transition
                       hover:bg-red-50 hover:text-red-600"
                title="Remove agent">

                <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-5 w-5"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"/>

                </svg>

            </button>

        </div>
            
                
            @endforeach

       @endif

    </div>


    <!-- Footer -->
    <div class="border-t border-gray-100 bg-gray-50 px-6 py-3">

        <p class="text-xs text-gray-500"> Removing an agent will revoke their access to this field.</p>

    </div>

</div>


                <!-- Danger Zone -->
                <div class="mt-6 rounded-2xl border
                            border-red-100 bg-white p-6 shadow-sm">

                    <h3 class="text-sm font-bold text-gray-800">
                        Field Actions
                    </h3>

                    <p class="mt-1 text-xs leading-5 text-gray-500">
                        Be careful when performing actions on this field.
                    </p>

                    <button
                        type="button"
                        class="mt-4 w-full rounded-xl border
                               border-red-200 px-4 py-2.5
                               text-sm font-semibold text-red-600
                               transition hover:bg-red-50">

                        Delete Field

                    </button>

                </div>

            </div>

        </div>

    </main>

</div>

@endsection