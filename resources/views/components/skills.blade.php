<section class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto">
    <h1 class="mb-8 text-2xl font-medium text-center text-gray-900 sm:text-3xl title-font">Мои навыки</h1>
    <h4 class="mb-4 text-xl font-medium text-center sm:text-2xl">Основные</h4>
    <div class="flex flex-wrap mb-6 -mx-2 lg:w-4/5 sm:mx-auto">
      @foreach($mainSkills as $skill)
        <div class="w-full p-2 sm:w-1/2">
          <div class="flex items-center h-full p-4 bg-gray-200 rounded">
            <i class="{{ $skill->logo }} text-2xl mr-4 w-8 h-6 text-center"></i>
            <div class="inline-flex justify-between w-full">
              <span class="font-medium title-font">{{ $skill->name }}</span>
              @if($skill->rank)
                <span class="title-font {{ $skill->rank_style }}" title="На основе Pluralsight Skill IQs">{{ $skill->rank }}/300</span>
              @endif
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <h4 class="mb-4 text-xl font-medium text-center sm:text-2xl">Дополнительные</h4>
    <div class="flex flex-wrap -mx-2 lg:w-4/5 sm:mx-auto sm:mb-2">
      @foreach($sideSkills as $skill)
        <div class="w-full p-2 sm:w-1/2">
          <div class="flex items-center h-full p-4 bg-gray-200 rounded">
            <i class="{{ $skill->logo }} text-2xl mr-4 w-8 h-6 text-center"></i>
            <div class="inline-flex justify-between w-full">
              <span class="font-medium title-font">{{ $skill->name }}</span>
              @if($skill->rank)
                <span class="title-font {{ $skill->rank_style }}" title="На основе Pluralsight Skill IQs">{{ $skill->rank }}/300</span>
              @endif
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
