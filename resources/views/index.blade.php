<x-app-layout>
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
        <div class="flex transition duration-150 ease-in bg-white cursor-pointer idea-container hover:shadow-card rounded-xl">
            <div class="hidden px-5 py-8 border-r border-gray-100 md:block">
                <div class="text-center">
                    <div class="text-2xl font-semibold">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 px-4 py-3 font-bold uppercase transition duration-150 ease-in bg-gray-200 border border-gray-200 hover:border-gray-400 text-xxs rounded-xl">Vote</button>
                </div>
            </div>
            <div class="flex flex-col flex-1 px-2 py-6 md:flex-row">
                <div class="flex-none mx-2 md:mx-0">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="flex flex-col justify-between w-full mx-2 md:mx-4">
                    <h4 class="mt-2 text-xl font-semibold md:mt-0">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="mt-3 text-gray-600 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur.
                    </div>

                    <div class="flex flex-col justify-between mt-6 md:flex-row md:items-center">
                        <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div
                            x-data="{ isOpen: false }"
                            class="flex items-center mt-4 space-x-2 md:mt-0"
                        >
                            <div class="px-4 py-2 font-bold leading-none text-center uppercase bg-gray-200 rounded-full text-xxs w-28 h-7">Open</div>
                            <button
                                @click="isOpen = !isOpen"
                                class="relative px-3 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7"
                            >
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                <ul
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute right-0 py-3 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl md:ml-8 top-8 md:top-6 md:left-0"
                                >
                                    <li><a href="#" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Mark as Spam</a></li>
                                    <li><a href="#" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>

                        <div class="flex items-center mt-4 md:hidden md:mt-0">
                            <div class="h-10 px-4 py-2 pr-8 text-center bg-gray-100 rounded-xl">
                                <div class="text-sm font-bold leading-none">12</div>
                                <div class="font-semibold leading-none text-gray-400 text-xxs">Votes</div>
                            </div>
                            <button
                                class="w-20 px-4 py-3 -mx-5 font-bold uppercase transition duration-150 ease-in bg-gray-200 border border-gray-200 text-xxs rounded-xl hover:border-gray-400"
                            >
                                Vote
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea-container -->
        <div class="flex transition duration-150 ease-in bg-white cursor-pointer idea-container hover:shadow-card rounded-xl">
            <div class="hidden px-5 py-8 border-r border-gray-100 md:block">
                <div class="text-center">
                    <div class="text-2xl font-semibold">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 px-4 py-3 font-bold uppercase transition duration-150 ease-in bg-gray-200 border border-gray-200 hover:border-gray-400 text-xxs rounded-xl">Vote</button>
                </div>
            </div>
            <div class="flex flex-col flex-1 px-2 py-6 md:flex-row">
                <div class="flex-none mx-2 md:mx-0">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="flex flex-col justify-between w-full mx-2">
                    <h4 class="mt-2 text-xl font-semibold md:mt-0">
                        <a href="#" class="hover:underline">Another random title can go here</a>
                    </h4>
                    <div class="mt-3 text-gray-600 line-clamp-3">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et dignissimos odit possimus culpa assumenda repellendus ipsam. Placeat, fuga reprehenderit, eius minus nam aliquid vel beatae, consequatur deserunt necessitatibus corporis sequi.
                    </div>

                    <div class="flex flex-col justify-between mt-6 md:flex-row md:items-center">
                        <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div
                            x-data="{ isOpen: false }"
                            class="flex items-center mt-4 space-x-2 md:mt-0"
                        >
                            <div class="px-4 py-2 font-bold leading-none text-center uppercase bg-gray-200 rounded-full text-xxs w-28 h-7">Open</div>
                            <button
                                @click="isOpen = !isOpen"
                                class="relative px-3 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7"
                            >
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                <ul
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute right-0 py-3 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl md:ml-8 top-8 md:top-6 md:left-0"
                                >
                                    <li><a href="#" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Mark as Spam</a></li>
                                    <li><a href="#" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>

                        <div class="flex items-center mt-4 md:hidden md:mt-0">
                            <div class="h-10 px-4 py-2 pr-8 text-center bg-gray-100 rounded-xl">
                                <div class="text-sm font-bold leading-none">12</div>
                                <div class="font-semibold leading-none text-gray-400 text-xxs">Votes</div>
                            </div>
                            <button
                                class="w-20 px-4 py-3 -mx-5 font-bold uppercase transition duration-150 ease-in bg-gray-200 border border-gray-200 text-xxs rounded-xl hover:border-gray-400"
                            >
                                Vote
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea-container -->
        <div class="flex transition duration-150 ease-in bg-white cursor-pointer idea-container hover:shadow-card rounded-xl">
            <div class="hidden px-5 py-8 border-r border-gray-100 md:block">
                <div class="text-center">
                    <div class="text-2xl font-semibold">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 px-4 py-3 font-bold uppercase transition duration-150 ease-in bg-gray-200 border border-gray-200 hover:border-gray-400 text-xxs rounded-xl">Vote</button>
                </div>
            </div>
            <div class="flex flex-col flex-1 px-2 py-6 md:flex-row">
                <div class="flex-none mx-2 md:mx-0">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="flex flex-col justify-between w-full mx-2">
                    <h4 class="mt-2 text-xl font-semibold md:mt-0">
                        <a href="#" class="hover:underline">And another random title can go here</a>
                    </h4>
                    <div class="mt-3 text-gray-600 line-clamp-3">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et dignissimos odit possimus culpa assumenda repellendus ipsam. Placeat, fuga reprehenderit, eius minus nam aliquid vel beatae, consequatur deserunt necessitatibus corporis sequi.
                    </div>

                    <div class="flex flex-col justify-between mt-6 md:flex-row md:items-center">
                        <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div
                            x-data="{ isOpen: false }"
                            class="flex items-center mt-4 space-x-2 md:mt-0"
                        >
                            <div class="px-4 py-2 font-bold leading-none text-center uppercase bg-gray-200 rounded-full text-xxs w-28 h-7">Open</div>
                            <button
                                @click="isOpen = !isOpen"
                                class="relative px-3 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7"
                            >
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                <ul
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute right-0 py-3 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl md:ml-8 top-8 md:top-6 md:left-0"
                                >
                                    <li><a href="#" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Mark as Spam</a></li>
                                    <li><a href="#" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>

                        <div class="flex items-center mt-4 md:hidden md:mt-0">
                            <div class="h-10 px-4 py-2 pr-8 text-center bg-gray-100 rounded-xl">
                                <div class="text-sm font-bold leading-none">12</div>
                                <div class="font-semibold leading-none text-gray-400 text-xxs">Votes</div>
                            </div>
                            <button
                                class="w-20 px-4 py-3 -mx-5 font-bold uppercase transition duration-150 ease-in bg-gray-200 border border-gray-200 text-xxs rounded-xl hover:border-gray-400"
                            >
                                Vote
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea-container -->
        <div class="flex transition duration-150 ease-in bg-white cursor-pointer idea-container hover:shadow-card rounded-xl">
            <div class="hidden px-5 py-8 border-r border-gray-100 md:block">
                <div class="text-center">
                    <div class="text-2xl font-semibold">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 px-4 py-3 font-bold uppercase transition duration-150 ease-in bg-gray-200 border border-gray-200 hover:border-gray-400 text-xxs rounded-xl">Vote</button>
                </div>
            </div>
            <div class="flex flex-col flex-1 px-2 py-6 md:flex-row">
                <div class="flex-none mx-2 md:mx-0">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="flex flex-col justify-between w-full mx-2">
                    <h4 class="mt-2 text-xl font-semibold md:mt-0">
                        <a href="#" class="hover:underline">One more random title can go here</a>
                    </h4>
                    <div class="mt-3 text-gray-600 line-clamp-3">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et dignissimos odit possimus culpa assumenda repellendus ipsam. Placeat, fuga reprehenderit, eius minus nam aliquid vel beatae, consequatur deserunt necessitatibus corporis sequi.
                    </div>

                    <div class="flex flex-col justify-between mt-6 md:flex-row md:items-center">
                        <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div
                            x-data="{ isOpen: false }"
                            class="flex items-center mt-4 space-x-2 md:mt-0"
                        >
                            <div class="px-4 py-2 font-bold leading-none text-center uppercase bg-gray-200 rounded-full text-xxs w-28 h-7">Open</div>
                            <button
                                @click="isOpen = !isOpen"
                                class="relative px-3 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7"
                            >
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                <ul
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute right-0 py-3 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl md:ml-8 top-8 md:top-6 md:left-0"
                                >
                                    <li><a href="#" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Mark as Spam</a></li>
                                    <li><a href="#" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>

                        <div class="flex items-center mt-4 md:hidden md:mt-0">
                            <div class="h-10 px-4 py-2 pr-8 text-center bg-gray-100 rounded-xl">
                                <div class="text-sm font-bold leading-none">12</div>
                                <div class="font-semibold leading-none text-gray-400 text-xxs">Votes</div>
                            </div>
                            <button
                                class="w-20 px-4 py-3 -mx-5 font-bold uppercase transition duration-150 ease-in bg-gray-200 border border-gray-200 text-xxs rounded-xl hover:border-gray-400"
                            >
                                Vote
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea-container -->

    </div> <!-- end ideas-container -->
</x-app-layout>