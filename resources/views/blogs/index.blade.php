<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <style>
        .blog-content {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    line-height: 1.6;
    font-size: 16px;
}
.blog-content img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 10px 0;
}

    </style>
</head>

<body>
    <h1>All Blogs</h1>
    <a href="{{ route('blogs.create') }}">Add New Blog</a>
    @foreach($blogs as $blog)
    <h2>{{ $blog->title }}</h2>
    <img src="{{ asset($blog->card_img) }}" alt="Blog Image" width="200">

    <p>{!! $blog->content !!}</p>
    <hr>
    
    @endforeach
</body>

</html>