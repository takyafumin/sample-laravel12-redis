<x-layout>
    @foreach ($todoList as $todo)
        <div>{{ $todo->id }}, {{ $todo->title }}</div>
    @endforeach
</x-layout>
