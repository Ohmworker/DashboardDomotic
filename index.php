<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>A tout vent</title>
    <?php include('include/css.html'); ?>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- Menu -->
        <?php include('include/menu.html'); ?>

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">Chambre<br /><h3><label id="sondeTemperature">15</label> °C</h3></div>
                                </section>
                            </div>
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">Energie<br /><h3><label id="Puissance">0</label> kW</h3></div>
                                </section>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">Tension<br /><h3><label id="tensionEnedis">0</label> V</h3></div>
                                </section>
                            </div>
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">Flag RTE<br /><h3><label id="Tempo">?</label></h3></div>
                                </section>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">Météo à Dainville<br /><h3><label id="meteoTemperature"></label> <label id="meteoFormat"></label> (<label id="meteoVentDirection"></label>)</h3>
                                        <br /><h4><label id="meteoVentVitesse"></label></h4></div>
                                </section>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>



    <!-- Main JS-->
    <?php include('include/scripts.html'); ?>

</body>

</html>
<!-- end document-->
