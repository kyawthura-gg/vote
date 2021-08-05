<div>
    @if ($comments->isNotEmpty())

    <div class="relative pt-4 my-8 mt-1 space-y-6 comments-container md:ml-22">

        @foreach ($comments as $comment)
        <livewire:idea-comment :key="$comment->id" :comment="$comment" :ideaUserId="$idea->user->id" />
        @endforeach
        {{-- <div class="relative flex mt-4 bg-white is-admin comment-container rounded-xl">
                 <div class="flex flex-1 px-4 py-6">
                     <div class="flex-none">
                         <a href="#">
                             <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
                         </a>
                         <div class="mt-1 font-bold text-center uppercase text-blue text-xxs">Admin</div>
                     </div>
                     <div class="w-full mx-4">
                         <h4 class="text-xl font-semibold">
                             <a href="#" class="hover:underline">Status Changed to "Under Consideration"</a>
                         </h4>
                         <div class="mt-3 text-gray-600 line-clamp-3">
                             Lorem ipsum dolor sit amet consectetur.
                         </div>

                         <div class="flex items-center justify-between mt-6">
                             <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                                 <div class="font-bold text-blue">Andrea</div>
                                 <div>&bull;</div>
                                 <div>10 hours ago</div>
                             </div>
                             <div class="flex items-center space-x-2">
                                 <button class="relative px-3 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">
                                     <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                     <ul class="absolute hidden py-3 ml-8 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl">
                                         <li><a href="#" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Mark as Spam</a></li>
                                         <li><a href="#" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Delete Post</a></li>
                                     </ul>
                                 </button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div> <!-- end comment-container --> --}}

    </div>
    <div class="my-8 md:ml-22">
        {{ $comments->onEachSide(1)->links() }}
    </div>
    @else
    <div class="mx-auto mt-12 w-70">
        <img src="{{ asset('img/no-ideas.svg') }}" alt="No Ideas" class="mx-auto" style="mix-blend-mode: luminosity">
        <div class="mt-6 font-bold text-center text-gray-400">No comments yet...</div>
    </div>
    @endif
</div>
