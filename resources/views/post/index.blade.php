<x-layout :title="$pageTitle">
   @foreach ($posts as $post )
        <h1 class="text-4xl">{{ $post->title }}</h1>
        <p class="text-xl">{{ $post->author }}</p>
        <p>{{ $post->body }}</p>
        
      
   @endforeach
   {{ $posts->links() }}
</x-layout>