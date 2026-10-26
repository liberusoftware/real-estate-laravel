<article>
    <h1>{{ $article->title }}</h1>
    <div>{{ $article->content }}</div>
    <aside>@foreach ($related as $relatedArticle)<a href="{{ url('/news/'.$relatedArticle->slug) }}">{{ $relatedArticle->title }}</a>@endforeach</aside>
</article>
