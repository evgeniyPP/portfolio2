@extends('layouts.app')

@section('content')
<section class="flex flex-col justify-center max-w-lg min-h-screen py-6 mx-4 sm:mx-auto">
  <h2 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
    Изменить проект
  </h2>
  <livewire:edit-project />
</section>
@endsection
