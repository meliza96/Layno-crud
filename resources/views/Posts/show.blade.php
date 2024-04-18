<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">{{ $post->title }}</h1>
                        <p class="lead mb-4">{{ $post->content }}</p>
                        <div class="btn-group" role="group" aria-label="Post Actions">
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                        <a href="{{ route('posts.index') }}" class="btn btn-primary mt-2">Back to all posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>