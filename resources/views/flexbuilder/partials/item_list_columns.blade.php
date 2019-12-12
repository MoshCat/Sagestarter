@php
  switch($row['column_amount']) {
    case '2':
      $column_classes = 'col-sm-6';
      $img_size       = 'one_half' . $img_shape_str;
      break;
    case '3':
      $column_classes = 'col-sm-6 col-lg-4';
      $img_size       = 'one_third' . $img_shape_str;
      break;
    case '4':
      $column_classes = 'col-sm-6 col-lg-3';
      $img_size       = 'one_fourth' . $img_shape_str;
      break;
  }
@endphp
<div class="row item_list-columns justify-content-center">
  @foreach ($row['list'] as $list_item)
    @php $image = ($list_item['image']) ? wp_get_attachment_image($list_item['image'], $img_size, '', array('class' => $img_shape_class . ' mx-auto d-table mb-3')) : ''; @endphp
    <div class="{!! $column_classes !!} mb">
      <div class="item_list-item">
        @if ($image)
          <div class="item_list-image">
            @if ($list_item['content']['button_link'])<a href="{!! $list_item['content']['button_link']['url'] !!}" target="{!! ($list_item['content']['button_link']['target'] ? $list_item['content']['button_link']['target'] : '_self') !!}">@endif
              {!! $image !!}
            @if ($list_item['content']['button_link'])</a>@endif
          </div>
        @endif
        @if ($list_item)
          <div class="item_list-body">
            {!! $list_item['content']['editor'] !!}
          </div>
        @endif
        @if ($list_item['content']['button_link'])
          <div class="item_list-footer">
            @include('flexbuilder.components.button', [
              $data = $list_item['content'],
              $data['button_color'] = $row['buttons']['button_color'],
              $data['button_size'] = $row['buttons']['button_size'],
              $data['button_align'] = $row['buttons']['button_align']
            ])
          </div>
        @endif
      </div>
    </div>
  @endforeach
</div>
