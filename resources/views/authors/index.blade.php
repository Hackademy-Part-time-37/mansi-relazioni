<x-main>
    <h1>Lista Autori inseriti</h1>
    <ul class="list-group">
        @foreach ($authors as $author)
            <li class="list-group-item">
                {{ $author->firstname }} {{ $author->lastname }} - {{ $author->books->count() }} |
                @foreach ($author->books as $book)
                    {{ $book->title }}, {{ $book->pages }} ||||
                @endforeach
            </li>
        @endforeach
    </ul>
</x-main>
