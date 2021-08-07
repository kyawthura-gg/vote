<div class="relative flex mt-4 transition duration-500 ease-in bg-white comment-container rounded-xl">
    <div class="flex flex-col flex-1 px-4 py-6 md:flex-row">
        <div class="flex-none">
            <a href="#">
                <img src="{{ $comment->user->getAvatar() }}" alt="avatar" class="w-14 h-14 rounded-xl">
            </a>
        </div>
        <div class="w-full md:mx-4">
            <div class="text-gray-600">
                {{ $comment->body }}
            </div>

            <div class="flex items-center justify-between mt-6">
                <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                    <div class="font-bold text-gray-900">{{ $comment->user->name }}</div>
                    <div>&bull;</div>
                    {{-- @if ($comment->user->id === $comment->idea->user->id) --}}
                    @if ($comment->user->id === $ideaUserId)
                    <div class="px-3 py-1 bg-gray-100 border rounded-full">OP</div>
                    <div>&bull;</div>
                    @endif
                    <div>{{ $comment->created_at->diffForHumans() }}</div>
                </div>
                @auth
                <div class="flex items-center space-x-2" x-data="{ isOpen: false }">
                    <div class="relative">
                        <button class="relative px-3 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7" @click="isOpen = !isOpen">
                            <svg fill="currentColor" width="24" height="6">
                                <path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)">
                            </svg>
                        </button>
                        <ul class="absolute right-0 z-10 py-3 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl md:ml-8 top-8 md:top-6 md:left-0" x-cloak x-show.transition.origin.top.left="isOpen" @click.away="isOpen = false" @keydown.escape.window="isOpen = false">
                            @can('update', $comment)
                            <li>
                                <a href="#" @click.prevent="
                                        isOpen = false
                                        Livewire.emit('setEditComment', {{ $comment->id }})
                                    " class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                    Edit Comment
                                </a>
                            </li>
                            @endcan
                            @can('delete', $comment)
                            <li>
                                <a href="#" @click.prevent="
                                         isOpen = false
                                         Livewire.emit('setDeleteComment', {{ $comment->id }})
                                     " class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                    Delete Comment
                                </a>
                            </li>
                            @endcan
                            <li><a href="#" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Mark as Spam</a></li>
                        </ul>
                    </div>
                </div>
                @endauth
            </div>
        </div>
    </div>
</div> <!-- end comment-container -->
