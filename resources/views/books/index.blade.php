<x-main>
    <h1>Lista libri inseriti</h1>
    <ul class="list-group">
        @foreach ($books as $book)
            <li class="list-group-item">
                <a href="{{ route('books.edit', $book) }}"> {{ $book->title }} </a>
                <span>Numero Categorie: {{ $book->categories->count() }}</span>
                <span>Elenco Categorie: @foreach ($book->categories as $category)
                        {{ $category->name }}
                    @endforeach
                </span>
                <form action="{{ route('books.destroy', $book) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Elimina</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-main>
