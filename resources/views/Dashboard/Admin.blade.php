@extends('layouts.app')

@section('title', 'Home')

@section('content')

@php
    $actions = [
        [
            'title'       => 'Field',
            'description' => 'Add new invoice fields',
            'icon'        => '<x-lucide-plus-circle class="w-6 h-6/>', // Use an icon identifier or SVG string
            'color'       => 'bg-blue-500',
            'link'        => url('Dashboard/Field/CreateField'),
        ],
        [
            'title'       => 'Agent',
            'description' => 'Register a new agent',
            'icon'        =>'',
            'color'       => 'bg-green-500',
            'link'        => url('Dashboard/Agent/CreateAgent'),
        ],
        [
            'title'       => 'Parameters',
            'description' => 'Configure invoice rules',
            'icon'        => 'heroicon-o-cog',
            'color'       => 'bg-purple-500',
            'link'        => url('Field/CreateField'),
        ],
        [
            'title'       => 'Invoice',
            'description' => 'Create a new invoice',
            'icon'        => 'file-invoice',
            'color'       => 'bg-orange-500',
            'link'        => url('Field/CreateField'),
        ],
    ];
@endphp



<div class="min-h-screen bg-gray-100">

      
      <div class="max-w-7xl mx-auto p-6">

        
        <h2 class="text-2xl font-semibold mb-6">Dashboard</h2>

        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

         <?php foreach ($actions as $item) {?>
             <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition cursor-pointer">
              <div class="flex justify-between">
                  <p class="w-12 h-12 flex items-center justify-center rounded-lg text-white {{$item['color']}}" {{-- onClick={()=>setdisType(`C${$item.title}`)} --}}>'{{$item['icon']}}</p>
                  <p class="w-12 h-12 flex items-center justify-center rounded-lg text-white {{$item['color']}}" {{-- onClick={()=>setdisType($item.title)} --}}> {{$item['link']}}</p>
              </div>
              <h3 class="mt-4 text-lg font-semibold">{{$item['title']}} </h3>

              <p class="text-gray-500 text-sm mt-1"> {{$item['description']}} </p>

              <button class="mt-4 text-indigo-600 font-medium hover:underline">Open →</button>
            </div>
         <?php }?>

        </div>

      </div>

         {{-- {type[disType]}
 --}}
    </div>


@endsection
