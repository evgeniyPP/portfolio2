<div class="flex flex-col justify-center min-h-screen py-12 sm:px-6 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <h2 class="text-3xl font-extrabold leading-9 text-center text-gray-900">
      Войти в аккаунт
    </h2>
  </div>

  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="px-4 py-8 bg-white sm:shadow-lg sm:border sm:rounded-lg sm:px-10">
      <form wire:submit.prevent="submit">
        <div>
          <label for="login" class="block text-sm font-medium leading-5 text-gray-700">
            Логин
          </label>
          <div class="mt-1 rounded-md shadow-sm">
            <input wire:model.lazy="login" id="login" type="login" class="block w-full px-3 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-gray-300 rounded-md appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5" />
          </div>
          @error('login') <div class="my-1 text-sm text-red-500">{{ $message }}</div> @enderror
        </div>

        <div class="mt-6">
          <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
            Пароль
          </label>
          <div class="mt-1 rounded-md shadow-sm">
            <input wire:model.lazy="password" id="password" type="password" class="block w-full px-3 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-gray-300 rounded-md appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5" />
          </div>
          @error('password') <div class="my-1 text-sm text-red-500">{{ $message }}</div> @enderror
        </div>

        <div class="flex items-center justify-between mt-6">
          <div class="flex items-center">
            <input wire:model.lazy="rememberMe" id="remember_me" type="checkbox" class="w-4 h-4 text-indigo-600 transition duration-150 ease-in-out form-checkbox" />
            <label for="remember_me" class="block ml-2 text-sm leading-5 text-gray-900">
              Запомнить меня
            </label>
          </div>
        </div>

        <div class="mt-6">
          <span class="block w-full rounded-md shadow-sm">
            <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
              Войти
            </button>
          </span>
        </div>
      </form>
    </div>
  </div>

  <div class="absolute bottom-0 right-0 mb-4 mr-6 space-y-3">
    <a href="{{ route('admin') }}" class="block text-indigo-900 hover:underline focus:outline-none focus:underline active:text-indigo-200">В админку</a>
    <a href="{{ route('index') }}" class="block text-indigo-900 hover:underline focus:outline-none focus:underline active:text-indigo-200">На главную</a>
  </div>
</div>
