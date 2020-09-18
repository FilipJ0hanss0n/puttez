<!DOCTYPE html>

<html lang="sv">

  <head>
     <meta charset="utf-8">
     <title>Logga in</title>
		 <link rel="stylesheet" href="css/stilmall.css">
	</head>
  <body id="login">
    <div id="wrapper">
     	<header><!--Sidhuvud-->
            <h1>Min onlinebutik - Logga in</h1>
      </header>
	 <?php
	  require "masthead.php";
	  require "menu.php";
	?>
			<main> <!--Huvudinnehåll-->
				<section>
					 <form action="" method="post">
            <p><label for="user">Användarnamn:</label>
            <input type="text" id="user" name="username"></p>
            <p><label for="pwd">Lösenord:</label>
            <input type="password" id="pwd" name="password"></p>
            <p>
            <input type="submit" value="Logga in">
            </p>
          </form>
          <p class="create"><a href="#">Skapa användare</a></p>
				</section>
			</main>

    </div>
    <footer>
			 Webbplats för kursen Webbserverprogrammering 1
		</footer>

	</body>
</html>
