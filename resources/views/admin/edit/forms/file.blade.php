<form wire:submit.prevent="submit" class="w-full mt-8">
  <div>
    <label for="selectedName" class="input-label">Выберите пункт:</label>
    <select wire:model="selectedName" id="selectedName" class="mt-3 leading-6 border-gray-300 input form-select">
      @foreach($files as $file)
        <option>{{ $file->name }}</option>
      @endforeach
    </select>
  </div>
  <div class="pt-6 mt-6 border-t-2 border-gray-300">
    <label for="filename" class="input-label">Файл</label>
    <div class="relative mt-3">
      <span class="ml-5 rounded-md shadow-sm">
        <input wire:model="filename" type="file">
      </span>
      @error('filename')
        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
          <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
          </svg>
        </div>
      @enderror
    </div>
    @error('filename')
      <p class="validation-error">{{ $message }}</p>
    @enderror
  </div>

  <div class="pt-5 mt-6">
    <div class="flex">
      <span class="inline-flex mr-3 rounded-md shadow-sm">
        <button @if(!$isAuth) disabled @endif type="submit" type="submit" class="inline-flex justify-center px-6 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 @if(!$isAuth) opacity-50 cursor-not-allowed @endif">
          Изменить
        </button>
      </span>
      <span class="inline-flex rounded-md shadow-sm">
        <a href="{{ route('admin.edit') }}" class="px-6 py-2 text-base font-medium leading-5 text-gray-700 transition duration-300 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-500 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800">
          Назад
        </a>
      </span>
    </div>
  </div>

  @if(!auth()->check())
    <x-alert.error message='У вас нет доступа. <br> Чтобы что-то менять, <a href="/login" class="font-medium underline">авторизуйтесь</a>.' triggerEvent="noauth" />
  @endif
</form>
