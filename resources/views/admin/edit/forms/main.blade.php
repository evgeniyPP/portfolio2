<form class="w-full mt-8">
  <div>
    <label for="name" class="block text-lg font-medium leading-5 text-gray-700">Название</label>
    <select wire:model="selectedName" id="name" class="block w-full p-2 mt-3 text-base leading-6 border-2 border-gray-300 rounded-md form-select focus:outline-none sm:text-lg sm:leading-5">
      @foreach($mains as $main)
        <option>{{ $main->name }}</option>
      @endforeach
    </select>
  </div>
  <div class="mt-6">
    <label for="type" class="block text-lg font-medium leading-5 text-gray-700">Тип</label>
    <div class="relative mt-3 border-2 rounded-md">
      <input wire:model="type" id="type" class="block w-full p-2 form-input sm:text-lg sm:leading-5 focus:outline-none" />
    </div>
  </div>
  <div class="mt-6">
    <label for="text" class="block text-lg font-medium leading-5 text-gray-700">Текст</label>
    <div class="relative mt-3 border-2 rounded-md">
      <textarea wire:model="text" id="text" class="block w-full h-32 p-2 form-input sm:text-lg sm:leading-5 focus:outline-none"></textarea>
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
        <a href="{{ route('admin.edit') }}" class="px-6 py-2 text-base font-medium leading-5 text-gray-700 transition duration-300 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-500 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800">
          Назад
        </a>
      </span>
    </div>
  </div>
</form>