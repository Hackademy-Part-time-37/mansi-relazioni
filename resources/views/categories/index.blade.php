<x-main>
    <h1>Lista Categorie inserite</h1>
    <ul class="list-group">
        @foreach ($categories as $category)
            <li class="list-group-item">
                {{ $category->name }}
            </li>
        @endforeach
    </ul>
</x-main>
