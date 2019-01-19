 <!-- navigation navbar -->
 <div class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <!-- <div class="container"> -->
        <a href="./" class="navbar-brand">
            <img src="images/logo.png" alt="logo-brand">
        </a>

        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button> -->

        <a class="navbar-toggler" role="button" data-toggle="collapse" data-target="" href="#navbarResponsive" aria-controls="navbarResponsive"
            aria-expanded="false" aria-label="Toggle navigation">
            <img src="images/menu-toggle.png" alt="toggle">

        </a>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item <?php if($p == 'home'){echo 'active';}?>">
                    <a href="./" class="nav-link">Home</a>
                </li>
                <li class="nav-item <?php if($p == 'directors'){echo 'active';}?>">
                    <a href="./?p=directors" class="nav-link">Our Directors</a>
                </li>
                <li class="nav-item <?php if($p == 'consultation'){echo 'active';}?>">
                    <a href="./?p=consultation" class="nav-link">consultation</a>
                </li>
                <li class="nav-item <?php if($p == 'learning'){echo 'active';}?>">
                    <a href="./?p=learning" class="nav-link">Learning connect</a>
                </li>
                <li class="nav-item <?php if($p == 'resourcing'){echo 'active';}?>">
                    <a href="./?p=resourcing" class="nav-link">resourcing</a>
                </li>
                <li class="nav-item <?php if($p == 'opportunities'){echo 'active';}?>">
                    <a href="./?p=opportunities" class="nav-link">job opportunities</a>
                </li>
                <li class="nav-item <?php if($p == 'ondemand'){echo 'active';}?>">
                    <a href="./?p=ondemand" class="nav-link">on-demand</a>
                </li>
                <li class="nav-item <?php if($p == 'facilitation'){echo 'active';}?>">
                    <a href="./?p=facilitation" class="nav-link">facilitation</a>
                </li>
                <li class="nav-item <?php if($p == 'contact'){echo 'active';}?>">
                    <a href="./?p=contact" class="nav-link contact">contact</a>
                </li>
            </ul>
        </div>
        <!-- </div> -->
    </div>
    <!-- end navbar navigation -->