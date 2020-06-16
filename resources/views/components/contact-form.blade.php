<div class="flex flex-wrap pb-8 mx-auto -m-2 lg:w-1/2 md:w-2/3">
  @csrf
  <div class="w-full p-2">
    <label for="name" class="font-medium">Ваше имя:</label>
    <input wire:model="name" id="name" class="w-full px-4 py-2 my-3 text-base bg-gray-100 border border-gray-400 rounded focus:outline-none focus:border-gray-800" placeholder="Как к вам обращаться?" type="text" wfd-id="1064" />
  </div>
  <div class="w-full p-2">
    <label for="contact" class="font-medium">Ваш e-mail или телефон:</label>
    <input wire:model="contact" id="contact" class="w-full px-4 py-2 my-3 text-base bg-gray-100 border border-gray-400 rounded focus:outline-none focus:border-gray-800" placeholder="Как с вами связаться?" type="text" wfd-id="1063" />
  </div>
  <div class="w-full p-2">
    <label for="message" class="font-medium">Ваше сообщение:</label>
    <textarea wire:model="message" id="message" class="block w-full h-48 px-4 py-2 my-3 text-base bg-gray-100 border border-gray-400 rounded focus:outline-none focus:border-gray-800" placeholder="Что вы хотите сказать?"></textarea>
  </div>
  <div class="w-full p-2">
    <button wire:click="submit" wire:loading.attr="disabled" wire:loading.class="opacity-50 cursor-not-allowed" class="flex px-8 py-2 mx-auto text-lg text-white transition duration-150 ease-in-out bg-gray-800 border-0 rounded focus:outline-none focus:shadow-outline hover:bg-gray-700">
      Отправить
    </button>
  </div>
</div>
