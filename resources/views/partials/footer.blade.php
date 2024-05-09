@php
    $info = config('footer.menuInfo');
    $social = config('footer.menuIcon');

@endphp

<footer>
	<div class="bottom-bar">
		<div class="box">
			<div class="info">
				<h4>Boolando s.r.l.</h4>
				<!-- nav -->
				<nav class="menu">
					<ul>
                      @foreach ($info as $item)
                      <li>
                        <a href="{{ $item['link'] }}">{{ $item['title'] }}</a>
                    </li>
                      @endforeach

					</ul>
				</nav>
				<!-- /nav -->
			</div>

			<div class="social">
				<span>Trovaci anche su</span>
				<!-- nav -->
				<nav class="menu">
					<ul>
                      @foreach ($social as $item)
                          <li>
                            <a href="{{ $item['link'] }}">
                              <i class="{{ $item['title']}}"></i>
                            </a>
                          </li>
                      @endforeach
					</ul>
				</nav>
				<!-- /nav -->
			</div>
		</div>
	</div>
</footer>
