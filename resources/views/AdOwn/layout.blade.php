<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Questiontag Limited')</title>
    <script src="https://kit.fontawesome.com/d335dcf51b.js" crossorigin="anonymous"></script>

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
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Sign out</a>
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


<!-- Right Messages Sidebar -->
<aside id="SideMsg" class="hidden fixed top-15 right-0 h-screen w-96 bg-white border-l border-gray-200 shadow-2xl flex-col">

    <!-- Header -->
    <div class="flex items-center justify-between px-6 py-5 border-b bg-gradient-to-r from-sky-600 to-blue-600">
        <div>
            <h2 class="text-xl font-bold text-white">
                Notifications
            </h2>
            <p class="text-sm text-sky-100">{{ count($notifications) }}</p>
        </div>

        <button id="closeSideMsg" class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 text-white transition">
            ✕
        </button>
    </div>

    <!-- Search -->
    <div class="p-4 border-b bg-gray-50">
        <input
            type="text"
            placeholder="Search messages..."
            class="w-full rounded-xl border border-gray-200 px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-sky-500"
        >
    </div>

    <!-- Messages -->
    <div class="flex-1 overflow-y-auto">

          @foreach ($notifications as $note )
              <!-- Item -->
        <button class="group w-full text-left px-5 py-4 hover:bg-gray-50 transition">
            <div class="flex items-start gap-3">

                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-purple-500 text-white font-bold">
                    {{ substr($note['name'],0,1) }}
                </div>

                <div class="flex-1 min-w-0">
                    <div class="flex justify-between">
                        <h3 class="font-semibold text-gray-900">{{ $note['name'] }}</h3>

                        <span class="text-xs text-gray-400">
                           {{ $note->created_at->format('M d') }}
                        </span>
                    </div>
                    <p class="mt-1 text-xs text-gray-500 truncate">{{ $note['summary'] }}...</p>
                </div>

            </div>
        </button>
          @endforeach      

    </div>

</aside>

    <main>
        @yield('content')
    </main>


</body>
</html>