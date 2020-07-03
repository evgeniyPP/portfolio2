@extends('layouts.admin')

@section('content')
<section class="flex flex-col justify-center max-w-lg min-h-screen py-6 mx-4 sm:mx-auto">
  <h2 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
    Добавить проект
  </h2>
  <form method="post" class="w-full mt-8">
    @csrf()
    <div>
      <label for="name" class="input-label">Название</label>
      <div class="relative mt-3">
        <input name="name" id="name" class="input form-input @error('name') input-error placeholder-red-300 @enderror" placeholder="Spotlists v2" value="{{ old('name') }}" />
        @error('name')
          <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
          </div>
        @enderror
      </div>
      @error('name')
        <p class="validation-error">{{ $message }}</p>
      @enderror
    </div>
    <div class="mt-6">
      <label for="stack" class="input-label">Стек</label>
      <div class="relative mt-3">
        <input name="stack" id="stack" class="input form-input @error('stack') input-error placeholder-red-300 @enderror" placeholder="React, Typescript" value="{{ old('stack') }}" />
        @error('stack')
          <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
          </div>
        @enderror
      </div>
      @error('stack')
        <p class="validation-error">{{ $message }}</p>
      @enderror
    </div>
    <div class="mt-6">
      <label for="github_link" class="input-label">Cсылка на GitHub</label>
      <div class="relative mt-3">
        <input name="github_link" id="github_link" class="input form-input @error('github_link') input-error placeholder-red-300 @enderror" placeholder="https://github.com/evgeniyPP/spotlists" value="{{ old('github_link') }}" />
        @error('github_link')
          <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
          </div>
        @enderror
      </div>
      @error('github_link')
        <p class="validation-error">{{ $message }}</p>
      @enderror
    </div>
    <div class="mt-6">
      <label for="preview_link" class="input-label">Cсылка на сайт</label>
      <div class="relative mt-3">
        <input name="preview_link" id="preview_link" class="input form-input @error('preview_link') input-error placeholder-red-300 @enderror" placeholder="https://epp-spotlists.herokuapp.com" value="{{ old('preview_link') }}" />
        @error('preview_link')
          <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
          </div>
        @enderror
      </div>
      @error('preview_link')
        <p class="validation-error">{{ $message }}</p>
      @enderror
    </div>
    <div class="mt-6">
      <label for="image_url" class="input-label">Cсылка на изображение</label>
      <div class="relative mt-3">
        <input name="image_url" id="image_url" class="input form-input @error('image_url') input-error placeholder-red-300 @enderror" placeholder="https://hsto.org/webt/mb/wz/q8/mbwzq8mlcxvseydiwjmdjxj78co.png" value="{{ old('image_url') }}" />
        @error('image_url')
          <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
          </div>
        @enderror
      </div>
      @error('image_url')
        <p class="validation-error">{{ $message }}</p>
      @enderror
    </div>
    <div class="mt-6">
      <label for="description" class="input-label">Описание</label>
      <div class="relative mt-3">
        <textarea name="description" id="description" class="input form-input @error('description') input-error placeholder-red-300 @enderror" placeholder="Давным-давно...">{{ old('description') }}</textarea>
        @error('description')
          <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
          </div>
        @enderror
      </div>
      @error('description')
        <p class="validation-error">{{ $message }}</p>
      @enderror
    </div>
    <div class="w-24 mt-6">
      <label for="order" class="input-label">Место</label>
      <div class="relative mt-3">
        <input name="order" id="order" type="number" class="input form-input @error('order') input-error placeholder-red-300 @enderror" placeholder="2" min="1" max="12" value="{{ old('order') }}" />
        @error('order')
          <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
          </div>
        @enderror
      </div>
      @error('order')
        <p class="validation-error">{{ $message }}</p>
      @enderror
    </div>

    <div class="pt-5 mt-6">
      <div class="flex justify-start">
        <span class="inline-flex mr-3 rounded-md shadow-sm">
          <button @if(!auth()->check()) disabled @endif type="submit" class="inline-flex justify-center px-6 py-2 text-base font-medium leading-6 text-center text-indigo-700 transition duration-300 ease-in-out bg-indigo-200 border border-transparent rounded-md hover:bg-indigo-100 focus:outline-none focus:border-indigo-500 focus:shadow-outline-indigo active:bg-indigo-200 @if(!auth()->check()) opacity-50 cursor-not-allowed @endif">
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

  @if(!auth()->check())
    <x-alert.error message='У вас нет доступа. <br> Чтобы что-то добавить, <a href="/login" class="font-medium underline">авторизуйтесь</a>.' />
  @endif
</section>
@endsection
