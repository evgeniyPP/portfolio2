@extends('layouts.admin')

@section('content')
<div class="flex items-center min-h-screen">
  <div class="max-w-screen-xl px-4 py-12 mx-auto text-center sm:px-6 lg:py-16 lg:px-8">
    <h2 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
      Что добавляем?
    </h2>
    <div class="flex flex-col items-center justify-center mt-10">
      <a href="{{ route('admin.add.project') }}" class="w-64 py-3 text-base font-medium leading-6 text-center text-indigo-700 transition duration-300 ease-in-out bg-indigo-200 border border-transparent rounded-md hover:bg-indigo-100 focus:outline-none focus:border-indigo-500 focus:shadow-outline-indigo active:bg-indigo-200 sm:text-lg">
        Проект
      </a>
      <a href="{{ route('admin.add.link') }}" class="w-64 py-3 mt-4 text-base font-medium leading-6 text-center text-indigo-700 transition duration-300 ease-in-out bg-indigo-200 border border-transparent rounded-md hover:bg-indigo-100 focus:outline-none focus:border-indigo-500 focus:shadow-outline-indigo active:bg-indigo-200 sm:text-lg">
        Ссылку
      </a>
      <a href="{{ route('admin.add.skill') }}" class="w-64 py-3 mt-4 text-base font-medium leading-6 text-center text-indigo-700 transition duration-300 ease-in-out bg-indigo-200 border border-transparent rounded-md hover:bg-indigo-100 focus:outline-none focus:border-indigo-500 focus:shadow-outline-indigo active:bg-indigo-200 sm:text-lg">
        Навык
      </a>
      <a href="{{ route('admin.add.contact') }}" class="w-64 py-3 mt-4 text-base font-medium leading-6 text-center text-indigo-700 transition duration-300 ease-in-out bg-indigo-200 border border-transparent rounded-md hover:bg-indigo-100 focus:outline-none focus:border-indigo-500 focus:shadow-outline-indigo active:bg-indigo-200 sm:text-lg">
        Контакт
      </a>

      <a href="{{ route('admin') }}" class="mt-8 text-indigo-900 focus:outline-none focus:font-bold active:text-indigo-200">Назад</a>
    </div>
  </div>
</div>
@endsection
