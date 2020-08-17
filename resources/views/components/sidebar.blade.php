<div id="sidebar" class="off sidebar-container{{ $is_allocation ? ' sidebar-sub-menu-allocation' : '' }}" role="navigation">
    <div class="sidebar-overlay">
        <div class="sidebar-menu">
            <div class="sidebar-header">

                <div class="sidebar-header-account media">
                    <div class="account-logo"></div>
                    <div class="media-body account-box ml-3">
                        <h1 class="account-name fs-24 fw-600 text-capitalize mb-0">ชง</h1>
                        <div class="account-subname fs-13"><span>บทบาท :</span> <span class="ml-1">เจ้าของ</span></div>
                    </div>
                </div>

                <div class="sidebar-header-progressbar">
                    <div class="fs-13">ตั้งค่าเว็บไซต์ของคุณ</div>
                    <div class="progress my-1">
                        <div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                            class="progress-bar w-75"></div>
                    </div>
                    <div class="fs-11">5/13 เสร็จแล้ว</div>
                </div>
            </div>
            <div class="sidebar-body wk-scrollbar">
                <ul class="sidebar-nav">
                    @foreach ($navs as $nav)
                        
                        <li class="nav-item{{isset($nav->isExactActive)? ' active':''}}">
                            <a href="{{ $nav->path }}" class="nav-link" data-toggle="nav"
                                aria-controls="{{ $nav->id }}">

                                <div class="nav-link-text">
                                    @if (!empty($nav->icon))
                                        <div class="icon">{!! $nav->icon !!}</div>
                                    @endif
                                    <div class="text">{{ $nav->name }}</div>

                                </div>

                                @if (!empty($nav->items))
                                <svg class="arrow" viewBox="0 0 24 24" fill="currentColor" width="24" height="24"><path d="M9.14644661,8.14512634 C9.34170876,7.9498642 9.65829124,7.9498642 9.85355339,8.14512634 L14.206596,12.5 L9.85355339,16.8536987 C9.65829124,17.0489609 9.34170876,17.0489609 9.14644661,16.8536987 C8.95118446,16.6584366 8.95118446,16.3418541 9.14644661,16.1465919 L12.7923824,12.5 L9.14644661,8.85223312 C8.95118446,8.65697098 8.95118446,8.34038849 9.14644661,8.14512634 Z"></path></svg>
                                @endif
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        
        @foreach ($navs as $nav)

            @if (!empty($nav->items))

                <div class="sidebar-sub-menu{{isset($nav->isExactActive)? '':' d-none'}}" aria-labelledby="{{ $nav->id }}-nav">

                    <div class="sidebar-sub-menu-header">
                        <h2 class="mb-0 fs-22 fw-500">{{ $nav->name }}</h2>
                    </div>

                    <div class="sidebar-sub-menu-body">
                        <ul class="sidebar-sub-menu-nav">

                            @foreach ($nav->items as $item)

                                @if (isset($item->group))

                                    <li class="nav-item-group">

                                        @if (!empty($item->group->title))
                                            <span class="nav-item nav-label">{{ $item->group->title }}</span>
                                        @endif

                                        <ul class="sidebar-sub-menu-nav">
                                            @foreach ($item->group->items as $sub)
                                                <li class="nav-item{{isset($sub->isActive)? ' active':''}}"><a href="{{ $sub->path }}" class="nav-link">
                                                        <div class="nav-link-text">{{ $sub->name }}</div>
                                                    </a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @elseif(isset($item->hr))
                                    <li class="nav-item-hr">
                                        <hr />
                                    </li>
                                @else
                                    <li class="nav-item{{isset($item->isActive)? ' active':''}}">
                                        <a href="{{ $item->path }}" class="nav-link">
                                            <div class="nav-link-text">{{ $item->name }}</div>
                                        </a>
                                    </li>
                                @endif

                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
