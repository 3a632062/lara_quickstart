<!-- 目前任務 -->
@if (count($tasks) > 0)
    <tbody>
    @foreach ($tasks as $task)
        <tr>
            <!-- 任務名稱 -->
            <td class="table-text">
                <div>{{ $task->name }} </div>
            </td>
            <td>
                <form action="/task/{{ $task->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button>刪除任務</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
@endif
