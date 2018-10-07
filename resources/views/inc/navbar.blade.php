<!-- <nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button"class="navbar-toggle collapsed" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon bar"></span>
                <span class="icon bar"></span>
                <span class="icon bar"></span>
            </button>
            <a class="navbar-brand" href="/">{{config('app.name', 'FORUM')}}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/page">Page</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/posts">Posts</a></li>
            </ul>
        </div>
    </div>
</nav> -->

 <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="/">{{config('app.name', 'Forum')}}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/page">Page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/posts">Posts</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> -->
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div>
    </nav>

