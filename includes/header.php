<header class="navbar navbar-inverse navbar-static-top">
    <nav class='container' role='navigation'>
        <div class='navbar-header'>
            <a href="index.php" class='navbar-brand'>CampTrek</a>

            <button type='button' class="navbar-toggle collapsed" data-toggle='collapse' data-target='.navbar-collapse'>
                <span class='sr-only'>Toggle navigation</span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
            </button>
        </div>
        <ul class="nav navbar-nav navbar-right navbar-collapse collapse">
            <li><a href="findcampsites.php">Find Campsites</a>
            </li>
            <li><a href="reviews.php">Reviews</a>
            </li>
            <?php if(isset($_SESSION[ 'userinfo'])){ echo "<li><a href='logout.php'>Logout</a></li>"; } else{ echo "<li><a href='#' data-toggle='modal' data-target='#myModal'>Login | Sign Up</a></li>"; } ?>
            <?php if(isset($_SESSION[ 'userinfo'])){ echo "<li><a href='createpost.php'>Post Review</a></li>"; } ?>
            <?php if(isset($_SESSION[ 'userinfo'])){ echo "<li><a href='profilepage.php'>Account</a></li>"; } ?>
        </ul>
    </nav>
</header>