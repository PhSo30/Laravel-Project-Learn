<x-layout>
    <x-slot:title>
        Register
    </x-slot:title>
    <div class="hero bg-base-200 min-h-screen">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold">Register now!</h1>
                <p class="py-6">
                    Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                    quasi. In deleniti eaque aut repudiandae et a id nisi.
                </p>
            </div>
            <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
                <div class="card-body">
                    <form method="POST" action="/register">
                        @csrf
                        <fieldset class="fieldset">
                            <label class="label">Username</label>
                            <input name="name" type="text" class="input" value="{{ old('name') }}" required>
                            @error('name')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror

                            <label class="label">Email</label>
                            <input name="email" type="email" class="input" placeholder="Email" value="{{ old('email') }}" required />
                            @error('email')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror

                            <label class="label">Password</label>
                            <input name="password" type="password" class="input" placeholder="Password" required />
                            @error('password')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror

                            <div><a class="link link-hover" href="{{ route('login') }}">Already have an account?</a></div>
                            <button class="btn btn-neutral mt-4">Register</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
