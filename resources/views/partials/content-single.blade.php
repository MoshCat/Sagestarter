<article @php post_class() @endphp>
  <header>
    {!! get_the_post_thumbnail( $post->ID, 'large', array('class' => 'mb-3')) !!}
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    <div class="categories">{!! __('Posted in: ', 'sage') !!}@php the_category(', ') @endphp</div>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
