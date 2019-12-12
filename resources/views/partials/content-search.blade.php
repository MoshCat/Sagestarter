<article @php post_class() @endphp>
  @if (get_the_post_thumbnail())
    <a href="{!! get_the_permalink() !!}">{!! get_the_post_thumbnail( $post->ID, 'thumbnail', array('class' => 'alignleft')) !!}</a>
  @endif
  <div class="entry-summary">
    <header>
      <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
      @if (get_post_type() === 'post')
        @include('partials/entry-meta')
      @endif
    </header>
    @php the_excerpt() @endphp
    @if (get_post_type() === 'post')
      <div class="categories">{!! __('Posted in: ', 'sage') !!}@php the_category(', ') @endphp</div>
    @endif
  </div>
</article>
