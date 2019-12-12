@php
  global $post;

  // Columns size
  if ($row['post_columns'] === 'col-md-6') {
    $thumbsize = 'half';
  } elseif ($row['post_columns'] === 'col-md-4') {
    $thumbsize = 'third';
  } else {
    $thumbsize = 'fourth';
  }

  // Category
  $tax_query = array('relation' => 'AND');
  if ($row['post_type'] === 'post' && $row['post_tax']) {
    $tax_query[] =  array(
      'taxonomy' => 'category',
      'field' => 'id',
      'terms' => $row['post_tax']
    );
  }

  // Post type (ACF Extended required)
  $args = array(
    'post_type'           => $row['post_type'],
    'posts_per_page'      => $row['post_amount'],
    'ignore_sticky_posts' => true,
    'tax_query'           => $tax_query
  );

  // WP Query
  $query = new WP_Query( $args );

@endphp
<div class="row">
  @if ($row['intro'])
    <div class="col-12">
      {!! $row['intro'] !!}
    </div>
  @endif
  @while ($query->have_posts()) @php $query->the_post() @endphp
    @php
      $permalink      = get_the_permalink();
      $excerpt        = get_the_excerpt();
      $excerpt_length = ($row['excerpt_length']) ? (int) $row['excerpt_length'] : 280;
      $excerpt        = substr($excerpt, 0, $excerpt_length);
      $excerpt_crop   = substr($excerpt, 0, strrpos($excerpt, ' ')) . '... <a href="' . $permalink . '">' . __('Read More', 'sage') . '</a>';
    @endphp
    <article {!! post_class('post-item ' . $row['post_columns'] . ' mb') !!}>
      @if (get_the_post_thumbnail())
        <header>
          <a href="{!! $permalink !!}">
            {!! get_the_post_thumbnail($post->ID, 'one_' . $thumbsize . '_crop') !!}
          </a>
          <h3><a href="{!! $permalink !!}">{!! get_the_title() !!}</a></h3>
          @if (in_array('show_date', $row['post_options']) || in_array('show_author', $row['post_options']))
            <div class="post-meta">
              @if (in_array('show_date', $row['post_options']))
                <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
              @endif
              @if (in_array('show_author', $row['post_options']))
                <span class="byline author vcard">
                  {{ __('By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">{{ get_the_author() }}</a>
                </span>
              @endif
            </div>
          @endif
        </header>
      @endif
      <p>{!! $excerpt_crop !!}</p>
      @if (in_array('show_cats', $row['post_options']) && $row['post_type'] === 'post')
        <div class="categories">{!! __('Posted in: ', 'sage') !!}@php the_category(', ') @endphp</div>
      @endif
    </article>
  @endwhile
  @php wp_reset_postdata() @endphp
  @if (in_array('show_more', $row['post_options']))
    <div class="col-12 mb">
      @include('flexbuilder.components.button', $data = $row['button'])
    </div>
  @endif
</div>
