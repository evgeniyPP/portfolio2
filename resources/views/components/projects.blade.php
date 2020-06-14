<section class="text-gray-700 body-font">
  <div class="container px-5 py-16 mx-auto">
    <div class="flex flex-col w-full mb-12 text-center">
      <h1 class="mb-6 text-2xl font-medium text-gray-900 sm:text-3xl title-font">Проекты</h1>
      <p class="mx-auto text-base leading-relaxed lg:w-2/3">Все вышеперечисленные навыки я отрабатывал, делая проекты. Вот несколько из моих любимых.<br> Еще больше можно посмотреть в моем профиле на <a class="underline cursor-pointer" href="https://github.com/evgeniyPP?tab=repositories" target="_blank" rel="noopener noreferrer">GitHub</a>.</p>
    </div>
    <div class="flex flex-wrap -m-4">
      @foreach($projects as $project)
        <div class="w-full p-4 xl:w-1/3 lg:w-1/2">
          <div class="relative flex min-h-full">
            <img alt="project preview desktop" class="absolute inset-0 object-cover object-top w-full h-full border" src="{{ $project->image_url }}">
            <div class="relative z-10 w-full px-8 py-10 transition duration-500 ease-in-out bg-white border-4 border-gray-200 opacity-0 hover:opacity-100 focus:opacity-100" tabindex="0">
              <h2 class="mb-1 text-xs font-medium tracking-widest text-indigo-500 uppercase title-font">{{ $project->stack }}</h2>
              <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">{{ $project->name }}</h1>
              <p class="leading-relaxed">{{ $project->description }}</p>
              <div class="flex justify-around mt-8">
                <a href="{{ $project->github_link }}" class="flex items-center p-3 -m-3 space-x-3 text-base font-medium leading-6 text-gray-900 transition duration-150 ease-in-out rounded-md hover:bg-gray-200" target="_blank" rel="noopener noreferrer">
                  <i class="text-2xl fab fa-github-alt"></i>
                  <span>GitHub
                  </span>
                </a>
                <a href="{{ $project->preview_link }}" class="flex items-center p-3 -m-3 space-x-3 text-base font-medium leading-6 text-gray-900 transition duration-150 ease-in-out rounded-md hover:bg-gray-200" target="_blank" rel="noopener noreferrer">
                  <i class="text-xl fas fa-play-circle"></i>
                  <span>Сайт
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
