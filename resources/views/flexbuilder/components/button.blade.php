@if ($data['button_link'])
  @php
    $btn_text   = $data['button_link']['title'];
    $btn_url    = $data['button_link']['url'];
    $btn_color  = ' ' . $data['button_color'];
    $btn_size   = ' ' . $data['button_size'];
    $btn_align  = ' ' . $data['button_align'];
    $btn_target = ($data['button_link']['target'] ? $data['button_link']['target'] : '_self');
  @endphp
  <a href="{!! $btn_url !!}" target="{!! $btn_target !!}" class="btn {!! $btn_color . $btn_size . $btn_align !!}" role="button">{!!$btn_text!!}</a>
@endif
