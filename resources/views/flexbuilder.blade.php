{{--
  Template Name: Flexbuilder
--}}

@extends('layouts.app')

@section('content')
  @php $rows = get_field('flexbuilder'); @endphp
  {{-- @php var_dump($flexbuilder); @endphp --}}
  @foreach ($rows as $i1 => $row)
    @if ($row)
      @php
        $bg_style  = '';
        $classes = [];

        // If there is a background add it to $classes
        if (!empty($row['row_bg'])) {
          array_push($classes, $row['row_bg']);
        }

        // If there are row options add them to $classes
        if (!empty($row['row_options'])) {
          $classes = array_merge($classes, $row['row_options']);
        }

        // If there is a background image create a background style
        if ($row['row_bg'] === 'bg-img' && $row['background_image']) {
          $bg_style = ' style="background-image: url(' . wp_get_attachment_image_url($row['background_image'], 'large_letterbox') . ')"';

          // If the background image is repeated add a class
          if ($row['background_repeat']) {
            array_push($classes, 'bg-repeat');
          }
        }
      @endphp

      {{-- If there is a background add a wrapper --}}
      @if (!empty($row['row_bg'] && 'container-fluid' !== $row['container_width']))
        <section class="{!! $row['acf_fc_layout'] !!} {!! implode(' ', $classes) !!}"{!! $bg_style !!}>
          <div class="{!! $row['container_width'] !!}">
      @else
        <section class="{!! $row['acf_fc_layout'] !!} {!! implode(' ', $classes) !!} {!! $row['container_width'] !!}">
      @endif

      {{-- Switch layouts --}}
      @switch ($row['acf_fc_layout'])
        @case('columns')
          @include('flexbuilder.columns')
          @break
        @case('posts')
          @include('flexbuilder.posts')
          @break
        @case('item_list')
          @include('flexbuilder.item_list')
          @break
      @endswitch

      @if (!empty($row['row_bg'] && 'container-fluid' !== $row['container_width']))
          </div>
        </section>
      @else
        </section>
      @endif
    @endif
  @endforeach
@endsection
