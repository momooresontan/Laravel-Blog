@auth
    <form method="POST" action="/posts/{{ $post->slug }}/comments" class=" border border-gray-200 p-6 rounded-xl">
        @csrf
        <header class="flex items-center">
            <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">
            <h2 class="ml-4">Want to participate?</h2>
        </header>
        <div class="mt-5">
            <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" rows="5" placeholder="Say something" required></textarea>
            
            <x-form.error name="body"/>
        </div>
        <div class="flex justify-end mt-5 border-t border-gray-200 pt-3 ">
            <x-form.button>Post</x-form.button>
        </div>
    </form>
@else
    <p class="font-bold">
        <a href="/login" class="hover:underline">Log in to participate?</a>
    </p>
@endauth