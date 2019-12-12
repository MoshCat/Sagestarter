@if ($data['accordion'])
  <div id="accordion_{!! $i1 . $i2 . $i3 !!}" class="accordion">
    @foreach ($data['accordion'] as $i4 => $accordion_item)
      <div class="accordion_item card">
        <a href="javascript:void(0)" class="card-header" data-toggle="collapse" data-target="#collapse_{!! $i1 . $i2 . $i3 . $i4 !!}" aria-expanded="{!! ($i4 == 0) ? 'true' : 'false' !!}" aria-controls="collapse_{!! $i1 . $i2 . $i3 . $i4 !!}">
          <h5 id="heading_{!! $i1 . $i2 . $i3 . $i4 !!}" class="mb-0">
            {!! $accordion_item['title'] !!}
          </h5>
        </a>
        <div id="collapse_{!! $i1 . $i2 . $i3 . $i4 !!}" class="collapse{!! ($i4 == 0) ? ' show' : '' !!}" aria-labelledby="heading_{!! $i1 . $i2 . $i3 . $i4 !!}" data-parent="#accordion_{!! $i1 . $i2 . $i3 !!}">
          <div class="card-body">
            {!! $accordion_item['content'] !!}
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endif
