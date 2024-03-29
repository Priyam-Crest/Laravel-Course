<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel Livewire Poll</title>

  <script src="https://cdn.tailwindcss.com"></script>

  {{-- blade-formatter-disable --}}
  <style type="text/tailwindcss">
    .btn {
      @apply rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50
    }
    label {
      @apply block uppercase text-slate-700 mb-2
    }
    input, 
    textarea {
      @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
    }
    .error {
      @apply text-red-500 text-sm
    }
  </style>
  {{-- blade-formatter-enable --}}

  {{-- @livewireStyles --}}
  <livewire:styles>
</head>

<body class="mx-10 my-10 max-w-5xl bg-slate-50 grid md:grid-cols-3 gap-6 grid-cols-1 md:mx-auto md:p-4">
  {{-- @livewireScripts --}}
  {{-- <livewire:scripts> --}}
    {{-- @livewire('create-poll') --}}
    <div>
      <h2 class="my-4 text-2xl text-indigo-700">Create Poll</h2>
      <livewire:create-poll>
    </div>

   
    
    <div class="col-span-2">
      <div class="my-4 text-2xl text-indigo-700 flex items-center">
        <div class="w-full">Available Polls</div>
        {{-- <div class="w-full"><input type="search" name="" id="" placeholder="Serch Poll"></div> --}}
      </div>
      <livewire:polls>
    </div>

</body>

</html>