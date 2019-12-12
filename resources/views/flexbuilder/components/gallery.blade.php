@if ($data['gallery'] )
  @php $shortcode = '[gallery columns="' . $data['gallery_columns'] . '" size="' . $data['gallery_size'] . '" link="' . $data['gallery_link'] . '" ids="' . implode(',', $data['gallery']) . '"]'; @endphp
  {!! do_shortcode($shortcode) !!}
@endif
