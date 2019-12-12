@if ($data['tabs'])
  <ul class="nav nav-tabs" role="tablist">
    @foreach ($data['tabs'] as $i4 => $tab_item)
      <li class="nav-item">
        <a class="nav-link{!! ($i4 == 0) ? ' active' : '' !!}" id="tab_{!! $i1 . $i2 . $i3 . $i4 !!}" data-toggle="tab" href="#tabcontent_{!! $i1 . $i2 . $i3 . $i4 !!}" role="tab" aria-controls="tabcontent_{!! $i1 . $i2 . $i3 . $i4 !!}" aria-selected="{!! ($i4 == 0) ? 'true' : 'false' !!}">
          {!! $tab_item['title'] !!}
        </a>
      </li>
    @endforeach
  </ul>
  <div class="tab-content bg-white p-3 border-right border-bottom border-left">
    @foreach ($data['tabs'] as $i4 => $tab_item)
      <div class="tab-pane fade{!! ($i4 == 0) ? ' show active' : '' !!}" id="tabcontent_{!! $i1 . $i2 . $i3 . $i4 !!}" role="tabpanel" aria-labelledby="tab_{!! $i1 . $i2 . $i3 . $i4 !!}">
        {!! $tab_item['content'] !!}
      </div>
    @endforeach
  </div>
@endif
