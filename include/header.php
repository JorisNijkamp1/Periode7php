<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header"><a href="index.php" class="navbar-brand navbar-link">Stuk in m'n kraag</a>
            <button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav navbar-left">
                <li role="presentation"><a href="wijn.php">Wijn</a></li>
                <li role="presentation"><a href="#">Bier</a></li>
                <li role="presentation"><a href="#">Gedestilleerd</a></li>
            </ul>
            <button class="btn btn-secondary navbar-btn navbar-right" type="button">
            <?php if(isset($_SESSION['usr_id'])) {
                echo '<a href = "../Periode7php/klantgegevens.php"><strong>Mijn gegevens</strong></a ></button >';
            }else{
                echo '<a href="../Periode7php/register.php"><strong>Registreren</strong></a></button >';
            }
            ?>


                <ol class="nav navbar-nav navbar-right">
                <li role="presentation">
                    <a href="view_cart.php" class="link navbar-btn navbar-right"><span class="glyphicon glyphicon-shopping-cart" style="font-size: 24px; margin-right: 50px;"></span></a>

                    <?php if(isset($_SESSION['usr_id'])) {
                    echo '<a class="link" href="../Periode7php/logout.php" style="text-decoration:none;"><strong>Logout</strong></a>';
                }else {
                    echo '<a class="link" href="../Periode7php/login.php" style="text-decoration:none"><strong>Login</strong></a>';
                }
                ?>
            </ol>
        </div>
    </div>
</nav>
