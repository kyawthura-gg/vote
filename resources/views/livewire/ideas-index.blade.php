<div>
    <div class="flex flex-col space-y-3 filters md:flex-row md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full px-4 py-2 border-none rounded-xl">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-full md:w-1/3">
            <select name="other_filters" id="other_filters" class="w-full px-4 py-2 border-none rounded-xl">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>
        <div class="relative w-full md:w-2/3">
            <input type="search" placeholder="Find an idea" class="w-full px-4 py-2 pl-8 placeholder-gray-900 bg-white border-none rounded-xl">
            <div class="absolute top-0 flex h-full ml-2 itmes-center">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div> <!-- end filters -->

    <div class="my-8 space-y-6 ideas-container">
        @foreach ($ideas as $idea)
        <livewire:idea-index :key="$idea->id" :idea="$idea" :votesCount="$idea->votes_count" />
        @endforeach
    </div> <!-- end ideas-container -->
    <div class="my-8">
        {{ $ideas->links() }}
    </div>
</div>
