<?php
session_start();

if (isset($_SESSION['usr_id']) != "") {
    header("Location: ");
}
include_once 'include/database.php';

?>
<head>
    <link rel="stylesheet" href="exportnavbar/assets/css/navbar.css">
    <link rel="stylesheet" href="exportnavbar/assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<?php
include 'include/header.php';

$sql = 'SELECT * from `users` where id = ' . $_SESSION['usr_id'];

$result = $con->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        ?>

        <div class="container bootstrap snippet">
            <div class="panel-body inf-content">
                <div class="row">
                    <div class="col-md-4">
                        <img alt="" style="width:600px;" title=""
                             class="img-circle img-thumbnail isTooltip"
                             src="https://bootdey.com/img/Content/user-453533-fdadfd.png"
                             data-original-title="Usuario">
                        <ul title="Ratings" class="list-inline ratings text-center">
                            <li><a href="#"><span
                                        class="glyphicon glyphicon-star"></span></a>
                            </li>
                            <li><a href="#"><span
                                        class="glyphicon glyphicon-star"></span></a>
                            </li>
                            <li><a href="#"><span
                                        class="glyphicon glyphicon-star"></span></a>
                            </li>
                            <li><a href="#"><span
                                        class="glyphicon glyphicon-star"></span></a>
                            </li>
                            <li><a href="#"><span
                                        class="glyphicon glyphicon-star"></span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <strong>Klanten gegevens</strong><br>
                        <div class="table-responsive">
                            <table
                                class="table table-condensed table-responsive table-user-information">
                                <tbody>
                                <tr>
                                    <td>
                                        <strong>
                                                                            <span
                                                                                class="glyphicon glyphicon-user  text-primary"></span>
                                            Volledige naam
                                        </strong>
                                    </td>
                                    <td class="text-primary">

                                        <?php
                                        echo $row["name"];
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                                                            <span
                                                                                class="glyphicon glyphicon-bookmark text-primary"></span>
                                            Adres & huisnummer
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?php
                                        echo $row["adres"];
                                        ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                                                            <span
                                                                                class="glyphicon glyphicon-eye-open text-primary"></span>
                                            Geboortedatum
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?php
                                        echo $row["geboortedatum"];
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                                                            <span
                                                                                class="glyphicon glyphicon-envelope text-primary"></span>
                                            Email
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?php
                                        echo $row["email"];
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                                                            <span
                                                                                class="glyphicon glyphicon-calendar text-primary"></span>
                                            Postcode
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?php
                                        echo $row["postcode"];
                                        ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}

$con->close();
?>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
