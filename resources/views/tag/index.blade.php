<x-layout :title="$pageTitle">
   @foreach ($tags as $tag )
        <h1 class="text-4xl">{{ $tag->title }}</h1>
     
      
   @endforeach
</x-layout>