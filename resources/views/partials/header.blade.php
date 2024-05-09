
<header>
  <div class="topbar">
    <div class="box">
      <!-- nav -->
      <nav class="menu">
        <ul>
          <li>menu section</li>
          {{-- <li v-for="(item, index) in menuSection" :key="index">
            <a :href="item.link">{{ item.title }}</a>
          </li> --}}
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
          <li>social</li>
          {{-- <li v-for="(item, index) in menuIcon" :key="index">
            <a :href="item.link" v-html="item.icon"></a>
          </li> --}}
        </ul>
      </nav>
      <!-- /icon -->
    </div>
  </div>
</header>
