<section id="contacts" class="relative text-gray-700 body-font">
  <div class="container px-5 py-16 mx-auto">
    <div class="flex flex-col w-full mb-12 text-center">
      <h1 class="mb-4 text-2xl font-medium text-gray-900 sm:text-3xl title-font">Контакты</h1>
      <p class="mx-auto text-base leading-relaxed lg:w-2/3">Вы можете связаться со мной, просто написав своё сообщение в эту форму.</p>
    </div>
    <livewire:contact-form />
    <div class="container max-w-3xl px-5 py-8 mx-auto text-center">
      <h4 class="mb-4 text-2xl font-medium">Также я доступен:</h4>
      <div class="flex flex-wrap items-center justify-center">
        @foreach($contacts as $contact)
          <div class="p-4 md:w-1/3">
            <div class="flex flex-col h-full p-4">
              <div class="mb-2">
                <h2 class="text-lg font-medium text-gray-900 title-font">{{ $contact->name }}:</h2>
              </div>
              <p class="text-xl leading-relaxed">
                <a href="{{ $contact->link }}" class="underline transition duration-150 ease-in-out cursor-pointer hover:text-gray-600 focus:text-gray-600" target="_blank" rel="noopener noreferrer">{{ $contact->text }}</a>
              </p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
