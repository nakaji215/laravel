<!DOCTYPE html>
<html>
<head>
    <title>ToDoリスト - タスク追加</title>
</head>
<body>
    <h1>ToDoリスト - タスク追加</h1>

    <div>
        <h2>タスクを追加</h2>
        <form method="POST" action="/todo_create">
            @csrf
            <p>
                タスクの名前：<input type="text" name="task_name" required>
            </p>
            <p>
                タスクの説明：<input type="text" name="task_description">
            </p>
            <p>
                担当者の名前：<input type="text" name="assign_person_name">
            </p>
            <p>
                見積時間(h)：<input type="number" name="estimate_hour">
            </p>
            <input type="submit" name="create" value="追加">
        </form>
        <a href="/todolist">戻る</a>
    </div>
</body>
</html>
