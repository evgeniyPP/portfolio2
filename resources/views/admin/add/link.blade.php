@extends('layouts.app')

@section('content')
<section class="flex flex-col justify-center max-w-lg min-h-screen mx-4 sm:mx-auto">
  <h2 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
    Добавить ссылку
  </h2>
  <form class="w-full mt-8">
    <div>
      <label for="title" class="block text-lg font-medium leading-5 text-gray-700">Заголовок ссылки</label>
      <div class="relative mt-3 border-2 rounded-md">
        <input id="title" class="block w-full px-2 py-2 form-input sm:text-lg sm:leading-5 focus:outline-none" placeholder="Github" />
      </div>
    </div>
    <div class="mt-6">
      <label for="link" class="block text-lg font-medium leading-5 text-gray-700">Cсылка</label>
      <div class="relative mt-3 border-2 rounded-md">
        <input id="link" class="block w-full px-2 py-2 form-input sm:text-lg sm:leading-5 focus:outline-none" placeholder="https://github.com/evgeniyPP" />
      </div>
    </div>
    <div class="mt-6">
      <label for="logo" class="block text-lg font-medium leading-5 text-gray-700">Font Awesome классы для лого</label>
      <div class="relative mt-3 border-2 rounded-md">
        <input id="logo" class="block w-full px-2 py-2 form-input sm:text-lg sm:leading-5 focus:outline-none" placeholder="fab fa-github" />
      </div>
    </div>
    <div class="mt-6">
      <label for="description" class="block text-lg font-medium leading-5 text-gray-700">Описание</label>
      <div class="relative mt-3 border-2 rounded-md">
        <textarea id="description" class="block w-full px-2 py-2 form-input sm:text-lg sm:leading-5 focus:outline-none" placeholder="Ниже идет список..."></textarea>
      </div>
    </div>

    <div class="pt-5 mt-6">
      <div class="flex justify-end">
        <span class="inline-flex rounded-md shadow-sm">
          <a href="{{ route('admin.add') }}" class="px-6 py-3 text-base font-medium leading-5 text-gray-700 transition duration-300 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-500 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800">
            Назад
          </a>
        </span>
        <span class="inline-flex ml-3 rounded-md shadow-sm">
          <button type="submit" class="inline-flex justify-center px-6 py-3 text-base font-medium leading-5 text-white transition duration-300 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-200 focus:shadow-outline-indigo active:bg-indigo-700">
            Добавить
          </button>
        </span>
      </div>
    </div>
  </form>
</section>
@endsection
