<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agent Login | Invoice Generator</title>

    @vite(['resources/css/app.css'])
</head>

<body class="min-h-screen bg-gray-100">

    <div class="flex min-h-screen items-center justify-center px-4 py-12">

        <div class="w-full max-w-md">


            <!-- Logo / Header -->
            <div class="mb-8 text-center">

                <div class="mx-auto flex h-14 w-14 items-center
                            justify-center rounded-2xl bg-sky-600
                            text-xl font-bold text-white shadow-sm">

                    IG

                </div>

                <h1 class="mt-5 text-2xl font-bold text-gray-800">
                    Agent Login
                </h1>

                <p class="mt-2 text-sm text-gray-500">
                    Sign in to access your invoice dashboard
                </p>

            </div>



            <!-- Login Card -->
            <div class="rounded-2xl border border-gray-200
                        bg-white p-8 shadow-sm">


                <!-- Error Message -->
                @if ($errors->any())

                    <div class="mb-6 rounded-xl border border-red-200
                                bg-red-50 px-4 py-3">

                        <div class="flex gap-3">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5 shrink-0 text-red-500"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M12 9v3.75m0 3h.008v.008H12V15.75z
                                         M10.29 3.86l-7.1 12.25A2 2 0
                                         004.92 19h14.16a2 2 0 001.73-2.89
                                         l-7.1-12.25a2 2 0 00-3.42 0z"/>

                            </svg>

                            <div>

                                <p class="text-sm font-medium text-red-700">
                                    Unable to sign in
                                </p>

                                <ul class="mt-1 text-xs text-red-600">

                                    @foreach ($errors->all() as $error)

                                        <li>
                                            {{ $error }}
                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        </div>

                    </div>

                @endif



                <!-- Login Form -->
                <form action="{{ route('AgentLogin') }}"
                      method="POST"
                      class="space-y-5">

                    @csrf


                    <!-- Email -->
                    <div>

                        <label for="email"
                               class="mb-2 block text-sm font-medium
                                      text-gray-700">

                            Email address

                        </label>

                        <input
                            type="email"
                            name="email"
                            id="email"
                            value="{{ old('email') }}"
                            placeholder="agent@example.com"
                            required
                            autocomplete="email"
                            class="w-full rounded-xl border border-gray-300
                                   bg-white px-4 py-3 text-sm text-gray-800
                                   outline-none transition
                                   placeholder:text-gray-400
                                   focus:border-sky-500
                                   focus:ring-4 focus:ring-sky-100">

                    </div>



                    <!-- Password -->
                    <div>

                        <div class="mb-2 flex items-center justify-between">

                            <label for="password"
                                   class="block text-sm font-medium
                                          text-gray-700">

                                Password

                            </label>

                            <a href="#"
                               class="text-xs font-medium text-sky-600
                                      hover:text-sky-700 hover:underline">

                                Forgot password?

                            </a>

                        </div>


                        <input
                            type="password"
                            name="password"
                            id="password"
                            placeholder="Enter your password"
                            required
                            autocomplete="current-password"
                            class="w-full rounded-xl border border-gray-300
                                   bg-white px-4 py-3 text-sm text-gray-800
                                   outline-none transition
                                   placeholder:text-gray-400
                                   focus:border-sky-500
                                   focus:ring-4 focus:ring-sky-100">

                    </div>



                    <!-- Remember Me -->
                    <div class="flex items-center">

                        <label class="flex cursor-pointer items-center gap-2">

                            <input
                                type="checkbox"
                                name="remember"
                                class="h-4 w-4 rounded border-gray-300
                                       text-sky-600
                                       focus:ring-sky-500">

                            <span class="text-sm text-gray-600">
                                Remember me
                            </span>

                        </label>

                    </div>



                    <!-- Login Button -->
                    <button
                        type="submit"
                        class="w-full rounded-xl bg-sky-600 px-4 py-3
                               text-sm font-semibold text-white
                               shadow-sm transition
                               hover:bg-sky-700
                               focus:outline-none
                               focus:ring-4 focus:ring-sky-200
                               active:scale-[0.99]">

                        Sign in

                    </button>

                </form>

            </div>



            <!-- Footer -->
            <p class="mt-6 text-center text-xs text-gray-400">

                © {{ date('Y') }} Questagltd.com
                All rights reserved.

            </p>

        </div>

    </div>

</body>

</html>