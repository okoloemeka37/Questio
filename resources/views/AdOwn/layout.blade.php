<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Questiontag Limited')</title>
    <script src="https://kit.fontawesome.com/d335dcf51b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    @vite(['resources/css/app.css','resources/js/admin.js'])
</head>
<body>



<nav class="relative bg-gray-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
    
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <!-- Logo -->
        <a href="/" class="flex items-center gap-3">
            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gradient-to-r from-sky-600 to-cyan-500 text-xl font-bold text-white shadow-lg">Q</div>

            <div>
                <h1 class="text-xl font-bold text-slate-900">
                    Questiontag
                </h1>
                <p class="-mt-1 text-xs tracking-widest text-slate-500 uppercase">
                    Accounting Limited
                </p>
            </div>
        </a>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
            <a href="#" aria-current="page" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Dashboard</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Team</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Projects</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Calendar</a>
          </div>
        </div>
      </div>
      <div  class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <button id="viewNote" type="button" class="relative rounded-full p-1 text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
          <span class="absolute -inset-1.5"></span>
          <span class="sr-only">View notifications</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
            <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>

        <!-- Profile dropdown -->
        <el-dropdown class="relative ml-3">
          <button class="relative flex rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">Open user menu</span>
            <i class="fa-regular fa-user"></i>
          </button>

          <el-menu anchor="bottom end" popover class="w-48 origin-top-right rounded-md bg-white py-1 shadow-lg outline outline-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Your profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Settings</a>
            <form action="{{ route("owner.logout") }}" method="POST">@csrf<button type="submit" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Sign out</button></form>  
          </el-menu>
        </el-dropdown>
      </div>
    </div>
  </div>

  <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
    <div class="space-y-1 px-2 pt-2 pb-3">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
      <a href="#" aria-current="page" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Dashboard</a>
      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Team</a>
      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Projects</a>
      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Calendar</a>
    </div>
  </el-disclosure>
</nav>

    <main>

       <!-- Header -->
    <div class="border-b border-slate-200 bg-white">

        <div class="mx-auto flex max-w-7xl items-center justify-between px-8 py-6">

            <div>
                          <a href="{{route('quesAdmin')}}" ><h1 class="text-3xl font-bold text-slate-900">{{auth('owner')->user()->username}}</h1></a>

                <p class="mt-1 text-slate-500">
                    Welcome back. Here's an overview of QuestionTag.
                </p>
            </div>

            <a href="{{route('createAdminsIndex')}}" ><button class="rounded-xl bg-sky-600 px-6 py-3 font-semibold text-white transition hover:bg-sky-700"> + Create Profile</button></a>

        </div>

    </div>

        @yield('content')
    </main>


</body>
</html>