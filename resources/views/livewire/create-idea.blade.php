<div>
    @auth
    <form wire:submit.prevent="createIdea" action="#" method="POST" class="px-4 py-6 space-y-4">
        <div>
            <input wire:model.defer="title" type="text" class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl" placeholder="Your Idea" required>
            @error('title')
            <p class="mt-1 text-xs text-red">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <select wire:model.defer="category" name="category_add" id="category_add" class="w-full px-4 py-2 text-sm bg-gray-100 border-none rounded-xl">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        @error('category')
        <p class="mt-1 text-xs text-red">{{ $message }}</p>
        @enderror
        <div>
            <textarea wire:model.defer="description" name="idea" id="idea" cols="30" rows="4" class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl" placeholder="Describe your idea" required></textarea>
            @error('description')
            <p class="mt-1 text-xs text-red">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex items-center justify-between space-x-3">
            <button type="button" class="flex items-center justify-center w-1/2 px-6 py-3 text-xs font-semibold transition duration-150 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                <svg class="w-4 text-gray-600 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                </svg>
                <span class="ml-1">Attach</span>
            </button>
            <button type="submit" class="flex items-center justify-center w-1/2 px-6 py-3 text-xs font-semibold text-white transition duration-150 ease-in border h-11 bg-blue rounded-xl border-blue hover:bg-blue-hover">
                <span class="ml-1">Submit</span>
            </button>
        </div>
    </form>
    @else
    <div class="my-6 text-center">
        <a wire:click.prevent="redirectToLogin" href="{{ route('login') }}" class="justify-center inline-block w-1/2 px-6 py-3 text-xs font-semibold text-white transition duration-150 ease-in border h-11 bg-blue rounded-xl border-blue hover:bg-blue-hover">
            Login
        </a>
        <a wire:click.prevent="redirectToRegister" href="{{ route('register') }}" class="justify-center inline-block w-1/2 px-6 py-3 mt-4 text-xs font-semibold transition duration-150 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
            Sign Up
        </a>
    </div>
    @endauth
</div>
