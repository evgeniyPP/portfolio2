<div class="flex flex-wrap pb-8 mx-auto -m-2 lg:w-1/2 md:w-2/3">
  @csrf
  <div class="relative w-full p-2">
    <label for="name" class="font-medium">Ваше имя:</label>
    <input wire:model="name" id="name" class="w-full px-4 py-2 my-3 text-base bg-gray-100 border border-gray-400 rounded focus:outline-none focus:border-gray-800 @error('name') border-red-400 text-red-900 placeholder-red-400 focus:border-red-700 @enderror" placeholder="Как к вам обращаться?" type="text" wfd-id="1064" />
    @error('name')
      <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
        <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
        </svg>
      </div>
      <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
  </div>
  <div class="relative w-full p-2">
    <label for="contact" class="font-medium">Ваш e-mail или телефон:</label>
    <input wire:model="contact" id="contact" class="w-full px-4 py-2 my-3 text-base bg-gray-100 border border-gray-400 rounded focus:outline-none focus:border-gray-800 @error('contact') border-red-400 text-red-900 placeholder-red-400 focus:border-red-700 @enderror" placeholder="Как с вами связаться?" type="text" wfd-id="1063" />
    @error('contact')
      <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
        <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
        </svg>
      </div>
      <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
  </div>
  <div class="relative w-full p-2">
    <label for="text" class="font-medium">Ваше сообщение:</label>
    <textarea wire:model="text" id="text" class="block w-full h-48 px-4 py-2 my-3 text-base bg-gray-100 border border-gray-400 rounded focus:outline-none focus:border-gray-800 @error('text') border-red-400 text-red-900 placeholder-red-400 focus:border-red-700 @enderror" placeholder="Что вы хотите сказать?"></textarea>
    @error('text')
      <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
        <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
        </svg>
      </div>
      <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
  </div>
  <div class="w-full p-2">
    <button wire:click="submit" wire:loading.attr="disabled" wire:loading.class="opacity-50 cursor-not-allowed" class="flex px-8 py-2 mx-auto text-lg text-white transition duration-150 ease-in-out bg-gray-800 border-0 rounded focus:outline-none focus:shadow-outline hover:bg-gray-700">
      Отправить
    </button>
  </div>
</div>
