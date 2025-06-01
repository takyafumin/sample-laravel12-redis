<x-layout>
    <form action="/todos" method="POST">
        @csrf
        <input type="submit" value="新規作成">
    </form>
    <hr />
    @foreach ($todoList as $todo)
        <div>{{ $todo->id }}, {{ $todo->title }}</div>
    @endforeach
</x-layout>
