<?php
$routes = [];
route('/', function () {
  require_once __DIR__ . '/views/index.php';
});
route('/posters', function () {
  require_once __DIR__ . '/views/poster.php';
});
route('/estadia', function () {
  require_once __DIR__ . '/views/estadia.php';
});

route('/ponentes', function () {
  require_once __DIR__ . '/views/building.php';
});
route('/posters', function () {
  require_once __DIR__ . '/views/poster.php';
});

route('/404', function () {
  require_once __DIR__ . '/views/404.php';
});
function route(string $path, callable $callback)
{
  global $routes;
  $routes[$path] = $callback;
}
run();
function run()
{
  global $routes;
  $uri = $_SERVER['REQUEST_URI'];
  $found = false;
  foreach ($routes as $path => $callback) {
    if ($path !== $uri) continue;
    $found = true;
    $callback();
  }

  if (!$found) {
    $notFoundCallback = $routes['/404'];
    $notFoundCallback();
  }
}