<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    // showページへ移動
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }
    
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', ['task' => $task]);
    }
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(TaskRequest $request, $id)
    {
        // ここはidで探して持ってくる以外はtaskと同じ
        $task = Task::find($id);
        // articleの用意
        $task->title = $request->title;
        $task->body = $request->body;
        // 保存
        $task->save();
        // 登録したらindexに戻る
        return redirect('/tasks');
    }
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect('/tasks');
    }

    public function store(TaskRequest $request)
    {
        // インスタンスの作成
        $task = new Task;

        // 値の用意
        $task->title = $request->title;
        $task->body = $request->body;


        // インスタンスに値を設定して保存
        $task->save();

        // 登録したらindexに戻る
        return redirect('/tasks');
    }   
}