<?php include_once('lib/dao/f_select_pharma.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cpanael</title>
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    </head>
    <body>
    <?php
    include_once('html/menu.html');
    ?>
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="qrcode.php" class="btn-box big span4"><i class="icon-qrcode"></i><b>Lorem Ipsum</b>
                                        <p class="text-muted">
                                            Création</p>
                                    </a><a href="balance-mensuelle.php" class="btn-box big span4"><i class="icon-money"></i><b>Lorem Ipsum</b>
                                        <p class="text-muted">
                                            Lorem Ipsum</p>
                                    </a><a href="list-present.php" class="btn-box big span4"><i class="icon-ok-circle"></i><b>Lorem Ipsum</b>
                                        <p class="text-muted">
                                            Lorem Ipsum</p>
                                    </a>
                                </div>
                                <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="tabmensuelagent.php" class="btn-box small span4"><i class="icon-ok-circle"></i><b>Lorem Ipsum </b>
                                                </a>
                                                <a href="#" class="btn-box small span4"><i class="icon-money"></i><b>Lorem Ipsum</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-stop"></i><b>Lorem Ipsum</b>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                        </div>
                                    </div>
                                    <ul class="widget widget-usage unstyled span4">
                                        <li>
                                            <p>
                                                <a href="list-agent.php"><i style="font-size: 30px;" class="icon-list"></i>
                                                    <br><b>Lorem Ipsum</b>
                                                    <br>Lorem Ipsum
                                                </a> <strong></strong>
                                            </p>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                            <!--/#btn-controls-->

                            <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Lorem Ipsum</h3>
                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <?php
                                    if(isset($_GET['sms-confirm'])){?>
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>Félicitation!</strong> <?php echo $_GET['sms-confirm']; ?>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <h3>
                                        Listes des Pharmacies</h3>
                                </div>

                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" width="100%">

                                        <thead>
                                            <tr>
                                                <th>
                                                     Nom
                                                </th>
                                                <th>
                                                    Tel
                                                </th>
                                                <th>
                                                    adresse
                                                </th>
                                                <th>
                                                    ville
                                                </th>
                                                <th>
                                                    quartier
                                                </th>
                                                <th>
                                                     option1
                                                </th>
                                                <th>
                                                    option2
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php
                                        while($pharma = $req->fetch()) {
                                        ?>

                                            <tr class="odd gradeX">
                                                <td>
                                                    <?php echo $pharma['nom'];?>
                                                </td>
                                                <td>
                                                    <?php echo $pharma['tel'];?>
                                                </td>
                                                <td>
                                                    <?php echo $pharma['adresse'];?>
                                                </td>
                                                <td>
                                                    <?php echo $pharma['ville'];?>
                                                </td>
                                                <td>
                                                    <?php echo $pharma['quartier'];?>
                                                </td>
                                                <td class="center">
                                                    <a href="update_pharma.php?tag=<?php echo $pharma['id'];?>">modifier</a>
                                                </td>
                                                <td class="center">
                                                    <a href="lib/dao/f_delete_pharma.php?tag=<?php echo $pharma['id'];?>">supprimer</a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <!--/.module-->



                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2016 flashmuli</b>Tous droit reservés.
            </div>
        </div>
        <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="js/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="js/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="js/common.js" type="text/javascript"></script>
      
    </body>
