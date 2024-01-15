<x-layout>
    <x-setting heading="Manage Post">
        <div class="flex flex-col">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block py-2 min-w-full align-middle shadow rounded-lg border-t border-gray-200 overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm flex-shrink-0s">
                                        <div class="flex items-center">
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    <a href="/posts/{{ $post->slug }}">
                                                        {{ $post->title }}
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $post->created_at->diffForHumans() }}
                                        </p>
                                    </td> --}}
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm flex-shrink-0">
                                        <span
                                            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                            <span aria-hidden
                                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                            <span class="relative">Published</span>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm font-medium flex-shrink-0">
                                        <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500 text-blue-600">Edit</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm font-medium flex-shrink-0">
                                        {{-- <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500 text-blue-600">Delete</a> --}}
                                        <form action="" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button>Delete</button>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div
                        class="px-5 py-5 bg-white flex flex-col xs:flex-row items-center xs:justify-between          ">
                        <span class="text-xs xs:text-sm text-gray-900">
                            Showing 1 to 4 of 50 Entries
                        </span>
                        <div class="inline-flex mt-2 xs:mt-0">
                            <button
                                class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                                Prev
                            </button>
                            <button
                                class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-setting>
</x-layout>