<x-layout>
    <x-slot:title>
        HOME PAGE
    </x-slot:title>

    <div class="flex flex-col gap-4 w-4/5 mx-auto mt-4 mb-4">

        {{-- Card --}}
        <div class="flex flex-wrap gap-6 justify-center w-4/5 mx-auto mt-6">

            @foreach ($cards as $card)
                <div
                    class="card bg-base-100 w-96 shadow-sm hover:shadow-xl hover:bg-gray-500 hover:text-white hover:-translate-y-1 transition-all duration-300 ease-in-out">
                    <figure class="h-85 overflow-hidden">
                        <img src="{{ asset($card['image']) }}" alt="Shoes" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">{{ $card['title'] }}</h2>
                        <p>{{ $card['discription'] }}</p>
                        <div class="card-actions justify-end">
                            <a class="btn btn-primary" href="{{ $card['redirection'] }}">USE</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>



</x-layout>