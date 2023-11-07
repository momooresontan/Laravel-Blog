<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <h1 class="text-center font-bold text-xl">Register</h1>
            <form action="/register" method="POST">
                
                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Username
                    </label>
                    <input type="text" class="border border-gray-400 p-2 w-full" name="username" id="username" required>

                    @error('username')
                        <p class="text-red-500 text-xs mt-2"></p>
                    @enderror
                </div>
            </form>
        </main>
    </section>
</x-layout>