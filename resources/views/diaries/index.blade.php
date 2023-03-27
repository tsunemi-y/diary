<!doctype html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日記一覧</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <div class="container">
      <div class="row">
        @foreach ($diaries as $diary)
            <a href="{{ route('diaries.show', $diary->id) }}">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{ $diary->image }}" alt="{{ $diary->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $diary->title }}</h5>
                        <p class="card-text">{{ $diary->content }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">{{ $diary->created_at->format('Y/m/d') }}</small>
                        </div>
                    </div>
                    </div>
                </div>
            </a>
        @endforeach
      </div>
      <div class="row mt-5">
        <div class="col-12 text-center">
          <a href="{{ route('diaries.create') }}" class="btn btn-primary">新規作成</a>
        </div>
      </div>      
      <div class="row">
        <div class="col-12">
          {{ $diaries->links() }}
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
