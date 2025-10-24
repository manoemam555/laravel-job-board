<x-layout title="comments">
   @foreach ($comments as $comment )
        <h1 class="text-4xl">{{ $comment->content }}</h1>
        <p> The Author :  {{ $comment->author }}</p>
        <a href="/blog/{{ $comment->posts->id }}"><p>{{ $comment->posts['title']}}</p></a>
   @endforeach
   {{ $comments->links() }}
</x-layout>