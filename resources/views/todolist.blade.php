<!-- resources/views/todolist.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>ToDo List</title>
</head>
<body>
    <h1>ToDo List</h1>

    <div>
        <h2>タスクの一覧</h2>
        <a href="/todo_create">タスクを追加</a>
        <table border="1">
            <tr>
                <th>タスクの名前</th>
                <th>タスクの説明</th>
                <th>担当者の名前</th>
                <th>見積時間(h)</th>
                <th colspan="2">操作</th>
            </tr>
            @foreach($todos as $todo)
            <tr>
                <td>{{$todo->task_name}}</td>
                <td>{{$todo->task_description}}</td>
                <td>{{$todo->assign_person_name}}</td>
                <td>{{$todo->estimate_hour}}</td>
                <td><a href="/todo_edit/{{$todo->id}}">編集</a></td>
                <td>
                    <form method="POST" action="/delete/{{$todo->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">削除</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
