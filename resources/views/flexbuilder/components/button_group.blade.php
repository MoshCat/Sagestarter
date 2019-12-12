@if ($data['button_group'])
  <div class="btn-group {!! $data['button_group_align'] !!}">
    @php $size = $data['button_group_size'] @endphp
    @foreach ($data['button_group'] as $data)
      @include('flexbuilder.components.button', [
        $data['button_size'] = $size,
        $data['button_align'] = ''
      ])
    @endforeach
  </div>
@endif
