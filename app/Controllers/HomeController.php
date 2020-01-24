<?php

namespace Application\Controllers;

class HomeController
{
    public function index()
    {
//        echo('<h1>Hola mundo!</h1>');
        echo('
<link rel="stylesheet" href="./components/bootstrap/dist/css/bootstrap.css">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="/">PHP Framework</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" ariaexpanded="
false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
<li class="nav-item active">
<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href=/contacto>Contacto</a>
</li>
</ul>
</div>
</nav>
');
        echo('<h1>Bienvenid@</h1>');
    }
}