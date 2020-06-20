@extends('layouts.app')

@section('content')
<section class="flex flex-col justify-center max-w-lg min-h-screen py-6 mx-4 sm:mx-auto">
  <h2 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
    Добавить проект
  </h2>
  <form class="w-full mt-8">
    <div>
      <label for="name" class="block text-lg font-medium leading-5 text-gray-700">Название проекта</label>
      <div class="relative mt-3 border-2 rounded-md">
        <input id="name" class="block w-full p-2 form-input sm:text-lg sm:leading-5 focus:outline-none" placeholder="Spotlists v2" />
      </div>
    </div>
    <div class="mt-6">
      <label for="stack" class="block text-lg font-medium leading-5 text-gray-700">Стек</label>
      <div class="relative mt-3 border-2 rounded-md">
        <input id="stack" class="block w-full p-2 form-input sm:text-lg sm:leading-5 focus:outline-none" placeholder="React, Typescript" />
      </div>
    </div>
    <div class="mt-6">
      <label for="github_link" class="block text-lg font-medium leading-5 text-gray-700">Cсылка на GitHub</label>
      <div class="relative mt-3 border-2 rounded-md">
        <input id="github_link" class="block w-full p-2 form-input sm:text-lg sm:leading-5 focus:outline-none" placeholder="https://github.com/evgeniyPP/spotlists" />
      </div>
    </div>
    <div class="mt-6">
      <label for="preview_link" class="block text-lg font-medium leading-5 text-gray-700">Cсылка на сайт</label>
      <div class="relative mt-3 border-2 rounded-md">
        <input id="preview_link" class="block w-full p-2 form-input sm:text-lg sm:leading-5 focus:outline-none" placeholder="https://epp-spotlists.herokuapp.com" />
      </div>
    </div>
    <div class="mt-6">
      <label for="link" class="block text-lg font-medium leading-5 text-gray-700">Cсылка на изображение</label>
      <div class="relative mt-3 border-2 rounded-md">
        <input id="image_url" class="block w-full p-2 form-input sm:text-lg sm:leading-5 focus:outline-none" placeholder="https://hsto.org/webt/mb/wz/q8/mbwzq8mlcxvseydiwjmdjxj78co.png" />
      </div>
    </div>
    <div class="mt-6">
      <label for="description" class="block text-lg font-medium leading-5 text-gray-700">Описание</label>
      <div class="relative mt-3 border-2 rounded-md">
        <textarea id="description" class="block w-full p-2 form-input sm:text-lg sm:leading-5 focus:outline-none" placeholder="Давным-давно..."></textarea>
      </div>
    </div>
    <div class="w-24 mt-6">
      <label for="order" class="block text-lg font-medium leading-5 text-gray-700">Место</label>
      <div class="relative mt-3 border-2 rounded-md">
        <input id="order" type="number" class="block w-full p-2 form-input sm:text-lg sm:leading-5 focus:outline-none" placeholder="2" min="1" max="12" />
      </div>
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
