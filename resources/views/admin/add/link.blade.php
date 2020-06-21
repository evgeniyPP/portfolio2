@extends('layouts.app')

@section('content')
<section class="flex flex-col justify-center max-w-lg min-h-screen py-6 mx-4 sm:mx-auto">
  <h2 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
    Добавить ссылку
  </h2>
  <form method="post" class="w-full mt-8">
    @csrf()
    <div>
      <label for="name" class="block text-lg font-medium leading-5 text-gray-700">Название</label>
      <div class="relative mt-3">
        <input name="name" id="name" class="block w-full p-2 border-2 rounded-md form-input sm:text-lg sm:leading-5 focus:outline-none focus:border-gray-500 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-500 @enderror" placeholder="Github" value="{{ old('name') }}" />
        @error('name')
          <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
          </div>
        @enderror
      </div>
      @error('name')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
      @enderror
    </div>
    <div class="mt-6">
      <label for="link" class="block text-lg font-medium leading-5 text-gray-700">Cсылка</label>
      <div class="relative mt-3">
        <input name="link" id="link" class="block w-full p-2 border-2 rounded-md form-input sm:text-lg sm:leading-5 focus:outline-none focus:border-gray-500 @error('link') border-red-300 text-red-900 placeholder-red-300 focus:border-red-500 @enderror" placeholder="https://github.com/evgeniyPP" value="{{ old('link') }}" />
        @error('link')
          <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
          </div>
        @enderror
      </div>
      @error('link')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
      @enderror
    </div>
    <div class="mt-6">
      <label for="logo" class="block text-lg font-medium leading-5 text-gray-700">Font Awesome классы для лого</label>
      <div class="relative mt-3">
        <input name="logo" id="logo" class="block w-full p-2 border-2 rounded-md form-input sm:text-lg sm:leading-5 focus:outline-none focus:border-gray-500 @error('logo') border-red-300 text-red-900 placeholder-red-300 focus:border-red-500 @enderror" placeholder="fab fa-github" value="{{ old('logo') }}" />
        @error('logo')
          <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
          </div>
        @enderror
      </div>
      @error('logo')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
      @enderror
    </div>
    <div class="mt-6">
      <label for="description" class="block text-lg font-medium leading-5 text-gray-700">Описание</label>
      <div class="relative mt-3">
        <textarea name="description" id="description" class="block w-full p-2 border-2 rounded-md form-input sm:text-lg sm:leading-5 focus:outline-none focus:border-gray-500 @error('description') border-red-300 text-red-900 placeholder-red-300 focus:border-red-500 @enderror" placeholder="Ниже идет список...">{{ old('description') }}</textarea>
        @error('description')
          <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
          </div>
        @enderror
      </div>
      @error('description')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
      @enderror
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
