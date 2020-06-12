<section class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto">
    <h1 class="mb-8 text-2xl font-medium text-center text-gray-900 sm:text-3xl title-font">Мои навыки</h1>
    <h4 class="mb-4 text-xl font-medium text-center sm:text-2xl">Основные</h4>
    <div class="flex flex-wrap mb-6 -mx-2 lg:w-4/5 sm:mx-auto">
      @foreach($mainSkills as $skill)
        <x-one-skill :skill="$skill" />
      @endforeach
    </div>

    <h4 class="mb-4 text-xl font-medium text-center sm:text-2xl">Дополнительные</h4>
    <div x-data="{ showAll: false }" class="flex flex-wrap -mx-2 lg:w-4/5 sm:mx-auto sm:mb-2">
      @foreach($sideSkills as $skill)
        <x-one-skill :skill="$skill" />
      @endforeach
      <div x-show="!showAll" class="w-full mt-4 text-center">
          <a x-on:click="showAll = !showAll" class="font-medium underline transition duration-150 ease-in-out cursor-pointer hover:text-gray-500">Развернуть</a>
      </div>
      <template x-if="showAll">
        @foreach($sideSkillsHidden as $skill)
          <x-one-skill :skill="$skill" />
        @endforeach
      </template>
    </div>
  </div>
</section>
