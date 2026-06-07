<x-layout>
    <x-slot:title>
        Users page
    </x-slot:title>
    <div class="mt-5 mb-5 w-4/5 mx-auto">
        <ul class="list bg-base-100 rounded-box shadow-md">
            <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">PLAYERS</li>
            @foreach ($users as $user)
                <a href="">
                    <li class="list-row hover:bg-base-100 hover:bg-primary hover:text-white">
                        <div><img class="size-10 rounded-box" src="{{ asset('img/bird.png') }}" /></div>
                        <div class="flex flex-col gap-1">
                            <div class="flex gap-2">
                                <p class="uppercase ">{{ $user['name'] }}</p>
                                <p class="opacity-60">{{ $user->created_at->diffForHumans() }}</p>
                            </div>
                            <div class="text-xs uppercase font-semibold opacity-60">{{ $user['email'] }}</div>
                        </div>
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
</x-layout>