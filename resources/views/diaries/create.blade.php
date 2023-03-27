<div class="container">
    <form method="POST" action="{{ route('diaries.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">タイトル</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">内容</label>
            <textarea name="content" id="content" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="image">画像</label>
            <input type="file" name="image" id="image" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">投稿する</button>
    </form>
</div>