<?php

if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'home';
}

ob_start();

if($p === 'home'){
    
    require 'pmcconnect/home.php';
}
elseif($p === 'consultation'){
     require 'pmcconnect/consulting.php';
}
elseif($p === 'directors'){
    require 'pmcconnect/directors.php';
}
elseif($p === 'learning'){
     require 'pmcconnect/learning.php';
}
elseif($p === 'resourcing'){
     require 'pmcconnect/resourcing.php';
}
elseif($p === 'opportunities'){
     require 'pmcconnect/opportunity.php';
}
elseif($p === 'ondemand'){
     require 'pmcconnect/demand.php';
}
elseif($p === 'facilitation'){
     require 'pmcconnect/faciliting.php';
}
elseif($p === 'contact'){
     require 'pmcconnect/contact.php';
}

$content = ob_get_clean();
require 'pmcconnect/MainPage.php';
?>