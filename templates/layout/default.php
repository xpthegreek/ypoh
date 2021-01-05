<?php
$cakeDescription = 'Y.P.O.H.';
?>

    <!doctype html>
    <html lang="en">
        <head>
            <!-- Required meta tags -->
            <?= $this->Html->charset() ?>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>
                <?= $cakeDescription ?>-
                <?= $title ?>
            </title>
            <?= $this->Html->meta('icon') ?>

          <!--  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



            <?= $this->fetch('meta') ?>
            <?= $this->fetch('css') ?>
            <?= $this->fetch('script') ?>
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
            <?= $this->Html->css('site') ?>
            <title> </title>
        </head>
        <body>
            <div class="container-fluid h-100 bg-dark">

                <div class="bg-light h-100">

                    <div id='top_hero' class="h-50 bgBlack" >

                      <div class='d-flex flex-column align-items-center  pt-5'>
                        <?= $this->Html->image('ypohlogo_x.png', ['alt' => 'CakePHP', 'class'=>'logoImg' ]); ?>
                        <div id='header_text_big' class='text-light '> Another Block Of Text</div>
                        <div class='text-light'> Another Block Of Text</div>
                      </div>
                      <div class="grid-container">
                        <div class="LOGO"></div>
                      </div>
                    </div>
                    <div id='bottom_panels' class="h-50 d-flex flex-row">

                        <div id='left_panel' class="bg-info w-50">

                        </div>
                        <div id='right_panel' class="bg-primary w-50">

                        </div>

                    </div>

                </div>
            </div>




            <?= $this->part('navbar_bottom') ?>
            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
            -->
        </body>
    </html>
