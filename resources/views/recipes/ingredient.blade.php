<x-app-layout>

    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 min-h-screen mb-500">
        <h1 class="uppercase text-center text-3xl font-bold m-3"> Ingrediente: {{$ingredient->name}}</h1>

    @foreach ($recipes as $recipe)
        <x-card-recipe :recipe="$recipe" />
    @endforeach

        {{-- tengo que averiguar lo de los links porque no me andan --}}
        {{-- <div>
            {{$recipes->links()}}
        </div> --}}

    </div>

</x-app-layout>