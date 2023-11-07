<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl uppercase">Register</h1>
            <form action="/register" method="POST" class="mt-10">
                
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Name
                    </label>
                    <input type="text" class="border border-gray-400 p-2 w-full" name="name" id="name" required>

                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Username
                    </label>
                    <input type="text" class="border border-gray-400 p-2 w-full" name="username" id="username" required>

                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Email
                    </label>
                    <input type="text" class="border border-gray-400 p-2 w-full" name="email" id="email" required>

                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password
                    </label>
                    <input type="text" class="border border-gray-400 p-2 w-full" name="password" id="password" required>

                    @error('username')
                        <p class="text-red-500 text-xs mt-2"></p>
                    @enderror
                </div>
            </form>
        </main>
    </section>
</x-layout>