@if ($columns[$col]['content'])
  @foreach ($columns[$col]['content'] as $i3 => $data)
    @switch ($data['acf_fc_layout'])
      @case ('googlemap')
        @include('flexbuilder.components.googlemap')
        @break
      @case ('editor')
        @include('flexbuilder.components.editor')
        @break
      @case ('heading')
        @include('flexbuilder.components.heading')
        @break
      @case ('button')
        @include('flexbuilder.components.button')
        @break
      @case ('button_group')
        @include('flexbuilder.components.button_group')
        @break
      @case ('gallery')
        @include('flexbuilder.components.gallery')
        @break
      @case ('alertbox')
        @include('flexbuilder.components.alertbox')
        @break
      @case ('table')
        @include('flexbuilder.components.table')
        @break
      @case ('accordion')
        @include('flexbuilder.components.accordion')
        @break
      @case ('video')
        @include('flexbuilder.components.video')
        @break
      @case ('tabs')
        @include('flexbuilder.components.tabs')
        @break
      @case ('image')
        @include('flexbuilder.components.image')
        @break
    @endswitch
  @endforeach
@endif
