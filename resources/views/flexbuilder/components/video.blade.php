@if ($data['embed'] || $data['mp4'])
  @if ('embed' === $data['video_type'])
    <div class="embed-responsive embed-responsive-{!! $data['aspect'] !!}">
      {!! $data['embed'] !!}
    </div>
  @elseif ('mp4' === $data['video_type'])
    <video {!! implode(' ', $data['mp4_options']) !!}>
      <source src="{!! $data['mp4'] !!}" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  @endif
@endif
