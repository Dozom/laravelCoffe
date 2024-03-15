<article class="article">
    <h2>{{ $post->title }}</h2>
    <section class="main_review">
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->description }}</p>
        <img class="image-box" src="{{ $post->image_url }}" alt="{{ $post->image_alt }}">
    </section>
    <footer>
        <p>
            Publicado el
            <time datetime="{{ $post->created_at }}"> {{ $post->created_at }} </time>
            por Staff.
        </p>
    </footer>
</article>