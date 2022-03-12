<nav class="sidebar close">
  <header>
    <div class="image-text">
      <span class="image">
        <!--<img src="logo.png" alt="">-->
      </span>

      <div class="text logo-text">
        <span class="name">MBO Utrecht</span>
        <span class="profession">Magazine</span>
      </div>
    </div>

    <i class='bx bx-chevron-right toggle'></i>
  </header>

  <div class="menu-bar">
    <div class="menu">

      <li class="search-box">
        <i class='bx bx-search icon'></i>
        <input type="text" placeholder="Search...">
      </li>

      <ul class="menu-links">
        <li class="nav-link">
          <a href="#">
            <i class='bx bx-home-alt icon'></i>
            <span class="text nav-text">Dashboard</span>
          </a>
        </li>

        <li class="nav-link">
          <a href="#">
            <i class='bx bx-bar-chart-alt-2 icon'></i>
            <span class="text nav-text">Revenue</span>
          </a>
        </li>

        <li class="nav-link">
          <a href="#">
            <i class='bx bx-bell icon'></i>
            <span class="text nav-text">Notifications</span>
          </a>
        </li>

        <li class="nav-link">
          <a href="#">
            <i class='bx bx-pie-chart-alt icon'></i>
            <span class="text nav-text">Analytics</span>
          </a>
        </li>

        <li class="nav-link">
          <a href="#">
            <i class='bx bx-heart icon'></i>
            <span class="text nav-text">Likes</span>
          </a>
        </li>

        <li class="nav-link">
          <a href="#">
            <i class='bx bx-wallet icon'></i>
            <span class="text nav-text">Wallets</span>
          </a>
        </li>

      </ul>
    </div>

    <div class="bottom-content">
      <li class="">
        <a href="#">
          <i class='bx bx-log-out icon'></i>
          <span class="text nav-text">Logout</span>
        </a>
      </li>

      <li class="mode">
        <div class="sun-moon">
          <i class='bx bx-moon icon moon'></i>
          <i class='bx bx-sun icon sun'></i>
        </div>
        <span class="mode-text text">Dark mode</span>

        <div class="toggle-switch">
          <span class="switch"></span>
        </div>
      </li>

    </div>
  </div>

</nav>

<section class="home">
  <div class="text">Dashboard Sidebar</div>
</section>

<script>
  const body = document.querySelector('body'),
    sidebar = body.querySelector('nav'),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");


  toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
  })

  searchBtn.addEventListener("click", () => {
    sidebar.classList.remove("close");
  })

  modeSwitch.addEventListener("click", () => {
    body.classList.toggle("dark");

    if (body.classList.contains("dark")) {
      modeText.innerText = "Light mode";
    } else {
      modeText.innerText = "Dark mode";

    }
  });
</script>

<!-- Sidebar created for Superusers -->
<!-- <div class="side-menu">
  <ul>
    <li></li>
    <li><a href="<?= URLROOT ?>/superusers/order">Order Articles</a></li>
    <li><a href="<?= URLROOT ?>/superusers/approve">Approve Orders</a></li>
    <li><a href="<?= URLROOT ?>/superusers/request">Request Articles</a></li>
    <li><a href="<?= URLROOT ?>/superusers/assortment">View Assortment</a></li>
    <li><a href="<?= URLROOT ?>/superusers/profile">Profile</a></li>
    <span class="copyright">Copyright &copy; 2022</span>
  </ul>
</div> -->