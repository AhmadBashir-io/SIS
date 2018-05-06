<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
        <a href="./" class="navbar-brand" href="./">{{config('app.name' , 'SIS')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="./">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./students">Manage Student</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li class="nav-item">
                  <a class="nav-link" href="./create">Create Student</a>
              </li>
          </ul>
        </div>
</nav>