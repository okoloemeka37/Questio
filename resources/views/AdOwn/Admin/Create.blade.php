@extends('AdOwn.layout')

@section('content')

<div class="min-h-screen bg-slate-100 py-10">

    <div class="mx-auto max-w-5xl">

        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-slate-900">
                Create Profile
            </h1>

            <p class="mt-2 text-slate-600">
                Create a new client or administrator profile.
            </p>
        </div>

        <!-- Form Card -->
        <div class="rounded-3xl bg-white p-10 shadow-sm">

            <form method="POST" class="space-y-8" action={{ route('createAdmins')}}>

                @csrf

                <!-- Basic Information -->
                <div>
                       @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
@endforeach
                    <h2 class="mb-6 text-xl font-semibold text-slate-800">
                        Personal Information
                    </h2>

                    <div class="grid gap-6 md:grid-cols-2">

                        <div>

                            <label class="mb-2 block font-medium text-slate-700">
                                Full Name
                            </label>

                            <input type="text"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3 outline-none transition focus:border-sky-500 focus:ring-2 focus:ring-sky-100"
                                placeholder="John Doe" name="fullname" value="{{ @old('fullname') }}">
                            @error('fullname')
                           <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            </div>

                        <div>
                            <label class="mb-2 block font-medium text-slate-700">
                                Email Address
                            </label>

                            <input
                                type="email"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3 outline-none transition focus:border-sky-500 focus:ring-2 focus:ring-sky-100"
                                placeholder="john@example.com" name="email" value="{{ @old('email') }}">
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                        </div>

                    </div>

                </div>

                <!-- Company -->
                <div>

                    <h2 class="mb-6 text-xl font-semibold text-slate-800">
                        Company Details
                    </h2>

                    <div class="grid gap-6 md:grid-cols-2">

                        <div>
                            <label class="mb-2 block font-medium text-slate-700">
                                Company Name
                            </label>

                            <input
                                type="text"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3 outline-none transition focus:border-sky-500 focus:ring-2 focus:ring-sky-100"
                                placeholder="ABC Limited" name="company" value="{{ @old('company') }}">
                                @error('company')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                        </div>

                        <!-- Dropdown -->
                        <div>

                            <label class="mb-2 block font-medium text-slate-700">
                                Assign Software
                            </label>

                            <select
                                class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-sky-500 focus:ring-2 focus:ring-sky-100" name="tool">

                                <option>Select Software</option>

                                <option>Invoice Generator</option>

                                <option>Payroll Manager</option>

                                <option>Inventory Manager</option>

                                <option>Tax Manager</option>

                                <option>POS System</option>

                            </select>
                            @error('tool')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>

                </div>

                <!-- Account -->
                <div>

                    <h2 class="mb-6 text-xl font-semibold text-slate-800">
                        Account Information
                    </h2>

                    <div class="grid gap-6 md:grid-cols-2">

                        <div>
                            <label class="mb-2 block font-medium text-slate-700">
                                Username
                            </label>

                            <input
                                type="text"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3 outline-none transition focus:border-sky-500 focus:ring-2 focus:ring-sky-100"
                                placeholder="username" name="username" value="{{ @old('username') }}">
                                @error('username')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                        </div>

                        <div>
                            <label class="mb-2 block font-medium text-slate-700">
                                Password
                            </label>

                            <input
                                type="password"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3 outline-none transition focus:border-sky-500 focus:ring-2 focus:ring-sky-100"
                                placeholder="********" name="password">
                                @error('password')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                        </div>

                    </div>

                </div>

                <!-- Notes -->
                <div>

                    <label class="mb-2 block font-medium text-slate-700">
                        Notes
                    </label>

                    <textarea
                        rows="5"
                        class="w-full rounded-xl border border-slate-300 px-4 py-3 outline-none transition focus:border-sky-500 focus:ring-2 focus:ring-sky-100"
                        placeholder="Additional information..." name="note" >{{ @old('fullname') }}</textarea>
                        @error('note')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                </div>

                <!-- Buttons -->
                <div class="flex justify-end gap-4">

                    <button
                        type="reset"
                        class="rounded-xl border border-slate-300 px-6 py-3 font-medium text-slate-700 transition hover:bg-slate-100">

                        Cancel

                    </button>

                    <button
                        type="submit"
                        class="rounded-xl bg-sky-600 px-8 py-3 font-semibold text-white transition hover:bg-sky-700">

                        Create Profile

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection