<?php 
    use himanshupurohit\orion\Application;  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./app.css">
    <title><?php echo $this->title; ?></title>
  </head>
  <body class="bg-gray-50">
  <header class="bg-white shadow-sm">
        <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
            <div class="flex items-center flex-col lg:flex-row">
                <h1 class="text-3xl text-blue-500">Orion</h1>
                <ul class="flex lg:ml-16 ml-0 space-x-8 mt-6 lg:mt-0">
                    <li><a href="{{ route('movies.index') }}" class="hover:text-blue-500">Movies</a></li>
                    <li><a href="#" class="hover:text-blue-500">TV Shows</a></li>
                    <li><a href="#" class="hover:text-blue-500">Actors</a></li>
                </ul>
            </div>
            <div class="flex items-center mt-6 lg:mt-0">
              <?php if(Application::isGuest()): ?>
              <ul class="flex lg:ml-16 ml-0 space-x-8 mt-6 lg:mt-0">
                <li>
                  <a class="hover:text-blue-500" aria-current="page" href="/login">Login</a>
                </li>
                <li>
                  <a class=" items-center justify-center px-4 py-2 border border-transparent rounded-md text-base font-medium text-white bg-blue-500 hover:bg-blue-600 ease-in-out duration-150" href="/register">Register</a>
                </li>
              </ul>
              <?php else: ?>
                <!-- <ul class="flex lg:ml-16 ml-0 space-x-8 mt-6 lg:mt-0">
                  <li>
                    <a class="hover:text-blue-500" aria-current="page" href="/profile">Profile</a>
                  </li>
                  <li>
                    <a class="hover:text-blue-500" aria-current="page" href="/logout">Welcome <?php echo Application::$app->user->first_name; ?> (Logout)</a>
                  </li>
                </ul> -->
                <!-- Profile dropdown -->
            <div class="ml-3 relative">
              <div>
                <button class="max-w-xs rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-haspopup="true">
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  <p class="hover:text-blue-500 ml-2"><?php echo Application::$app->user->first_name; ?> <?php echo Application::$app->user->last_name; ?></p>
                  <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>
              <!--
                Profile dropdown panel, show/hide based on dropdown state.

                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
              <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>

                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>

                <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
              </div>
            </div>
              <?php endif; ?>
            </div>
        </nav>
    </header>
    <main class="py-8">
        {{content}}
    </main>
    <footer class="text-center">
        <div class="container mx-auto px-4 py-6">
        <span class="text-muted">Copyright © <?php echo date('Y'); ?> Orion.com </span>
        </div>
    </footer>

<!-- 
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm p-3 mb-5 bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Orion</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
      </ul>
      <?php if(Application::isGuest()): ?>
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Register</a>
        </li>
      </ul>
      <?php else: ?>
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/logout">Welcome <?php echo Application::$app->user->first_name; ?> (Logout)</a>
        </li>
      </ul>
      <?php endif; ?>
    </div>
  </div>
</nav>
 -->
<!--     
    <footer class="footer">
      <div class="container">
        <span class="text-muted">Copyright © <?php echo date('Y'); ?> Orion.com. </span>
      </div>
    </footer> -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
