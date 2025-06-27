<x-layout :title="$title">

  <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 mb-6">
      <div class="p-6">
          <h2 class="text-2xl font-semibold text-blue-700 mb-2">{{ $post->title }}</h2>
          <p class="text-sm text-gray-600 mb-4">Oleh <span class="font-medium text-gray-700">{{ $post->author->name }}</span></p>
          <p class="text-gray-700 leading-relaxed mb-4">{{ $post->body }}</p>
          <a href="/posts" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300">Baca Selengkapnya</a>
      </div>
  </div>

</x-layout>