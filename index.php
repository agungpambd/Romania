<!doctype html>
<html lang="en">
<?php
    include 'head.php';
?>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-4.jpg">
    <!--
        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag
    -->
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.php" class="simple-text">
                    Project 1
                </a>
            </div>
            <ul class="nav">
                <li class="active">
                    <a href="index.php">
                        <i class="pe-7s-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="bfs.php">
                        <i class="pe-7s-angle-right-circle"></i>
                        <p>BFS</p>
                    </a>
                </li>
                <li>
                    <a href="sma.php">
                        <i class="pe-7s-angle-right-circle"></i>
                        <p>SMA*</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Artificial Intelligence One1</a>
                </div>
                <div class="collapse navbar-collapse">
                    <!-- For mobile view menu dropdown -->
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">By : </h4>
                            </div>
                            <div class="content">
                                <div class="footer">
                                    <div class="legend">
                                        <ol>
                                          <li>Abdul Kholik&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( 17/418611/PPA/05395 )</li>
                                          <li>Agung Pambudi&nbsp;&nbsp;( 17/418614/PPA/05398 )</li>
                                          <li>Ainil Mardiah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( 17/418617/PPA/05401 )</li>
                                          <li>Annisaa Utami&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( 17/418622/PPA/05406 )</li>
                                        </ol> 
                                    </div>
                                    <div class="stats">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Romania road-map</h4>
                                <p class="category">*Travel from Arad to Bucharest using BFS and SMA* Algorithm</p>
                            </div>
                            <div class="content">
                                <div class="footer">
                                    <div class="legend">
                                        <img src="assets/img/RomaniaMap.png">
                                    </div>
                                    <div class="stats">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">BFS</h4>
                                <p class="category">Breadth-fisrt Search Algorithm</p>
                            </div>
                            <div class="content">
                                <div class="footer">
                                    <div class="legend">
                                        <a href="bfs.php" class="text-danger"><button class="btn btn-success btn-fill"><i class="pe-7s-play"></i> View program</button></a>
                                    </div>
                                    <div class="stats">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">SMA*</h4>
                                <p class="category">Simplified Memory Bounded A* Algorithm</p>
                            </div>
                            <div class="content">
                                <div class="footer">
                                    <div class="legend">
                                        <a href="sma.php" class="text-danger"><button class="btn btn-success btn-fill"><i class="pe-7s-play"></i> View program</button></a>
                                    </div>
                                    <div class="stats">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>


</body>

<?php
    include 'script.php';
?>

</html>
