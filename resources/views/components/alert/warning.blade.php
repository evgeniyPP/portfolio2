<div x-data="{ showAlert: true }" x-show.transition="showAlert" class="absolute top-0 right-0 p-4 m-4 bg-yellow-200 border-l-4 border-yellow-400 rounded-md">
  <div class="flex items-center">
    <div class="flex-shrink-0">
      <svg class="w-8 h-8 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
      </svg>
    </div>
    <div class="ml-3">
      <p class="text-sm font-medium leading-5 text-yellow-700">
        {!! $message !!}
      </p>
    </div>
    <div class="pl-3 ml-auto">
      <div class="-mx-1.5 -my-1.5">
        <button x-on:click="showAlert = false" class="inline-flex rounded-md p-1.5 text-yellow-500 hover:bg-yellow-100 focus:outline-none focus:bg-yellow-100 transition ease-in-out duration-150">
          <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</div>
