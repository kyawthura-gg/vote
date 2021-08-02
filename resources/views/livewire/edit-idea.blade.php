<div x-cloak x-data="{ isOpen: false }" x-show="isOpen" @keydown.escape.window="isOpen = false" @custom-show-edit-modal.window="
        isOpen = true
        $nextTick(() => $refs.title.focus())
    " x-init="
        window.livewire.on('ideaWasUpdated', () => {
            isOpen = false
        })
    " class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen">
        <div x-show.transition.opacity="isOpen" class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true">
        </div>

        <div x-show.transition.origin.bottom.duration.300ms="isOpen" class="py-4 overflow-hidden transition-all transform bg-white modal rounded-tl-xl rounded-tr-xl sm:max-w-lg sm:w-full">
            <div class="absolute top-0 right-0 pt-4 pr-4">
                <button @click="isOpen = false" class="text-gray-400 hover:text-gray-500">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                <h3 class="text-lg font-medium text-center text-gray-900">Edit Idea</h3>
                <p class="px-6 mt-4 text-xs leading-5 text-center text-gray-500">You have one hour to edit your idea from the time you created it.</p>

                <form wire:submit.prevent="updateIdea" action="#" method="POST" class="px-4 py-6 space-y-4">
                    <div>
                        <input wire:model.defer="title" x-ref="title" type="text" class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl" placeholder="Your Idea" required>
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
                            <span class="ml-1">Update</span>
                        </button>
                    </div>
                </form>
            </div>

        </div> <!-- end modal -->
    </div>
</div>
