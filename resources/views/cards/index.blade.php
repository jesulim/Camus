<x-app-layout>
    <section class="md:h-full flex items-center text-gray-600">
        <div class="container px-5 py-20 mx-auto">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-6xl text-gray-700 font-semibold">FICHAS</h1>
            </div>

            <div class="flex flex-wrap -m-4">
                @foreach ($cards as $card)
                    <div class="p-4 sm:w-1/2 lg:w-1/3">
                        <a href="{{route('cards.show', $card)}}">
                            <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                <img class="lg:h-72 md:h-48 w-full object-cover object-center"
                                    src="{{ Storage::url($card->image) }}" alt="blog">
                                <div class="p-6 hover:bg-indigo-600 hover:text-white transition duration-300 ease-in">
                                    <h2 class="text-base font-medium mb-1">{{$card->created_at}}</h2>
                                    <h1 class="text-2xl font-semibold mb-3">{{ $card->name }}</h1>
                                    <p class="leading-relaxed mb-3">{{$card->autor}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="mt-4 hover:bg-gray-50">
                {{$cards->links()}}
            </div>
        </div>
        
    </section>

    <footer class="container" style="margin-top: 20px; margin-bottom: 40px">
        <p class="float-right"><a href="#">Volver Arriba</a></p>
        <p>&copy; 2021 Camus</p>
    </footer>
    
</x-app-layout>