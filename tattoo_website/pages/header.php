    <head>
    	<title>Brevik Tattoos</title>	
    	<link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div>
            <img id=main_image src="https://scontent-lhr3-1.cdninstagram.com/v/t51.2885-15/e35/66627244_150596516037625_5338658261476050951_n.jpg?_nc_ht=scontent-lhr3-1.cdninstagram.com&_nc_cat=101&se=7&oh=322e4951e726ec7b47163a9b971cdeb2&oe=5DF268AD&ig_cache_key=MjEwNzg1OTE5OTYxNTQ0MjA2NA%3D%3D.2" alt="Tattoo Photo">
            <link rel="stylesheet" type="text/css" href="style.css">
        </div>
        <div id="head_menu_div">
            <ul>
                <li><a class = "header_list" href="/pages/index.php">HOME</a></li>
                <li><a class = "head_list" href="/pages/gallery.php">GALLERY</a></li>
                <li><a class = "head_list" href="/pages/something.php">SOMETHING</a></li>
                <li><a class = "head_list" href="/pages/favorites.php">Monthly-Favorite-Artist</a></li>
            <?php
                session_start();
                if (!isset($_SESSION['log_in'])) {
                    echo "<li><a class='button' href='/pages/signup.php'>LOGIN/SIGN UP</a></li>";
                }
            ?>
            </ul>
        </div>
    </body>