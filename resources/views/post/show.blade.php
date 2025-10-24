<x-layout :title="$pageTitle">
 <h1 class="text-3xl">{{ $post->title }}</h1>
 <p>{{ $post->body }}</p>
 <p>{{ $post->author }}</p>

</x-layout>