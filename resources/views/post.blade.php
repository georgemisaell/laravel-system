<x-layout :title="$title">

  {{-- <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 mb-6">
      <div class="p-6">
          <h2 class="text-2xl font-semibold text-blue-700 mb-2">{{ $post->title }}</h2>
          <p class="text-sm text-gray-600 mb-4">Oleh <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a></span></p>
          <p class="text-gray-700 leading-relaxed mb-4">{{ $post->body }}</p>
          <a href="/posts" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300">Baca Selengkapnya</a>
      </div>
  </div> --}}

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <a href="/posts" class="font-medium text-xs text-blue-500 hover:underline">&laquo; Back to all posts.</a>
          <header class="my-4 lg:mb-6 not-format">
              <address class="flex items-center mb-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                      <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->author->name }}">
                      <div>
                          <a href="/author/{{ $post->author->username }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                        <a href="/categories/{{ $post->category->slug }}" class="block">
                        <span class="{{ $post->category->color }} text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            {{ $post->category->name }}
                        </span>
                        </a>
                        <p class="text-base text-gray-500 dark:text-gray-400">
                            {{ $post->created_at->diffForHumans() }}
                        </p>
                </div>
                  </div>
              </address>
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
          </header>
          <p>{{ $post->body }}</p>
        </article>
    </div>
</main>
</x-layout>