@if ($data['heading_text'])
  @php $nr = $data['heading_size'] @endphp
  {!! '<h' . $nr . '>' . $data['heading_text'] . '</h' . $nr . '>' !!}
@endif
