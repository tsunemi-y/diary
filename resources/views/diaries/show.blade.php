<div class="card">
    <img src="{{ $diary->image }}" class="card-img-top" alt="{{ $diary->title }}">
    <div class="card-body">
        <h5 class="card-title">{{ $diary->title }}</h5>
        <p class="card-text">{{ $diary->content }}</p>
    </div>
    <div class="card-footer text-muted">
        {{ $diary->created_at->format('Y-m-d H:i:s') }}
        <a href="{{ route('diaries.edit', ['diary' => $diary->id]) }}" class="btn btn-primary float-right">編集</a>
        <form action="{{ route('diaries.destroy', ['diary' => $diary->id]) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('本当に削除しますか？')">削除する</button>
        </form>
    </div>
</div>

