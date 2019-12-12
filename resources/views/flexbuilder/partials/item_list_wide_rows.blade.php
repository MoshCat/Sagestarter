<div class="item_list-wide_rows alternate">
  @foreach ($row['list'] as $list_item)
    @php $image = ($list_item['image']) ? wp_get_attachment_image_url($list_item['image'], 'one_half') : ''; @endphp
    <div class="row">
      <div class="item_list-image col-md-6" style="background-image:url({!! $image !!});"></div>
      <div class="item_list-body col-md-6">
        <div class="inner cp-lg">
          {!! $list_item['content']['editor'] !!}
          @include('flexbuilder.components.button', [$data = $list_item['content'],$data['button_color'] = $row['buttons']['button_color'],$data['button_size'] = $row['buttons']['button_size'],$data['button_align'] = $row['buttons']['button_align']
          ])
        </div>{{-- .inner --}}
      </div>{{-- .col-md-6 --}}
    </div>{{-- .row --}}
  @endforeach
</div>
