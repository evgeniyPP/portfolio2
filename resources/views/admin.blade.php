@extends('layouts.admin')

@section('content')
<div class="flex items-center min-h-screen">
  <div class="max-w-screen-xl px-4 py-12 mx-auto text-center sm:px-6 lg:py-16 lg:px-8">
    <h2 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
      Что делаем?
    </h2>
    <div class="flex justify-center mt-10">
      <div class="inline-flex rounded-md shadow">
        <a href="{{ route('admin.edit') }}" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium leading-6 text-white transition duration-300 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:shadow-outline sm:px-8 sm:py-4 sm:text-lg">
          Меняем
        </a>
      </div>
      <div class="inline-flex ml-5">
        <a href="{{ route('admin.add') }}" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium leading-6 text-indigo-700 transition duration-300 ease-in-out bg-indigo-200 border border-transparent rounded-md hover:text-indigo-600 hover:bg-indigo-100 focus:outline-none focus:shadow-outline focus:border-indigo-300 sm:px-8 sm:py-4 sm:text-lg">
          Добавляем
        </a>
      </div>
    </div>
  </div>
  <div class="absolute bottom-0 right-0 mb-4 mr-6">
    <a href="{{ route('index') }}" class="block text-indigo-900 hover:underline focus:outline-none focus:underline active:text-indigo-200">На главную</a>
  </div>

  @if(!auth()->check())
    <x-alert.warning message='Смотреть можно, трогать нельзя. <br> Чтобы что-то менять, <a href="/login" class="font-medium underline">авторизуйтесь</a>.' />
  @endif
</div>
@endsection
