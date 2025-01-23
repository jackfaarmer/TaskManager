<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Task Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-bold mb-4">Task {{ $task->id }}</h3>
                    <ul>
                            <li class="mb-2">
                                <a href="{{ route('tasks.show', $task->id) }}" class="text-blue-500 hover:underline">
                                    {{ $task->title }}
                                </a>
                                <span class="text-sm text-gray-500">
                                    (Due: {{ $task->due_date ? $task->due_date->format('M d, Y') : 'No deadline' }})
                                    <br>
                                    {{ $task->description }}
                                </span>
                            </li>
                    </ul>
                    <a class="btn btn-warning" type="button" href="{{ route('tasks.edit', $task->id) }}">Edit</a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
