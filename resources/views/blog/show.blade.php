<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $post->meta_description }}">
    <title>{{ $post->title }}</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
            color: #333;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #1a1a1a;
        }

        .meta {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #eee;
        }

        .content {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .content img {
            max-width: 100%;
            height: auto;
        }

        .tags {
            margin-top: 2rem;
            padding-top: 1rem;
            border-top: 1px solid #eee;
        }

        .tag {
            display: inline-block;
            background: #f0f0f0;
            padding: 0.25rem 0.75rem;
            margin-right: 0.5rem;
            border-radius: 3px;
            font-size: 0.85rem;
        }

        .cover-image {
            width: 100%;
            height: auto;
            margin-bottom: 2rem;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    @if($post->cover_image_url)
    <img src="{{ $post->cover_image_url }}" alt="{{ $post->title }}" class="cover-image">
    @endif

    <h1>{{ $post->title }}</h1>

    <div class="meta">
        <span>Status: {{ ucfirst($post->status) }}</span>
        @if($post->published_at)
        <span> | Publicado em: {{ $post->published_at->format('d/m/Y H:i') }}</span>
        @endif
    </div>

    <div class="content">
        {!! $post->content_html !!}
    </div>

    @if($post->tags && count($post->tags) > 0)
    <div class="tags">
        <strong>Tags:</strong>
        @foreach($post->tags as $tag)
        <span class="tag">{{ $tag }}</span>
        @endforeach
    </div>
    @endif
</body>

</html>