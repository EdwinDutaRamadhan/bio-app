<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Edwin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{ ($title === 'Home')? 'active' : '' }}" aria-current="page" href="/">Home</a>
        <a class="nav-link {{ ($title === 'My Work')? 'active' : '' }}" href="/mywork">My Work</a>
        <a class="nav-link {{ ($title === 'About')? 'active' : '' }}" href="/about">About</a>
        <a class="nav-link {{ ($title === 'Contact Us')? 'active' : '' }}" href="/contact">Contact Us</a>
      </div>
    </div>
  </div>
</nav>