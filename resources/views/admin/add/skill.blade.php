@extends('layouts.app')

@section('content')
<section class="flex flex-col justify-center max-w-lg min-h-screen py-6 mx-4 sm:mx-auto">
  <h2 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
    Добавить навык
  </h2>
  <form class="w-full mt-8">
    <div>
      <label for="name" class="block text-lg font-medium leading-5 text-gray-700">Название навыка</label>
      <div class="relative mt-3 border-2 rounded-md">
        <input id="name" class="block w-full p-2 form-input sm:text-lg sm:leading-5 focus:outline-none" placeholder="JavaScript" />
      </div>
    </div>
    <div class="w-24 mt-6">
      <label for="rank" class="block text-lg font-medium leading-5 text-gray-700">Уровень</label>
      <div class="relative mt-3 border-2 rounded-md">
        <input id="rank" type="number" class="block w-full p-2 form-input sm:text-lg sm:leading-5 focus:outline-none" placeholder="242" min="0" max="300" />
      </div>
    </div>
    <div class="mt-6">
      <label for="logo" class="block text-lg font-medium leading-5 text-gray-700">Font Awesome классы для лого</label>
      <div class="relative mt-3 border-2 rounded-md">
        <input id="logo" class="block w-full p-2 form-input sm:text-lg sm:leading-5 focus:outline-none" placeholder="fab fa-js-square" />
      </div>
    </div>
    <div class="mt-6">
      <label for="type" class="block text-lg font-medium leading-5 text-gray-700">Тип</label>
      <select id="type" class="block w-full p-2 mt-3 text-base leading-6 border-2 border-gray-300 rounded-md form-select focus:outline-none sm:text-lg sm:leading-5">
        <option selected>Основной</option>
        <option>Дополнительный</option>
      </select>
    </div>

    <div class="pt-5 mt-6">
      <div class="flex justify-start">
        <span class="inline-flex mr-3 rounded-md shadow-sm">
          <button type="submit" class="inline-flex justify-center px-6 py-2 text-base font-medium leading-6 text-center text-indigo-700 transition duration-300 ease-in-out bg-indigo-200 border border-transparent rounded-md hover:bg-indigo-100 focus:outline-none focus:border-indigo-500 focus:shadow-outline-indigo active:bg-indigo-200">
            Добавить
          </button>
        </span>
        <span class="inline-flex rounded-md shadow-sm">
          <a href="{{ route('admin.add') }}" class="px-6 py-2 text-base font-medium leading-5 text-gray-700 transition duration-300 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-500 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800">
            Назад
          </a>
        </span>
      </div>
    </div>
  </form>
</section>
@endsection
