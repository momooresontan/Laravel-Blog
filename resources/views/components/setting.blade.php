@props(['heading'])
<section class="py-8 max-w-md mx-auto">
    <h1 class="text-lg font-bold mb-4">{{ $heading }}</h1>
    <div class="flex">
        <aside class="w-48">
            <ul>
                <li>
                    <a href="/admin/posts/create">New Post</a>
                </li>
            </ul>
        </aside>
        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>