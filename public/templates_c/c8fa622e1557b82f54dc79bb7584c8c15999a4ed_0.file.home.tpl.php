<?php
/* Smarty version 3.1.29, created on 2016-06-20 20:47:27
  from "/Applications/MAMP/htdocs/kitchenProject/kitchenProject/app/views/home/template/home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57683a3f7d4447_41897478',
  'file_dependency' => 
  array (
    'c8fa622e1557b82f54dc79bb7584c8c15999a4ed' => 
    array (
      0 => '/Applications/MAMP/htdocs/kitchenProject/kitchenProject/app/views/home/template/home.tpl',
      1 => 1466448446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57683a3f7d4447_41897478 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
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
                                        <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "database", array (
  0 => 'block_11683961057683a3f7c77b9_02505320',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

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
<p>Hello <?php echo '<?=';?>$data['name']<?php echo '?>';?></p>

<?php echo '<?php
';?>// Simple method

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
    <?php echo '?>';?>
        --><?php }
/* {block 'database'}  file:../app/views/home/template/home.tpl */
function block_11683961057683a3f7c77b9_02505320($_smarty_tpl, $_blockParentStack) {
?>

                                            Hey
                                        <?php
}
/* {/block 'database'} */
}
