<x-layout>
    <section class="px-6 py-8">
        <x-panel>
            <form action="/admin/posts" method="POST">
                @csrf
    
                <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">Title</label>
                <input class="border border-gray-400 p-2 w-full" type="text" name="title" id="title" required>
                
                @error('title')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </form>
        </x-panel>
    </section>
</x-layout>