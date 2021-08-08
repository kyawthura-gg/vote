<div wire:poll="getNotificationCount" x-data="{ isOpen: false }" class="relative">
    <button @click="isOpen = !isOpen
        if (isOpen) {
            Livewire.emit('getNotifications')
        }
    ">
        <svg class="w-8 h-8 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
        </svg>
        @if ($notificationCount)
        <div class="absolute flex items-center justify-center w-6 h-6 text-white border-2 rounded-full bg-red text-xxs -top-1 -right-1">{{ $notificationCount }}</div>
        @endif
    </button>
    <ul class="absolute z-10 overflow-y-auto text-sm text-left text-gray-700 bg-white w-76 md:w-96 shadow-dialog rounded-xl max-h-128 -right-28 md:-right-12" x-cloak x-show.transition.origin.top="isOpen" @click.away="isOpen = false" @keydown.escape.window="isOpen = false">
        @if ($notifications->isNotEmpty() && ! $isLoading)
        @foreach ($notifications as $notification)
        <li>
            <a href="{{ route('idea.show', $notification->data['idea_slug']) }}" @click.prevent="isOpen = false" wire:click.prevent="markAsRead('{{ $notification->id }}')" class="flex px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                <img src="{{ $notification->data['user_avatar'] }}" class="w-10 h-10 rounded-xl" alt="avatar">
                <div class="ml-4">
                    <div class="line-clamp-6">
                        <span class="font-semibold">{{ $notification->data['user_name'] }}</span> commented on
                        <span class="font-semibold">{{ $notification->data['idea_title'] }}</span>:
                        <span>"{{ $notification->data['comment_body'] }}"</span>
                    </div>
                    <div class="mt-2 text-xs text-gray-500">{{ $notification->created_at->diffForHumans() }}</div>
                </div>
            </a>
        </li>
        @endforeach
        <li class="text-center border-t border-gray-300">
            <button wire:click="markAllAsRead" @click="isOpen = false" class="block w-full px-5 py-4 font-semibold transition duration-150 ease-in hover:bg-gray-100">
                Mark all as read
            </button>
        </li>
        @elseif ($isLoading)
        @foreach (range(1,3) as $item)
        <li class="flex items-center px-5 py-3 transition duration-150 ease-in animate-pulse">
            <div class="w-10 h-10 bg-gray-200 rounded-xl"></div>
            <div class="flex-1 ml-4 space-y-2">
                <div class="w-full h-4 bg-gray-200 rounded"></div>
                <div class="w-full h-4 bg-gray-200 rounded"></div>
                <div class="w-1/2 h-4 bg-gray-200 rounded"></div>
            </div>
        </li>
        @endforeach
        @else
        <li class="w-40 py-6 mx-auto">
            <img src="{{ asset('img/no-ideas.svg') }}" alt="No Ideas" class="mx-auto mix-blend-luminosity">
            <div class="mt-6 font-bold text-center text-gray-400">No new notifications</div>
        </li>
        @endif
    </ul>
</div>
