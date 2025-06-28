<x-global-layout>
    <div class="min-h-screen w-full flex justify-center items-center">
        <form action="#" method="post" class="p-4 space-y-4 w-xl rounded-lg shadow-sm bg-white text-black">
            @csrf

            <p class="text-green-400">{{ session('success') }}</p>
    
            <h1 class="text-4xl font-bold text-center">Login</h1>
    
            <div class="space-y-2">
                <p class="block font-bold">Email</p>
                <input type="email" name="email" id="email" class="input input-md w-full bg-gray-300" />
            </div>

            <div class="space-y-2">
                <p class="block font-bold">Password</p>
                <input type="password" name="password" id="password" class="input input-md w-full bg-gray-300" />
            </div>

            <div>
                <label class="label">
                    <input type="checkbox" name="remember_me" checked="checked" class="checkbox bg-gray-300" />
                    Remember me
                </label>
            </div>
    
            <button type="submit" class="btn btn-primary w-full">Login</button>
        </form>
    </div>
</x-global-layout>