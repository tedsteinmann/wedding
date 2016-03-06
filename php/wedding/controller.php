<?php
class Controller{

    public function invoke()
    {
     print '<!DOCTYPE html><html lang="en"><head>';

     include 'views/partials/meta.html';
     //TODO: Parse page name and add meta here

     print '</head><body>';

     include 'views/partials/header.html'; //nav bar

     //include 'views/partials/carousel.html';

     if (isset($_GET['page'])){
     $page = 'views/'.$_GET['page'].'.html';
     //echo $page;
     include $page;
     }
     else{
        include 'views/home.html';
     }

     include 'views/partials/footer.html';

     print '</body></html>';

    }
}
?>