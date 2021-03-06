<li id="status-">
    <a href="{{ route('users.show', $user->id) }}">
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar">
    </a>
    <span class="user">
        <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
    </span>
    <span class="timestamp">
        {{ $status->created_at->diffForHumans() }}
    </span>
    <span class="content">{{ $status->content }}</span>

    @can('destroy', $status)
        <form action="{{ route('statuses.destroy', $status->id) }}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field()}}
            <button class="btn btn-sm btn-danger status-delete-btn" type="submit">删除</button>
        </form>
    @endcan
</li>