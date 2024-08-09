<x-main>
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titolo</label>
            <input type="text" class="form-control" value="{{ $book->title }}" name="title"
                id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Pagine</label>
            <input type="text" class="form-control" value="{{ $book->pages }}" name="pages"
                id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <select class="form-select" name="author_id">
                <option @if (!$book->author_id) selected @endif>Scegli un autore</option>
                @foreach ($authors as $author)
                    <option @if ($author->id == $book->author_id) selected @endif value="{{ $author->id }}">
                        {{ $author->firstname }} {{ $author->lastname }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            @foreach ($categories as $category)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{ $category->id }}" name="categories[]"
                        @if ($book->categories->contains($category->id)) checked @endif>
                    <label class="form-check-label" for="flexCheckDefault">
                        {{ $category->name }}
                    </label>
                </div>
            @endforeach
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</x-main>
