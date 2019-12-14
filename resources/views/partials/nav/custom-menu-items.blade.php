@foreach($items as $item)
  <li class="nav-item">
      <a class="nav-link" href="{!! $item->url() !!}">
        <span class="nav-link-icon">{!! $item->icon !!}</span>
        <span class="nav-link-text">{!! $item->title !!}</span>
    </a>


      @if($item->hasChildren())
        <ul class="dropdown-menu">
              @include('custom-menu-items', ['items' => $item->children()])
        </ul>
      @endif
  </li>
@endforeach