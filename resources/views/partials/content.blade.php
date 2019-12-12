<article {!! post_class() !!}>
  @if (get_the_post_thumbnail())
    <a href="{!! get_the_permalink() !!}">{!! get_the_post_thumbnail($post->ID, 'thumbnail', array('class' => 'alignleft')) !!}</a>
  @endif
  <div class="entry-summary">
    <header>
      <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
      @include('partials/entry-meta')
    </header>
    @php the_excerpt() @endphp
    <div class="categories">{!! __('Posted in: ', 'sage') !!}@php the_category(', ') @endphp</div>
  </div>
</article>
