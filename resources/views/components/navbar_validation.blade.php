<div class="container-fluid ">
        <nav class="navbar navbar-expand-lg navbar-dark navbar-inverse fixed-top navbar-nav-scroll">
            <div class="container">
                <button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="animated-icon1"><span></span><span></span><span></span></div>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <a class="navbar-brand" href="/"><img src={{ url ('img/logo.png') }}  alt=""></a>
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item ">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ (request()->is('kasir')) ? 'active' : '' }}" >
                  <a class="nav-link" href="/kasir">Kasir</a>
                </li>
                <li class="nav-item {{ (request()->is('validation')) ? 'active' : '' }}" >
                  <a href="/validation" class="nav-link">Validation</a>
                </li>
              </ul>
              <ul class="navbar-nav navbar-right icons-navbar">
                <li class="nav-item mr-3">
                  <i class="fas fa-bell" style="color: white;"></i>
                </li>
                <li class="nav-item">
                <i class="fas fa-rss" style="color: white;"></i>
                </li>
              </ul>
            </div>
            </div>
          </nav>
    </div>