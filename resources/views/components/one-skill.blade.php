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
