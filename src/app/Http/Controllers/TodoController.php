<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use App\Models\Todo;
use Illuminate\Http\RedirectResponse;
use Packages\Todo\Jobs\CreateTodoJob;

/**
 * Todo Controller
 */
class TodoController extends Controller
{
    /**
     * Todo 一覧表示
     */
    public function index(): \Illuminate\View\View
    {
        return view('todos.index', [
            'todoList' => Todo::all(),
        ]);
    }

    /**
     * Todo 作成
     */
    public function create(): RedirectResponse
    {
        // CreateTodoJobをdispatchする
        CreateTodoJob::dispatch();

        return redirect()
            ->route('todo.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTodoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTodoRequest $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
