<div x-data="{ isOpen: false }" x-init="
         Livewire.on('commentWasAdded', () => {
             isOpen = false
         })
     " class="relative">
    <button type="button" @click="isOpen = !isOpen" class="flex items-center justify-center w-32 px-6 py-3 text-sm font-semibold text-white transition duration-150 ease-in border h-11 bg-blue rounded-xl border-blue hover:bg-blue-hover">
        Reply
    </button>
    <div class="absolute z-10 w-64 mt-2 text-sm font-semibold text-left bg-white md:w-104 shadow-dialog rounded-xl" x-cloak x-show.transition.origin.top.left="isOpen" @click.away="isOpen = false" @keydown.escape.window="isOpen = false">
        @auth
        <form wire:submit.prevent="addComment" action="#" class="px-4 py-6 space-y-4">
            <div>
                <textarea wire:model="comment" name="post_comment" id="post_comment" cols="30" rows="4" class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl" placeholder="Go ahead, don't be shy. Share your thoughts..." required></textarea>

                @error('comment')
                <p class="mt-1 text-xs text-red">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col items-center md:flex-row md:space-x-3">
                <button type="submit" class="flex items-center justify-center w-full px-6 py-3 text-sm font-semibold text-white transition duration-150 ease-in border h-11 md:w-1/2 bg-blue rounded-xl border-blue hover:bg-blue-hover">
                    Post Comment
                </button>
                <button type="button" class="flex items-center justify-center w-full px-6 py-3 mt-2 text-xs font-semibold transition duration-150 ease-in bg-gray-200 border border-gray-200 md:w-32 h-11 rounded-xl hover:border-gray-400 md:mt-0">
                    <svg class="w-4 text-gray-600 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                    </svg>
                    <span class="ml-1">Attach</span>
                </button>
            </div>

        </form>
        @else
        <div class="px-4 py-6">
            <p class="font-normal">Please login or create an account to post a comment.</p>
            <div class="flex items-center mt-8 space-x-3">
                <a href="{{ route('login') }}" class="w-1/2 px-6 py-3 text-sm font-semibold text-center text-white transition duration-150 ease-in h-11 bg-blue rounded-xl hover:bg-blue-hover">
                    Login
                </a>
                <a href="{{ route('register') }}" class="flex items-center justify-center w-1/2 px-6 py-3 text-xs font-semibold transition duration-150 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                    Sign Up
                </a>
            </div>
        </div>
        @endauth
    </div>
</div>
