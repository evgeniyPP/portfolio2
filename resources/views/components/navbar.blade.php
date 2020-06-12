<nav x-data="{ isOpen: false }" class="fixed top-0 w-full bg-gray-800">
  <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
      <div class="absolute inset-y-0 right-0 flex items-center sm:hidden">
        {{-- Mobile menu button --}}
        <button x-on:click="isOpen = !isOpen" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white" aria-label="Main menu" aria-expanded="false">
          {{-- Icon when menu is closed. --}}
          <svg x-bind:class="{ 'hidden': isOpen }" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          {{-- Icon when menu is open. --}}
          <svg x-bind:class="{ 'hidden': !isOpen }" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-end">
        <div class="hidden sm:block">
          <div class="flex">
            <a href="#" class="px-3 py-2 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Главная
            </a>
            <a href="#" class="px-3 py-2 ml-4 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Скиллы
            </a>
            <a href="#" class="px-3 py-2 ml-4 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Проекты
            </a>
            <a href="#" class="px-3 py-2 ml-4 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Контакты
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div x-bind:class="{ 'hidden': !isOpen }" class="sm:hidden">
    <div class="border-t border-gray-700"></div>
    <div class="px-2 pt-2 pb-3">
      <a href="#" class="block px-3 py-2 text-base font-medium text-gray-300 transition duration-150 ease-in-out rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Главная
      </a>
      <a href="#" class="block px-3 py-2 mt-1 text-base font-medium text-gray-300 transition duration-150 ease-in-out rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Скиллы
      </a>
      <a href="#" class="block px-3 py-2 mt-1 text-base font-medium text-gray-300 transition duration-150 ease-in-out rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Проекты
      </a>
      <a href="#" class="block px-3 py-2 mt-1 text-base font-medium text-gray-300 transition duration-150 ease-in-out rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Контакты
      </a>
      <div class="my-2 border-t border-gray-700"></div>
      <a href="#" class="block px-3 py-2 mt-1 text-base font-medium text-gray-300 transition duration-150 ease-in-out rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Скачать резюме (.docx)
      </a>
      <a href="#" class="block px-3 py-2 mt-1 text-base font-medium text-gray-300 transition duration-150 ease-in-out rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Скачать эту страницу (.pdf)
      </a>
    </div>
  </div>
</nav>
