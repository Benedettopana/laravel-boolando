@php
    $section = config('header.menu_section');
    $social = config('header.menu_social');
@endphp
<header>
  <div class="topbar">
    <div class="box">
      <!-- nav -->
      <nav class="menu">
        <ul>
          {{-- <li>menu section</li> --}}
          @foreach ($section as $item)
            <li>
              <a :href="{{ $item['link'] }}">{{ $item['title'] }}</a>
            </li>
          @endforeach

        </ul>
      </nav>
      <!-- /nav -->

      <!-- logo -->
      <div class="logo">
        <img src="/img/boolean-logo.png" alt="logo" />
      </div>
      <!-- /logo -->

      <!-- icon -->
      <nav class="menu social">
        <ul>
          @foreach ($social as $item)
            <li>
              <a href="{{ $item['link']}}">
				<i class="{{ $item['icon']}}"></i>
              </a>
            </li>
          @endforeach
          {{-- <li v-for="(item, index) in menuIcon" :key="index">

          </li> --}}
        </ul>
      </nav>
      <!-- /icon -->
    </div>
  </div>
</header>
