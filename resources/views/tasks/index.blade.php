<h1>List of task</h1>
<table>
<thead>
    <tr>
        <th>User</th>
        <th>Task</th>
        <th>Date</th>
        <th>Options</th>
    </tr>
</thead>
<tbody>
@foreach($tasks as $task)
    <tr>
        <td>{{$task->username}}</td>
        <td><a href="/tasks/view">{{$task->name}}</a></td>
        <td>{{$task->date}}</td>
        <td>
            <a href="/tasks/edit">Edit</a>
            <a href="/tasks/delete">Delete</a>
        </td>
    </tr>
@endforeach
</tbody>
</table>
<a href="/tasks/new">create new</a>
