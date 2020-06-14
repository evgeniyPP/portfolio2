<section id="contacts" class="relative text-gray-700 body-font">
  <div class="container px-5 py-16 mx-auto">
    <div class="flex flex-col w-full mb-12 text-center">
      <h1 class="mb-4 text-2xl font-medium text-gray-900 sm:text-3xl title-font">Контакты</h1>
      <p class="mx-auto text-base leading-relaxed lg:w-2/3">Вы можете связаться со мной, просто написав своё сообщение в эту форму.</p>
    </div>
    <div class="flex flex-wrap pb-8 mx-auto -m-2 lg:w-1/2 md:w-2/3" x-data="contactForm()">
      <div class="w-full p-2">
        <label for="name" class="font-medium">Ваше имя:</label>
        <input id="name" class="w-full px-4 py-2 my-3 text-base bg-gray-100 border border-gray-400 rounded focus:outline-none focus:border-gray-800" placeholder="Как к вам обращаться?" type="text" x-model="name" wfd-id="1064" />
      </div>
      <div class="w-full p-2">
        <label for="contact" class="font-medium">Ваш e-mail или телефон:</label>
        <input id="contact" class="w-full px-4 py-2 my-3 text-base bg-gray-100 border border-gray-400 rounded focus:outline-none focus:border-gray-800" placeholder="Как с вами связаться?" type="text" x-model="contact" wfd-id="1063" />
      </div>
      <div class="w-full p-2">
        <label for="message" class="font-medium">Ваше сообщение:</label>
        <textarea id="message" class="block w-full h-48 px-4 py-2 my-3 text-base bg-gray-100 border border-gray-400 rounded focus:outline-none focus:border-gray-800" placeholder="Что вы хотите сказать?" x-model="message"></textarea>
      </div>
      <div class="w-full p-2">
        <button class="flex px-8 py-2 mx-auto text-lg text-white transition duration-150 ease-in-out bg-gray-800 border-0 rounded focus:outline-none focus:shadow-outline hover:bg-gray-700" x-bind:disabled="loading" x-bind:class="{ 'opacity-50 cursor-not-allowed': loading }" x-on:click="submit()">
          Отправить
        </button>
      </div>
    </div>
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
