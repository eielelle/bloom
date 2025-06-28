<x-global-layout>
    <div class="min-h-screen w-full flex justify-center items-center">
        <form action="/auth/register" method="post" class="p-4 space-y-4 w-xl rounded-lg shadow-sm bg-white text-black">
            @csrf
    
            <h1 class="text-4xl font-bold text-center">Register</h1>

            <div class="space-y-2">
                <p class="block font-bold">Name</p>
                <input type="text" name="name" id="name" class="input input-md w-full bg-gray-300" />
                @error('name')
                    <p class="text-red-400 font-light">{{ $message }}</p>
                @enderror
            </div>
    
            <div class="space-y-2">
                <p class="block font-bold">Email</p>
                <input type="email" name="email" id="email" class="input input-md w-full bg-gray-300" />
                @error('email')
                    <p class="text-red-400 font-light">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="block font-bold">Password</p>
                <input type="password" name="password" id="password" class="input input-md w-full bg-gray-300" />
                @error('password')
                    <p class="text-red-400 font-light">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="block font-bold">Confirm Password</p>
                <input type="password" name="confirm_password" id="password" class="input input-md w-full bg-gray-300" />
                @error('confirm_password')
                    <p class="text-red-400 font-light">{{ $message }}</p>
                @enderror
            </div>
    
            <button type="submit" class="btn btn-primary w-full">Register</button>
        </form>
    </div>
</x-global-layout>