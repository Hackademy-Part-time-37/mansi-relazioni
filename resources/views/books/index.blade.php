<x-main>
    <h1>Lista libri inseriti</h1>
    <ul class="list-group">
        @foreach ($books as $book)
            <li class="list-group-item">{{ $book->title }} - {{ $book->author->firstname }}
                {{ $book->author->lastname }}</li>
        @endforeach
    </ul>
</x-main>
