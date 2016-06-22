<!-- Entire interface -->

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="page-header">

                    </div>

                    <!-- Jumbotron - Left sidebar -->

                    <div class="col-md-3">
                        <div class="jumbotron">
                            <h3 class="titleJumbotron">Box</h3>
                        </div>
                    </div>

                    <!-- Panel - Right section -->

                    <div class="col-md-9">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--
<p>Hello <?=$data['name']?></p>

<?php
// Simple method

// Connexion to Database
$bdd = new PDO('mysql:host=localhost;dbname=open_classroom','root','root');
$req = $bdd->query('SELECT * FROM jeux_video');
    // Fetch the result
$data = $req->fetch();
echo $data['nom'].' '.$data['prix'].'<br>';
    // Loop method
    while($data = $req->fetch())
    {
        echo $data['nom'].' '.$data['prix'].'<br>';
    }
    ?>
        -->