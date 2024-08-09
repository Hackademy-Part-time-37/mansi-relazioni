<x-main>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Pagine</label>
            <input type="text" class="form-control" name="pages" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="author_id">
                <option selected>Scegli un autore</option>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->firstname }} {{ $author->lastname }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</x-main>
