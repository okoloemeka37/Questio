 @extends('layouts.nuetral')

@section('title', 'Questiontag Limited_Login')

@section('content')
 <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-purple-50 to-pink-100">
      <div class="w-full max-w-md bg-white rounded-3xl shadow-2xl p-8 space-y-6">
        <div class="text-center">
          <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-500 text-white rounded-full mb-4 text-3xl">
            🔑
          </div>
          <h1 class="text-3xl font-bold text-gray-800">Welcome Back</h1>
          <p class="text-gray-500 mt-2">Log in to continue</p>
        </div>

        @error('failed')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
      @enderror
        <form class="space-y-4" method="POST" action="{{route('OwnerLoginPost')}}">
        @csrf
         <!--  {error.message && <div class="bg-red-100 text-red-700 border border-red-300 rounded-lg px-4 py-3">    <p class="text-sm">{error.message}</p></div>}-->
          <div>
            <label class="block text-gray-600 text-sm mb-1">UserName</label>
            <input type="text"  placeholder="UserName" value="{{ @old('username')}}" name="username" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none transition"  />
                 @error('username')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
          </div>

          <div>
            <label class="block text-gray-600 text-sm mb-1">Password</label> 
            <div class='flex items-baseline w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none transition'>
                <input class='w-full outline-0' name="password" type="text" placeholder="••••••••" value=""  />
                
            </div>
              @error('password')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

          </div>

          <button type="submit" class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white py-3 rounded-xl font-semibold  hover:from-blue-700 hover:to-purple-700  transition-all shadow-md">

      <span>Login</span>
    </button>
        </form>

      </div>
    </div>

  

    @endsection