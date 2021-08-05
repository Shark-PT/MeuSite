<?php
if(isset($_GET['p'])){
    if($_GET['p'] == 'inicio')
        include('content/pages/inicio.php');
    else if($_GET['p'] == 'formacao-academica')
        include('content/pages/formacao-academica.php');
    else if($_GET['p'] == 'formador')
        include('content/pages/percursoProfissional/formador.php');
    else if($_GET['p'] == 'programador')
        include('content/pages/percursoProfissional/programador.php');
    else if($_GET['p'] == 'outros-projetos')
        include('content/pages/percursoProfissional/outros-projetos.php');
    else if($_GET['p'] == 'fotografia')
        include('content/pages/hobbies/fotografia.php');
    else if($_GET['p'] == 'impressao-3d')
        include('content/pages/hobbies/impressao-3d.php');
    else if($_GET['p'] == 'youtube-training')
        include('content/pages/hobbies/youtube-training.php');
    else if($_GET['p'] == 'blog')
        include('content/pages/blog.php');
    else if($_GET['p'] == 'contacto')
        include('content/pages/contacto.php');
    else
        include('content/pages/404.php');
}else
    include('content/pages/inicio.php');
?>