@if ($data['link'] && $data['image'])
  <a href="{!! wp_get_attachment_image_url($data["image"], 'full')  !!}">
@endif
@if ($data['image'])
  {!! wp_get_attachment_image($data["image"], $data['size'], '') !!}
@endif
@if ($data['link'] && $data['image'])
  </a>
@endif
