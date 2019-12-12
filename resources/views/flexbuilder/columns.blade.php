@if ($row['columns'])
  @foreach ($row['columns'] as $i2 => $columns)
    @switch ($columns['acf_fc_layout'])

      {{-- Heading --}}
      @case('heading')
        @include('flexbuilder.components.heading', [$data['heading_text'] = $columns['heading_text'], $data['heading_size'] = $columns['heading_size']])
        @break

      {{-- Divider --}}
      @case('divider')
        @php $divider = ($columns['display_line']) ? '<hr>' : '<div class="w-100 mb"></div>'; @endphp
        {!! $divider !!}
        @break

      {{-- 1 Column small --}}
      @case('1_column_sm')
        <div class="row">
          <div class="col-lg-9 mx-auto">
            <div class="inner">
              @include('flexbuilder.partials.column_content', ['col' => 'col_1'])
            </div>
          </div>
        </div>
        @break

      {{-- 1 Column --}}
      @case('1_column')
        <div class="row">
          <div class="col-12">
            <div class="inner">
              @include('flexbuilder.partials.column_content', ['col' => 'col_1'])
            </div>
          </div>
        </div>
        @break

      {{-- 2 Columns --}}
      @case ('2_columns')
        <div class="row">
          <div class="col-md-6">
            <div class="inner">
              @include('flexbuilder.partials.column_content', ['col' => 'col_1'])
            </div>
          </div>
          <div class="col-md-6">
            <div class="inner">
              @include('flexbuilder.partials.column_content', ['col' => 'col_2'])
            </div>
          </div>
        </div>
        @break

      {{-- 2 Columns --}}
      @case ('3_columns')
        <div class="row">
          <div class="col-md-4">
            <div class="inner">
              @include('flexbuilder.partials.column_content', ['col' => 'col_1'])
            </div>
          </div>
          <div class="col-md-4">
            <div class="inner">
              @include('flexbuilder.partials.column_content', ['col' => 'col_2'])
            </div>
          </div>
          <div class="col-md-4">
            <div class="inner">
              @include('flexbuilder.partials.column_content', ['col' => 'col_3'])
            </div>
          </div>
        </div>
        @break

      {{-- Left wide --}}
      @case ('left_wide')
        <div class="row">
          <div class="col-md-8">
            <div class="inner">
              @include('flexbuilder.partials.column_content', ['col' => 'col_1'])
            </div>
          </div>
          <div class="col-md-4">
            <div class="inner">
              @include('flexbuilder.partials.column_content', ['col' => 'col_2'])
            </div>
          </div>
        </div>
        @break

      {{-- Right wide --}}
      @case ('right_wide')
        <div class="row">
          <div class="col-md-4">
            <div class="inner">
              @include('flexbuilder.partials.column_content', ['col' => 'col_1'])
            </div>
          </div>
          <div class="col-md-8">
            <div class="inner">
              @include('flexbuilder.partials.column_content', ['col' => 'col_2'])
            </div>
          </div>
        </div>
        @break
    @endswitch
  @endforeach
@endif
