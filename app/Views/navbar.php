<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php $isActivePage = fn($x) => uri_string() === $x ? 'active' : ''; ?>
        <li class="nav-item">
          <a class="nav-link <?= $isActivePage('/'); ?>" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $isActivePage('about'); ?>" href="/about">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $isActivePage('contact'); ?>" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $isActivePage('faqs'); ?>" href="/faqs">FAQs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $isActivePage('forms'); ?>" href="/forms">Forms</a>
        </li>
      </ul>
    </div>
  </div>
</nav>