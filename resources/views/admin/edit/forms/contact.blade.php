<form wire:submit.prevent="submit" class="w-full mt-8">
  <div>
    <label for="selectedName" class="input-label">Выберите контакт:</label>
    <select wire:model="selectedName" id="selectedName" class="mt-3 leading-6 border-gray-300 input form-select">
      @foreach($contacts as $contact)
        <option>{{ $contact->name }}</option>
      @endforeach
    </select>
  </div>
  <div class="pt-6 mt-6 border-t-2 border-gray-300">
    <label for="name" class="input-label">Название</label>
    <div class="relative mt-3">
      <input wire:model.lazy="name" id="name" class="input form-input @error('name') input-error placeholder-red-300 @enderror" />
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
    <label for="link" class="input-label">Ссылка</label>
    <div class="relative mt-3">
      <input wire:model.lazy="link" id="link" class="input form-input @error('link') input-error placeholder-red-300 @enderror" />
      @error('link')
        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
          <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
          </svg>
        </div>
      @enderror
    </div>
    @error('link')
      <p class="validation-error">{{ $message }}</p>
    @enderror
  </div>
  <div class="mt-6">
    <label for="text" class="input-label">Текст</label>
    <div class="relative mt-3">
      <input wire:model.lazy="text" id="text" class="input form-input @error('text') input-error placeholder-red-300 @enderror" />
      @error('text')
        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
          <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
          </svg>
        </div>
      @enderror
    </div>
    @error('text')
      <p class="validation-error">{{ $message }}</p>
    @enderror
  </div>

  <div class="pt-5 mt-6">
    <div class="flex">
      <span class="inline-flex mr-1 rounded-md shadow-sm sm:mr-3">
        <button @if(!$isAuth) disabled @endif type="submit" class="inline-flex justify-center px-3 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 rounded-md sm:px-6 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 @if(!$isAuth) opacity-50 cursor-not-allowed @endif">
          Изменить
        </button>
      </span>
      <span class="inline-flex mr-1 rounded-md shadow-sm sm:mr-3">
        <button @if(!$isAuth) disabled @endif wire:click="delete" type="button" class="inline-flex justify-center px-3 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-red-600 rounded-md sm:px-6 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 @if(!$isAuth) opacity-50 cursor-not-allowed @endif">
          Удалить
        </button>
      </span>
      <span class="inline-flex rounded-md shadow-sm">
        <a href="{{ route('admin.edit') }}" class="px-3 py-2 text-base font-medium leading-5 text-gray-700 transition duration-300 ease-in-out bg-white border border-gray-300 rounded-md sm:px-6 hover:text-gray-500 focus:outline-none focus:border-blue-500 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800">
          Назад
        </a>
      </span>
    </div>
  </div>

  @if(!$isAuth)
    <x-alert.error message='У вас нет доступа. <br> Чтобы что-то менять, <a href="/login" class="font-medium underline">авторизуйтесь</a>.' triggerEvent="noauth" />
  @endif
</form>
