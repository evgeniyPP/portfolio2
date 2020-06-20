<form class="w-full mt-8">
  <div>
    <label for="name" class="block text-lg font-medium leading-5 text-gray-700">Название</label>
    <select wire:model="selectedName" id="name" class="block w-full p-2 mt-3 text-base leading-6 border-2 border-gray-300 rounded-md form-select focus:outline-none sm:text-lg sm:leading-5">
      @foreach($contacts as $contact)
        <option>{{ $contact->name }}</option>
      @endforeach
    </select>
  </div>
  <div class="mt-6">
    <label for="link" class="block text-lg font-medium leading-5 text-gray-700">Ссылка</label>
    <div class="relative mt-3 border-2 rounded-md">
      <input wire:model="link" id="link" class="block w-full p-2 form-input sm:text-lg sm:leading-5 focus:outline-none" />
    </div>
  </div>
  <div class="mt-6">
    <label for="text" class="block text-lg font-medium leading-5 text-gray-700">Текст</label>
    <div class="relative mt-3 border-2 rounded-md">
      <input wire:model="text" id="text" class="block w-full p-2 form-input sm:text-lg sm:leading-5 focus:outline-none" />
    </div>
  </div>

  <div class="pt-5 mt-6">
    <div class="flex">
      <span class="inline-flex mr-1 rounded-md shadow-sm sm:mr-3">
        <button type="submit" class="inline-flex justify-center px-3 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 rounded-md sm:px-6 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
          Изменить
        </button>
      </span>
      <span class="inline-flex mr-1 rounded-md shadow-sm sm:mr-3">
        <button type="button" class="inline-flex justify-center px-3 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-red-600 rounded-md sm:px-6 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700">
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
</form>
