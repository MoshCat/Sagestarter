@php
  $alternate = (!empty($row['options']) && in_array('alternate', $row['options'])) ? 'alternate' : '';
  if (!empty($row['options']) && in_array('lg-img', $row['options'])) {
    $img_column     = 'col-md-5';
    $txt_column     = 'col-md-7';
    $img_size       = 'one_half' . $img_shape_str;
  } else {
    $img_column     = 'col-md-4';
    $txt_column     = 'col-md-8';
    $img_size       = 'one_third' . $img_shape_str;
  }
@endphp
<div class="item_list-rows v-center {!! $alternate !!}">
  @foreach ($row['list'] as $list_item)
    <div class="row mb">
      @php $image = ($list_item['image']) ? wp_get_attachment_image($list_item['image'], $img_size, '', array('class' => $row['image_shape'] . ' mx-auto')) : ''; @endphp
      <div class="item_list-image {!! $img_column !!}">
        @if ($list_item['content']['button_link'])<a href="{!! $list_item['content']['button_link']['url'] !!}" target="{!! ($list_item['content']['button_link']['target'] ? $list_item['content']['button_link']['target'] : '_self') !!}">@endif
          {!! $image !!}
        @if ($list_item['content']['button_link'])</a>@endif
      </div>
      <div class="item_list-body {!! $txt_column !!}">
        <div class="inner">
          {!! $list_item['content']['editor'] !!}
          @include('flexbuilder.components.button', [
            $data = $list_item['content'],
            $data['button_color'] = $row['buttons']['button_color'],
            $data['button_size'] = $row['buttons']['button_size'],
            $data['button_align'] = $row['buttons']['button_align']
          ])
        </div>
      </div>
    </div>
  @endforeach
</div>
