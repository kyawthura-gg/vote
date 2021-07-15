<x-app-layout>
    <div class="flex space-x-6 fliters ">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full px-4 py-2 border-none rounded-xl">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full px-4 py-2 border-none rounded-xl">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Category Four</option>
            </select>
        </div>
        <div class="relative w-2/3">
            <input type="search" placeholder="Find an idea" class="w-full px-4 py-2 pl-8 placeholder-gray-900 bg-white border-none rounded-xl">
            <div class="absolute top-0 flex h-full ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>
    <!-- End filter -->

    <div class="my-6 space-y-6 ideas-container">
        <div class="flex transition duration-150 ease-in bg-white cursor-pointer idea-container hover:shadow-card rounded-xl">
            <div class="px-5 py-8 border-r broder-gray-100">
                <div class="text-center">
                    <div class="text-2xl font-semibold">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 px-4 py-3 font-bold uppercase transition duration-150 ease-in bg-gray-200 border broder-gray-200 hover:border-gray-400 text-xxs rounded-xl">Vote</button>
                </div>
            </div>
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="{{ asset('img/avatar-vote.jpg')}}" alt="" class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A title can go here</a>
                    </h4>
                    <div class="mt-3 text-gray-600 line-clamp-3">
                        Lorem ipsum dolor sit
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-800">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2 ">
                            <div class="px-4 py-2 font-bold leading-none text-center uppercase bg-gray-200 rounded-full text-xxs w-28 h-7">Open</div>
                            <button class="relative px-3 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 5 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-400">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                                <ul class="absolute py-3 ml-8 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl">
                                    <li><a href="#" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Mark as Spam</a></li>
                                    <li><a href="#" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of idea container -->

        <div class="container flex transition duration-150 ease-in bg-white cursor-pointer idea hover:shadow-card rounded-xl">
            <div class="px-5 py-8 border-r broder-gray-100">
                <div class="text-center">
                    <div class="text-2xl font-semibold text-blue">66</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 px-4 py-3 font-bold text-white uppercase transition duration-150 ease-in border bg-blue broder-gray-200 hover:border-gray-400 text-xxs rounded-xl">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="{{ asset('img/avatar-vote.jpg')}}" alt="" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A title can go here</a>
                    </h4>
                    <div class="mt-3 text-gray-600 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt iure quasi dolores magni enim. Quo, aliquid officiis rerum perferendis inventore eligendi tempore blanditiis enim? Temporibus quos amet modi dolorem dolor adipisci. Quidem asperiores repudiandae provident laudantium quod quae nostrum beatae dolorem libero officia deserunt, perferendis, error temporibus labore sapiente eius aperiam blanditiis. Unde, nam provident, doloribus natus tempora ipsa enim iusto quos vel sequi cupiditate quam fuga eum, omnis incidunt! Sit assumenda provident totam amet unde tenetur vitae, voluptatum numquam placeat, nobis fuga est consequatur magni velit dolore? Dolorem quia itaque iure accusantium at exercitationem quidem tempore ipsam sed necessitatibus.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-800">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2 ">
                            <div class="px-4 py-2 font-bold leading-none text-center text-white uppercase rounded-full bg-yellow text-xxs w-28 h-7">In Progress</div>
                            <button class="relative px-3 py-2 transition duration-150 ease-in bg-gray-100 rounded-full hover:bg-gray-200 h-7">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 5 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-400">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of idea container -->

        <div class="container flex transition duration-150 ease-in bg-white cursor-pointer idea hover:shadow-card rounded-xl">
            <div class="px-5 py-8 border-r broder-gray-100">
                <div class="text-center">
                    <div class="text-2xl font-semibold">32</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 px-4 py-3 font-bold uppercase transition duration-150 ease-in bg-gray-200 border broder-gray-200 hover:border-gray-400 text-xxs rounded-xl">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="{{ asset('img/avatar-vote.jpg')}}" alt="" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A title can go here</a>
                    </h4>
                    <div class="mt-3 text-gray-600 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt iure quasi dolores magni enim. Quo, aliquid officiis rerum perferendis inventore eligendi tempore blanditiis enim? Temporibus quos amet modi dolorem dolor adipisci. Quidem asperiores repudiandae provident laudantium quod quae nostrum beatae dolorem libero officia deserunt, perferendis, error temporibus labore sapiente eius aperiam blanditiis. Unde, nam provident, doloribus natus tempora ipsa enim iusto quos vel sequi cupiditate quam fuga eum, omnis incidunt! Sit assumenda provident totam amet unde tenetur vitae, voluptatum numquam placeat, nobis fuga est consequatur magni velit dolore? Dolorem quia itaque iure accusantium at exercitationem quidem tempore ipsam sed necessitatibus.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-800">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2 ">
                            <div class="px-4 py-2 font-bold leading-none text-center text-white uppercase rounded-full bg-red text-xxs w-28 h-7">Closed</div>
                            <button class="relative px-3 py-2 transition duration-150 ease-in bg-gray-100 rounded-full hover:bg-gray-200 h-7">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 5 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-400">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of idea container -->

        <div class="container flex transition duration-150 ease-in bg-white cursor-pointer idea hover:shadow-card rounded-xl">
            <div class="px-5 py-8 border-r broder-gray-100">
                <div class="text-center">
                    <div class="text-2xl font-semibold">22</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 px-4 py-3 font-bold uppercase transition duration-150 ease-in bg-gray-200 border broder-gray-200 hover:border-gray-400 text-xxs rounded-xl">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="{{ asset('img/avatar-vote.jpg')}}" alt="" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A title can go here</a>
                    </h4>
                    <div class="mt-3 text-gray-600 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt iure quasi dolores magni enim. Quo, aliquid officiis rerum perferendis inventore eligendi tempore blanditiis enim? Temporibus quos amet modi dolorem dolor adipisci. Quidem asperiores repudiandae provident laudantium quod quae nostrum beatae dolorem libero officia deserunt, perferendis, error temporibus labore sapiente eius aperiam blanditiis. Unde, nam provident, doloribus natus tempora ipsa enim iusto quos vel sequi cupiditate quam fuga eum, omnis incidunt! Sit assumenda provident totam amet unde tenetur vitae, voluptatum numquam placeat, nobis fuga est consequatur magni velit dolore? Dolorem quia itaque iure accusantium at exercitationem quidem tempore ipsam sed necessitatibus.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-800">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2 ">
                            <div class="px-4 py-2 font-bold leading-none text-center text-white uppercase rounded-full bg-green text-xxs w-28 h-7">Implemented</div>
                            <button class="relative px-3 py-2 transition duration-150 ease-in bg-gray-100 rounded-full hover:bg-gray-200 h-7">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 5 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-400">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of idea container -->

        <div class="container flex transition duration-150 ease-in bg-white cursor-pointer idea hover:shadow-card rounded-xl">
            <div class="px-5 py-8 border-r broder-gray-100">
                <div class="text-center">
                    <div class="text-2xl font-semibold">2</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 px-4 py-3 font-bold uppercase transition duration-150 ease-in bg-gray-200 border broder-gray-200 hover:border-gray-400 text-xxs rounded-xl">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="{{ asset('img/avatar-vote.jpg')}}" alt="" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A title can go here</a>
                    </h4>
                    <div class="mt-3 text-gray-600 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt iure quasi dolores magni enim. Quo, aliquid officiis rerum perferendis inventore eligendi tempore blanditiis enim? Temporibus quos amet modi dolorem dolor adipisci. Quidem asperiores repudiandae provident laudantium quod quae nostrum beatae dolorem libero officia deserunt, perferendis, error temporibus labore sapiente eius aperiam blanditiis. Unde, nam provident, doloribus natus tempora ipsa enim iusto quos vel sequi cupiditate quam fuga eum, omnis incidunt! Sit assumenda provident totam amet unde tenetur vitae, voluptatum numquam placeat, nobis fuga est consequatur magni velit dolore? Dolorem quia itaque iure accusantium at exercitationem quidem tempore ipsam sed necessitatibus.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-800">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2 ">
                            <div class="px-4 py-2 font-bold leading-none text-center text-white uppercase rounded-full bg-purple text-xxs w-28 h-7">Considering</div>
                            <button class="relative px-3 py-2 transition duration-150 ease-in bg-gray-100 rounded-full hover:bg-gray-200 h-7">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 5 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-400">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of idea container -->
    </div>
    <!-- end of ideas container -->
</x-app-layout>