<section class="text-gray-700 body-font">
  <div class="container px-5 py-6 mx-auto">
    <h1 class="mb-16 text-2xl font-medium text-center text-gray-900 sm:text-3xl title-font">Ссылки</h1>
    <div class="flex flex-wrap -mx-4 -mt-4 -mb-10 sm:-m-4">
      @foreach($links as $link)
        <div class="flex p-4 mb-6 md:w-1/2 md:mb-0">
          <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mb-4 text-gray-700 bg-gray-100 rounded-full">
            <i class="{{ $link->logo }} text-2xl"></i>
          </div>
          <div class="flex-grow pl-6">
            <a href="{{ $link->link }}" target="_blank" rel="noopener noreferrer">
              <h2 class="inline mb-2 text-lg font-medium text-gray-900 transition duration-150 ease-in-out  title-font hover:text-gray-600 hover:underline focus:underline focus:text-gray-600">{{ $link->name }}</h2>
            </a>
            <p class="text-base leading-relaxed">{{ $link->description }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
