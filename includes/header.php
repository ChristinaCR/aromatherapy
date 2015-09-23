<?php $page = basename($_SERVER['SCRIPT_NAME']); ?> 

<header>
  <div id="header-inside">

    <div id="logo">
      <h1>AROMA THERAPY OILS</h1>
    </div><!--end logo-->

    <div id="social">
        <ul>
          <li><a href="index.php"><img src="images/red-home-icon.png" alt="Home"></a></li>
          <li><a href=""><img src="images/facebook-circle.png" alt="Contact"></a></li>
          <li><a href="http://crome.dreamhosters.com/aromatherapy/contact.php" rel="clearbox[width=800,,height=800]"><img src="images/contact.png" alt="Contact"></a></li>
        </ul>
    </div><!--end social-->

  </div><!--end header-inside-->

  <nav>
    <ul>     
      <li class="rest<?php if ($page == 'lavender.php') { print '-on'; } ?>"><a href="lavender.php">LAVENDER</a></li>
      <li class="rest<?php if ($page == 'rosemary.php') { print '-on'; } ?>"><a href="rosemary.php">ROSEMARY</a></li>
      <li class="rest<?php if ($page == 'geranium.php') { print '-on'; } ?>"><a href="geranium.php">GERANIUM</a></li>
      <li class="rest<?php if ($page == 'juniper.php') { print '-on'; } ?>"><a href="juniper.php">JUNIPER</a></li>
    </ul>

  </nav>

<!--start mobile navigation-->

  <button class="nav-button">Toggle Navigation</button>

    <ul class="primary-nav">
      <li><a href="lavender.php">Lavender</a></li>
      <li><a href="rosemary.php">Rosemary</a></li>
      <li><a href="geranium.php">Geranium</a></li>
      <li><a href="juniper.php">Juniper</a></li>
    </ul>

<!--end mobile navigation-->

</header>




