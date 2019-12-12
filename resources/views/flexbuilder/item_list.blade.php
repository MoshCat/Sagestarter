@if ($row['list'])
  @php
    $img_shape_str   = ('round' === $row['image_shape']) ? '_square' : '_' . $row['image_shape'];
    $img_shape_class = ('round' === $row['image_shape'] || 'square' === $row['image_shape']) ? $row['image_shape'] : '';
  @endphp
  @if ($row['intro'])
    {!! $row['intro'] !!}
  @endif
  @if ($row['layout'] === 'columns')
    @include('flexbuilder.partials.item_list_columns')
  @elseif (($row['layout'] === 'rows'))
    @include('flexbuilder.partials.item_list_rows')
  @elseif (($row['layout'] === 'wide_rows'))
    @include('flexbuilder.partials.item_list_wide_rows')
  @endif
@endif
