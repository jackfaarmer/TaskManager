<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-bold mb-4">Your Tasks</h3>
                    <ul>
                        @forelse($tasks as $task)
                            <li class="mb-2">
                                <a href="{{ route('tasks.show', $task->id) }}" class="text-blue-500 hover:underline">
                                    {{ $task->title }}
                                </a>
                                <span class="text-sm text-gray-500">
                                    (Due: {{ $task->due_date ? $task->due_date->format('M d, Y') : 'No deadline' }})
                                </span>
                            </li>
                        @empty
                            <p>No tasks available. <a href="{{ route('tasks.create') }}" class="text-blue-500">Create one now</a>!</p>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
