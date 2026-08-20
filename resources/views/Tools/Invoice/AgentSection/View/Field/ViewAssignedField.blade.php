@extends('Tools.Invoice.layout.agent')

@section('title','Invoice Agent')

@section('content')



    <!-- =========================================================
         MAIN
    ========================================================== -->

    <main class="mx-auto max-w-7xl px-6 py-8">


        <!-- =====================================================
             BACK
        ====================================================== -->

        <div class="mb-6">

            <a href="#"
               class="inline-flex items-center gap-2 text-sm
                      font-medium text-gray-500 transition
                      hover:text-sky-600">

                <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-4 w-4"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M15 19l-7-7 7-7"/>

                </svg>

                Back to My Fields

            </a>

        </div>



        <!-- =====================================================
             FIELD HEADER
        ====================================================== -->

        <div class="rounded-2xl border border-gray-200
                    bg-white shadow-sm">

            <div class="p-6">

                <div class="flex flex-col gap-6
                            lg:flex-row lg:items-center
                            lg:justify-between">


                    <!-- Field Information -->
                    <div class="flex items-start gap-4">

                        <div class="flex h-14 w-14 shrink-0
                                    items-center justify-center
                                    rounded-2xl bg-sky-50
                                    text-sky-600">

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


                        <div>

                            <div class="flex flex-wrap items-center gap-3">

                                <h1 class="text-2xl font-bold text-gray-800">
                                    John Doe
                                </h1>

                                <span class="rounded-full bg-amber-50
                                             px-3 py-1 text-xs font-semibold
                                             text-amber-700">

                                    In Progress

                                </span>

                            </div>


                            <p class="mt-1 text-sm text-gray-500">
                                Invoice Field
                            </p>


                            <div class="mt-3 flex flex-wrap gap-x-5 gap-y-2">

                                <p class="text-xs text-gray-400">
                                    Tracking ID:
                                    <span class="font-medium text-gray-600">
                                        INV-2026-001
                                    </span>
                                </p>

                                <p class="text-xs text-gray-400">
                                    Created:
                                    <span class="font-medium text-gray-600">
                                        Aug 20, 2026
                                    </span>
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- Header Actions -->
                    <div class="flex flex-wrap gap-3">

                        <button
                            class="inline-flex items-center gap-2 rounded-xl
                                   border border-gray-200 bg-white
                                   px-4 py-2.5 text-sm font-semibold
                                   text-gray-700 transition
                                   hover:bg-gray-50">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="1.5"
                                      d="M12 6v6l4 2"/>

                            </svg>

                            Activity

                        </button>


                        <a href="#"
                           class="inline-flex items-center gap-2 rounded-xl
                                  bg-sky-600 px-4 py-2.5
                                  text-sm font-semibold text-white
                                  transition hover:bg-sky-700">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="1.5"
                                      d="M12 4v16m8-8H4"/>

                            </svg>

                            Create Invoice

                        </a>

                    </div>

                </div>

            </div>


            <!-- Status Progress -->
            <div class="border-t border-gray-100 px-6 py-5">

                <div class="flex items-center justify-between">

                    <span class="text-xs font-medium text-gray-500">
                        Field Progress
                    </span>

                    <span class="text-xs font-semibold text-sky-600">
                        60%
                    </span>

                </div>

                <div class="mt-2 h-2 overflow-hidden rounded-full bg-gray-100">

                    <div class="h-full w-[60%] rounded-full bg-sky-600">
                    </div>

                </div>

            </div>

        </div>



        <!-- =====================================================
             CONTENT
        ====================================================== -->

        <div class="mt-6 grid gap-6 lg:grid-cols-3">


            <!-- =================================================
                 LEFT / MAIN WORKSPACE
            ================================================== -->

            <div class="space-y-6 lg:col-span-2">


                <!-- CUSTOMER / FIELD INFORMATION -->
                <div class="rounded-2xl border border-gray-200
                            bg-white shadow-sm">

                    <div class="border-b border-gray-100 px-6 py-5">

                        <h2 class="text-lg font-bold text-gray-800">
                            Field Information
                        </h2>

                        <p class="mt-1 text-sm text-gray-500">
                            Customer information attached to this field.
                        </p>

                    </div>


                    <div class="grid gap-5 p-6 sm:grid-cols-2">


                        <!-- Name -->
                        <div>

                            <p class="text-xs font-medium uppercase
                                      tracking-wide text-gray-400">
                                Customer Name
                            </p>

                            <p class="mt-2 text-sm font-semibold text-gray-800">
                                John Doe
                            </p>

                        </div>


                        <!-- Email -->
                        <div>

                            <p class="text-xs font-medium uppercase
                                      tracking-wide text-gray-400">
                                Email
                            </p>

                            <p class="mt-2 text-sm font-semibold text-gray-800">
                                john@example.com
                            </p>

                        </div>


                        <!-- Phone -->
                        <div>

                            <p class="text-xs font-medium uppercase
                                      tracking-wide text-gray-400">
                                Phone
                            </p>

                            <p class="mt-2 text-sm font-semibold text-gray-800">
                                +234 801 234 5678
                            </p>

                        </div>


                        <!-- Address -->
                        <div>

                            <p class="text-xs font-medium uppercase
                                      tracking-wide text-gray-400">
                                Address
                            </p>

                            <p class="mt-2 text-sm font-semibold text-gray-800">
                                12 Example Street, Lagos
                            </p>

                        </div>


                        <!-- Tracking -->
                        <div>

                            <p class="text-xs font-medium uppercase
                                      tracking-wide text-gray-400">
                                Tracking ID
                            </p>

                            <p class="mt-2 text-sm font-semibold text-gray-800">
                                INV-2026-001
                            </p>

                        </div>


                        <!-- Created -->
                        <div>

                            <p class="text-xs font-medium uppercase
                                      tracking-wide text-gray-400">
                                Date Created
                            </p>

                            <p class="mt-2 text-sm font-semibold text-gray-800">
                                August 20, 2026
                            </p>

                        </div>

                    </div>

                </div>



                <!-- =================================================
                     WORK AREA
                ================================================== -->

                <div class="rounded-2xl border border-gray-200
                            bg-white shadow-sm">


                    <div class="border-b border-gray-100 px-6 py-5">

                        <h2 class="text-lg font-bold text-gray-800">
                            Work on Field
                        </h2>

                        <p class="mt-1 text-sm text-gray-500">
                            Update the information and processing status
                            for this field.
                        </p>

                    </div>


                    <div class="space-y-6 p-6">


                        <!-- Status -->
                        <div>

                            <label class="block text-sm font-semibold
                                          text-gray-700">

                                Field Status

                            </label>

                            <select
                                class="mt-2 w-full rounded-xl border
                                       border-gray-300 bg-white px-4 py-3
                                       text-sm text-gray-700 outline-none
                                       transition
                                       focus:border-sky-500
                                       focus:ring-4
                                       focus:ring-sky-100">

                                <option>Pending</option>
                                <option selected>In Progress</option>
                                <option>Completed</option>
                                <option>On Hold</option>

                            </select>

                        </div>


                        <!-- Notes -->
                        <div>

                            <label class="block text-sm font-semibold
                                          text-gray-700">

                                Work Notes

                            </label>

                            <textarea
                                rows="5"
                                placeholder="Add notes about the work done on this field..."
                                class="mt-2 w-full resize-none rounded-xl
                                       border border-gray-300 bg-white
                                       px-4 py-3 text-sm text-gray-700
                                       outline-none transition
                                       placeholder:text-gray-400
                                       focus:border-sky-500
                                       focus:ring-4
                                       focus:ring-sky-100"></textarea>

                            <p class="mt-2 text-xs text-gray-400">
                                These notes will be visible in the field
                                activity history.
                            </p>

                        </div>


                        <!-- Action Buttons -->
                        <div class="flex flex-col-reverse gap-3
                                    border-t border-gray-100 pt-5
                                    sm:flex-row sm:justify-end">

                            <button
                                type="button"
                                class="rounded-xl border border-gray-200
                                       px-5 py-2.5 text-sm font-semibold
                                       text-gray-600 transition
                                       hover:bg-gray-50">

                                Save Draft

                            </button>


                            <button
                                type="button"
                                class="rounded-xl bg-sky-600 px-5 py-2.5
                                       text-sm font-semibold text-white
                                       transition hover:bg-sky-700
                                       focus:outline-none
                                       focus:ring-4
                                       focus:ring-sky-100">

                                Save Changes

                            </button>

                        </div>

                    </div>

                </div>



                <!-- =================================================
                     ACTIVITY
                ================================================== -->

                <div class="rounded-2xl border border-gray-200
                            bg-white shadow-sm">

                    <div class="border-b border-gray-100 px-6 py-5">

                        <h2 class="text-lg font-bold text-gray-800">
                            Recent Activity
                        </h2>

                        <p class="mt-1 text-sm text-gray-500">
                            Recent actions performed on this field.
                        </p>

                    </div>


                    <div class="p-6">

                        <div class="space-y-6">


                            <!-- Activity -->
                            <div class="flex gap-4">

                                <div class="flex h-9 w-9 shrink-0
                                            items-center justify-center
                                            rounded-full bg-green-50
                                            text-green-600">

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

                                </div>


                                <div>

                                    <p class="text-sm text-gray-700">

                                        Field status changed to
                                        <span class="font-semibold">
                                            In Progress
                                        </span>

                                    </p>

                                    <p class="mt-1 text-xs text-gray-400">
                                        Today at 10:42 AM
                                    </p>

                                </div>

                            </div>


                            <!-- Activity -->
                            <div class="flex gap-4">

                                <div class="flex h-9 w-9 shrink-0
                                            items-center justify-center
                                            rounded-full bg-sky-50
                                            text-sky-600">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="h-5 w-5"
                                         fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor">

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M16 7a4 4 0
                                                 11-8 0 4 4 0
                                                 018 0zM12 14a7
                                                 7 0 00-7 7h14a7
                                                 7 0 00-7-7z"/>

                                    </svg>

                                </div>


                                <div>

                                    <p class="text-sm text-gray-700">

                                        You were assigned to this field.

                                    </p>

                                    <p class="mt-1 text-xs text-gray-400">
                                        Today at 9:20 AM
                                    </p>

                                </div>

                            </div>


                            <!-- Activity -->
                            <div class="flex gap-4">

                                <div class="flex h-9 w-9 shrink-0
                                            items-center justify-center
                                            rounded-full bg-gray-100
                                            text-gray-500">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="h-5 w-5"
                                         fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor">

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M12 8v4l3 2"/>

                                    </svg>

                                </div>


                                <div>

                                    <p class="text-sm text-gray-700">

                                        Field was created.

                                    </p>

                                    <p class="mt-1 text-xs text-gray-400">
                                        Today at 8:45 AM
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 RIGHT SIDEBAR
            ================================================== -->

            <div class="space-y-6">


                <!-- =================================================
                     ASSIGNED AGENTS
                ================================================== -->

                <div class="rounded-2xl border border-gray-200
                            bg-white shadow-sm">

                    <div class="border-b border-gray-100 px-5 py-4">

                        <div class="flex items-center justify-between">

                            <div>

                                <h2 class="text-base font-bold text-gray-800">
                                    Assigned Agents
                                </h2>

                                <p class="mt-1 text-xs text-gray-500">
                                    Agents working on this field.
                                </p>

                            </div>

                            <span class="rounded-full bg-sky-50
                                         px-2.5 py-1 text-xs font-semibold
                                         text-sky-600">

                                3

                            </span>

                        </div>

                    </div>


                    <div class="divide-y divide-gray-100">


                        <!-- Agent -->
                        <div class="flex items-center gap-3 px-5 py-4">

                            <div class="flex h-9 w-9 shrink-0
                                        items-center justify-center
                                        rounded-full bg-sky-100
                                        text-xs font-bold text-sky-700">

                                JA

                            </div>

                            <div class="min-w-0">

                                <p class="truncate text-sm font-semibold
                                          text-gray-800">

                                    John Agent

                                </p>

                                <p class="truncate text-xs text-gray-500">
                                    john.agent@example.com
                                </p>

                            </div>

                        </div>


                        <!-- Agent -->
                        <div class="flex items-center gap-3 px-5 py-4">

                            <div class="flex h-9 w-9 shrink-0
                                        items-center justify-center
                                        rounded-full bg-purple-100
                                        text-xs font-bold text-purple-700">

                                MA

                            </div>

                            <div class="min-w-0">

                                <p class="truncate text-sm font-semibold
                                          text-gray-800">

                                    Michael Agent

                                </p>

                                <p class="truncate text-xs text-gray-500">
                                    michael.agent@example.com
                                </p>

                            </div>

                        </div>


                        <!-- Agent -->
                        <div class="flex items-center gap-3 px-5 py-4">

                            <div class="flex h-9 w-9 shrink-0
                                        items-center justify-center
                                        rounded-full bg-green-100
                                        text-xs font-bold text-green-700">

                                SA

                            </div>

                            <div class="min-w-0">

                                <p class="truncate text-sm font-semibold
                                          text-gray-800">

                                    Sarah Agent

                                </p>

                                <p class="truncate text-xs text-gray-500">
                                    sarah.agent@example.com
                                </p>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- =================================================
                     FIELD STATUS
                ================================================== -->

                <div class="rounded-2xl border border-gray-200
                            bg-white p-5 shadow-sm">

                    <h2 class="text-base font-bold text-gray-800">
                        Field Status
                    </h2>


                    <div class="mt-5 space-y-4">


                        <!-- Pending -->
                        <div class="flex items-center gap-3">

                            <div class="h-3 w-3 rounded-full bg-gray-300">
                            </div>

                            <span class="text-sm text-gray-500">
                                Pending
                            </span>

                        </div>


                        <!-- Progress -->
                        <div class="flex items-center gap-3">

                            <div class="h-3 w-3 rounded-full bg-amber-400">
                            </div>

                            <span class="text-sm font-semibold text-gray-800">
                                In Progress
                            </span>

                        </div>


                        <!-- Completed -->
                        <div class="flex items-center gap-3">

                            <div class="h-3 w-3 rounded-full bg-green-500">
                            </div>

                            <span class="text-sm text-gray-500">
                                Completed
                            </span>

                        </div>

                    </div>

                </div>



                <!-- =================================================
                     FIELD ACTIONS
                ================================================== -->

                <div class="rounded-2xl border border-gray-200
                            bg-white p-5 shadow-sm">

                    <h2 class="text-base font-bold text-gray-800">
                        Field Actions
                    </h2>


                    <div class="mt-4 space-y-2">


                        <a href="#"
                           class="flex items-center gap-3 rounded-xl
                                  px-3 py-3 text-sm font-medium
                                  text-gray-700 transition
                                  hover:bg-gray-50">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5 text-sky-600"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="1.5"
                                      d="M12 4v16m8-8H4"/>

                            </svg>

                            Create Invoice

                        </a>


                        <a href="#"
                           class="flex items-center gap-3 rounded-xl
                                  px-3 py-3 text-sm font-medium
                                  text-gray-700 transition
                                  hover:bg-gray-50">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5 text-purple-600"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="1.5"
                                      d="M9 12h6m-6 4h6m2
                                         5H7a2 2 0 01-2-2V5a2
                                         2 0 012-2h7.586a2 2
                                         0 011.414.586l3.414
                                         3.414A2 2 0 0120 8.414V19
                                         a2 2 0 01-2 2z"/>

                            </svg>

                            View Invoices

                        </a>


                        <button
                            class="flex w-full items-center gap-3
                                   rounded-xl px-3 py-3 text-left
                                   text-sm font-medium text-gray-700
                                   transition hover:bg-gray-50">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5 text-amber-600"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="1.5"
                                      d="M8 12h8m-8 4h5m-8
                                         4h10a2 2 0 002-2V6a2
                                         2 0 00-2-2H7a2 2
                                         0 00-2 2v12a2 2
                                         0 002 2z"/>

                            </svg>

                            Add Note

                        </button>

                    </div>

                </div>


                <!-- =================================================
                     WARNING
                ================================================== -->

                <div class="rounded-2xl border border-amber-200
                            bg-amber-50 p-5">

                    <div class="flex gap-3">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-5 w-5 shrink-0 text-amber-600"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1.5"
                                  d="M12 9v3.75m0
                                     3.75h.008v.008H12V16.5z
                                     M10.29 3.86L1.82
                                     18a2 2 0 001.72 3h16.92
                                     a2 2 0 001.72-3L13.71
                                     3.86a2 2 0 00-3.42 0z"/>

                        </svg>


                        <div>

                            <p class="text-sm font-semibold
                                      text-amber-800">

                                Important

                            </p>

                            <p class="mt-1 text-xs leading-5
                                      text-amber-700">

                                Make sure all field information is
                                verified before creating the invoice.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

    @endsection