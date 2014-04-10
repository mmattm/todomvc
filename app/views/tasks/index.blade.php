<h1>Taches</h1>
@foreach ($mytasks as $task)
<p>This is task : {{ $task->id }}</p>
@endforeach

<a href="{{Route('tasks_create')}}"> Create </a>