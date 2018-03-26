<!doctype html>
<html lang="en">
<?php
    include 'head.php';
?>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="assets/img/sidebar-2.jpg">
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
                <li>
                    <a href="index.php">
                        <i class="pe-7s-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
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
                    <a class="navbar-brand" href="bfs.php">BFS Algorithm Program</a>
                </div>
                <div class="collapse navbar-collapse">
                    <!-- For mobile view menu dropdown -->
                </div>
            </div>
        </nav>


        <div class="content" style="padding-bottom: 0px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Romania road-map</h4>
                                <hr>
                            </div>
                            <div class="content">
                                <div class="footer">
                                    <div class="legend">
                                        <img src="assets/img/RomaniaMap.png" width="100%">
                                    </div>
                                    <div class="">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Select City</h4>
                                <hr>
                            </div>
                            <div class="content">
                                <form method="POST" action="bfs.php">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Start Location : </label>
                                                <select name="start_location">
                                                  <option value="Arad">Arad</option>
                                                  <option value="Bucharest">Bucharest</option>
                                                  <option value="Craiova">Craiova</option>
                                                  <option value="Dobreta">Dobreta</option>
                                                  <option value="Eforie">Eforie</option>
                                                  <option value="Fagaras">Fagaras</option>
                                                  <option value="Giurgiu">Giurgiu</option>
                                                  <option value="Hirsova">Hirsova</option>
                                                  <option value="Iasi">Iasi</option>
                                                  <option value="Lugoj">Lugoj</option>
                                                  <option value="Mehadia">Mehadia</option>
                                                  <option value="Neamt">Neamt</option>
                                                  <option value="Oradea">Oradea</option>
                                                  <option value="Pitesti">Pitesti</option>
                                                  <option value="Rimnicu Vilcea">Rimnicu Vilcea</option>
                                                  <option value="Sibiu">Sibiu</option>
                                                  <option value="Timisoara">Timisoara</option>
                                                  <option value="Urziceni">Urziceni</option>
                                                  <option value="Vaslui">Vaslui</option>
                                                  <option value="Zerind">Zerind</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Final Location : </label>
                                                <select name="final_location">
                                                  <option value="Arad">Arad</option>
                                                  <option value="Bucharest">Bucharest</option>
                                                  <option value="Craiova">Craiova</option>
                                                  <option value="Dobreta">Dobreta</option>
                                                  <option value="Eforie">Eforie</option>
                                                  <option value="Fagaras">Fagaras</option>
                                                  <option value="Giurgiu">Giurgiu</option>
                                                  <option value="Hirsova">Hirsova</option>
                                                  <option value="Iasi">Iasi</option>
                                                  <option value="Lugoj">Lugoj</option>
                                                  <option value="Mehadia">Mehadia</option>
                                                  <option value="Neamt">Neamt</option>
                                                  <option value="Oradea">Oradea</option>
                                                  <option value="Pitesti">Pitesti</option>
                                                  <option value="Rimnicu Vilcea">Rimnicu Vilcea</option>
                                                  <option value="Sibiu">Sibiu</option>
                                                  <option value="Timisoara">Timisoara</option>
                                                  <option value="Urziceni">Urziceni</option>
                                                  <option value="Vaslui">Vaslui</option>
                                                  <option value="Zerind">Zerind</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="find_location" class="btn btn-info btn-fill pull-left">Search</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
            if(isset($_POST['find_location']))
            {
                $start_loc = $_POST['start_location'];
                $final_loc = $_POST['final_location'];
                ?>
                <div class="content" style="padding-top: 0px;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title">Travel from <b><?=$start_loc;?></b> to <b><?=$final_loc;?></b> Using BFS Algorithm</h4>
                                        <hr>
                                    </div>
                                    <div class="content">
                                        <div class="footer">
                                            <div class="">

                                            <?php
                                                // Define Cities                                        
                                                $kota[] = "Arad";
                                                $kota['Arad']['h'] = 366;
                                                $kota['Arad']['tetangga'][] = "Zerind";             $kota['Arad']['Zerind']['jarak'] = 75;
                                                $kota['Arad']['tetangga'][] = "Sibiu";              $kota['Arad']['Sibiu']['jarak'] = 140;
                                                $kota['Arad']['tetangga'][] = "Timisoara";          $kota['Arad']['Timisoara']['jarak'] = 118;
                                                sort($kota['Arad']['tetangga']);

                                                $kota[] = "Bucharest";
                                                $kota['Bucharest']['h'] = 0;
                                                $kota['Bucharest']['tetangga'][] = "Fagaras";       $kota['Bucharest']['Fagaras']['jarak'] = 99;
                                                $kota['Bucharest']['tetangga'][] = "Giurgiu";       $kota['Bucharest']['Giurgiu']['jarak'] = 90;
                                                $kota['Bucharest']['tetangga'][] = "Urziceni";      $kota['Bucharest']['Urziceni']['jarak'] = 85;
                                                $kota['Bucharest']['tetangga'][] = "Pitesti";       $kota['Bucharest']['Pitesti']['jarak'] = 101;
                                                sort($kota['Bucharest']['tetangga']);

                                                $kota[] = "Craiova";
                                                $kota['Craiova']['h'] = 60;
                                                $kota['Craiova']['tetangga'][] = "Rimnicu Vilcea";  $kota['Craiova']['Rimnicu Vilcea']['jarak'] = 146;
                                                $kota['Craiova']['tetangga'][] = "Dobreta";         $kota['Craiova']['Dobreta']['jarak'] = 120;
                                                $kota['Craiova']['tetangga'][] = "Pitesti";         $kota['Craiova']['Pitesti']['jarak'] = 138;
                                                sort($kota['Craiova']['tetangga']);

                                                $kota[] = "Dobreta";
                                                $kota['Dobreta']['h'] = 242;
                                                $kota['Dobreta']['tetangga'][] = "Craiova";         $kota['Dobreta']['Craiova']['jarak'] = 120;
                                                $kota['Dobreta']['tetangga'][] = "Mehadia";         $kota['Dobreta']['Mehadia']['jarak'] = 75;
                                                sort($kota['Dobreta']['tetangga']);

                                                $kota[] = "Eforie";
                                                $kota['Eforie']['h'] = 161;
                                                $kota['Eforie']['tetangga'][] = "Hirsova";          $kota['Eforie']['Hirsova']['jarak'] = 86;
                                                sort($kota['Eforie']['tetangga']);

                                                $kota[] = "Fagaras";
                                                $kota['Fagaras']['h'] = 176;
                                                $kota['Fagaras']['tetangga'][] = "Bucharest";       $kota['Fagaras']['Bucharest']['jarak'] = 211;
                                                $kota['Fagaras']['tetangga'][] = "Sibiu";           $kota['Fagaras']['Sibiu']['jarak'] = 99;
                                                sort($kota['Fagaras']['tetangga']);

                                                $kota[] = "Giurgiu";
                                                $kota['Giurgiu']['h'] = 77;
                                                $kota['Giurgiu']['tetangga'][] = "Bucharest";       $kota['Giurgiu']['Bucharest']['jarak'] = 90;
                                                sort($kota['Giurgiu']['tetangga']);

                                                $kota[] = "Hirsova";
                                                $kota['Hirsova']['h'] = 151;
                                                $kota['Hirsova']['tetangga'][] = "Eforie";          $kota['Hirsova']['Eforie']['jarak'] = 86;
                                                $kota['Hirsova']['tetangga'][] = "Urziceni";        $kota['Hirsova']['Urziceni']['jarak'] = 98;
                                                sort($kota['Hirsova']['tetangga']);

                                                $kota[] = "Iasi";
                                                $kota['Iasi']['h'] = 266;
                                                $kota['Iasi']['tetangga'][] = "Neamt";              $kota['Iasi']['Neam']['jarak'] = 87;
                                                $kota['Iasi']['tetangga'][] = "Vaslui";             $kota['Iasi']['Vaslui']['jarak'] = 92;
                                                sort($kota['Iasi']['tetangga']);

                                                $kota[] = "Lugoj";
                                                $kota['Lugoj']['h'] = 244;
                                                $kota['Lugoj']['tetangga'][] = "Mehadia";           $kota['Lugoj']['Mehadia']['jarak'] = 70;
                                                $kota['Lugoj']['tetangga'][] = "Timisoara";         $kota['Lugoj']['Timisoara']['jarak'] = 111;
                                                sort($kota['Lugoj']['tetangga']);

                                                $kota[] = "Mehadia";
                                                $kota['Mehadia']['h'] = 241;
                                                $kota['Mehadia']['tetangga'][] = "Dobreta";         $kota['Mehadia']['Dobreta']['jarak'] = 75;
                                                $kota['Mehadia']['tetangga'][] = "Lugoj";           $kota['Mehadia']['Lugoj']['jarak'] = 70;
                                                sort($kota['Mehadia']['tetangga']);

                                                $kota[] = "Neamt";
                                                $kota['Neamt']['h'] = 234;
                                                $kota['Neamt']['tetangga'][] = "Iasi";              $kota['Neamt']['Dobreta']['jarak'] = 87;
                                                sort($kota['Neamt']['tetangga']);

                                                $kota[] = "Oradea";
                                                $kota['Oradea']['h'] = 380;
                                                $kota['Oradea']['tetangga'][] = "Sibiu";            $kota['Oradea']['Sibiu']['jarak'] = 151;
                                                $kota['Oradea']['tetangga'][] = "Zerind";           $kota['Oradea']['Zerind']['jarak'] = 71;
                                                sort($kota['Oradea']['tetangga']);

                                                $kota[] = "Pitesti";
                                                $kota['Pitesti']['h'] = 100;
                                                $kota['Pitesti']['tetangga'][] = "Craiova";         $kota['Pitesti']['Craiova']['jarak'] = 138;
                                                $kota['Pitesti']['tetangga'][] = "Bucharest";       $kota['Pitesti']['Bucharest']['jarak'] = 101;
                                                $kota['Pitesti']['tetangga'][] = "Rimnicu Vilcea";  $kota['Pitesti']['Rimnicu Vilcea']['jarak'] = 97;
                                                sort($kota['Pitesti']['tetangga']);

                                                $kota[] = "Rimnicu Vilcea";
                                                $kota['Rimnicu Vilcea']['h'] = 193;
                                                $kota['Rimnicu Vilcea']['tetangga'][] = "Craiova";  $kota['Rimnicu Vilcea']['Craiova']['jarak'] = 146;
                                                $kota['Rimnicu Vilcea']['tetangga'][] = "Pitesti";  $kota['Rimnicu Vilcea']['Pitesti']['jarak'] = 97;
                                                $kota['Rimnicu Vilcea']['tetangga'][] = "Sibiu";    $kota['Rimnicu Vilcea']['Sibiu']['jarak'] = 80;
                                                sort($kota['Rimnicu Vilcea']['tetangga']);

                                                $kota[] = "Sibiu";
                                                $kota['Sibiu']['h'] = 253;
                                                $kota['Sibiu']['tetangga'][] = "Arad";              $kota['Sibiu']['Arad']['jarak'] = 140;
                                                $kota['Sibiu']['tetangga'][] = "Fagaras";           $kota['Sibiu']['Fagaras']['jarak'] = 99;
                                                $kota['Sibiu']['tetangga'][] = "Rimnicu Vilcea";    $kota['Sibiu']['Rimnicu Vilcea']['jarak'] = 80;
                                                $kota['Sibiu']['tetangga'][] = "Oradea";            $kota['Sibiu']['Oradea']['jarak'] = 151;
                                                sort($kota['Sibiu']['tetangga']);

                                                $kota[] = "Timisoara";
                                                $kota['Timisoara']['h'] = 329;
                                                $kota['Timisoara']['tetangga'][] = "Arad";          $kota['Timisoara']['Arad']['jarak'] = 118;
                                                $kota['Timisoara']['tetangga'][] = "Lugoj";         $kota['Timisoara']['Lugoj']['jarak'] = 111;
                                                sort($kota['Timisoara']['tetangga']);

                                                $kota[] = "Urziceni";
                                                $kota['Urziceni']['h'] = 80;
                                                $kota['Urziceni']['tetangga'][] = "Bucharest";      $kota['Urziceni']['Bucharest']['jarak'] = 85;
                                                $kota['Urziceni']['tetangga'][] = "Hirsova";        $kota['Urziceni']['Hirsova']['jarak'] = 98;
                                                sort($kota['Urziceni']['tetangga']);

                                                $kota[] = "Vaslui";
                                                $kota['Vaslui']['h'] = 199;
                                                $kota['Vaslui']['tetangga'][] = "Iasi";             $kota['Vaslui']['Iasi']['jarak'] = 92;
                                                $kota['Vaslui']['tetangga'][] = "Urziceni";         $kota['Vaslui']['Urziceni']['jarak'] = 142;
                                                sort($kota['Vaslui']['tetangga']);

                                                $kota[] = "Zerind";
                                                $kota['Zerind']['h'] = 374;
                                                $kota['Zerind']['tetangga'][] = "Arad";             $kota['Zerind']['Arad']['jarak'] = 75;
                                                $kota['Zerind']['tetangga'][] = "Oradea";           $kota['Zerind']['Oradea']['jarak'] = 71;
                                                sort($kota['Zerind']['tetangga']);


                                                $tujuan_ketemu  = false;
                                                $kota_mulai     = $start_loc;
                                                $kota_tujuan    = $final_loc;
                                                $tujuan_tidak_ketemu = 0;


                                                $queue = new SplQueue();
                                                $queue->enqueue($kota_mulai);
                                                $parent[$kota_mulai] = "";
                                                $visited[] = $kota_mulai;
                                                $dist[$kota_mulai] = 0;
                                                $queueCount = 1;


                                                while ($tujuan_ketemu == false && $queue->count() > 0)
                                                {
                                                    $kota_sekarang = $queue->dequeue();
                                                    $explored[] = $kota_sekarang;
                                                    $queueCount--;
                                                    echo "<br><br><h5><b>Current City : ".$kota_sekarang."</b></h5>";
                                                    echo "<b>Explored : </b>";
                                                    for ($i=0 ; $i < count($explored) ; $i++) echo $explored[$i]." - ";

                                                    $jum_anak = count($kota[$kota_sekarang]['tetangga']);
                                                    for ( $i=0 ; $i<$jum_anak ; $i++)
                                                    {
                                                        $kota_anak = $kota[$kota_sekarang]['tetangga'][$i];
                                                        if (!in_array($kota_anak, $visited))
                                                        {
                                                            $parent[$kota_anak] = $kota_sekarang;
                                                            $visited[] = $kota_anak;
                                                            $dist[$kota_anak] = $dist[$kota_sekarang] + $kota[$kota_sekarang][$kota_anak]['jarak'];
                                                            $queue->enqueue($kota_anak);
                                                            $queueCount++;
                                                            if ($kota_tujuan == $kota_anak) $tujuan_ketemu = true;
                                                        }
                                                    }
                                                    echo "<br><b>Frontier : </b>";
                                                    for ($i=0 ; $i < count($queue) ; $i++) echo $queue[$i]." - ";
                                                }


                                                echo "<hr><h4><b>Result</b></h4>";

                                                $tmp = $kota_tujuan;
                                                while ($parent[$tmp] != "")
                                                {
                                                    $s[] = $tmp;
                                                    $tmp = $parent[$tmp];
                                                }
                                                $s[] = $kota_mulai;
                                                $s = array_reverse($s);
                                                echo "<b>Path Taken : </b>";
                                                for ($i=0 ; $i < count($s) ; $i++) echo $s[$i]." - ";

                                                echo "<br><b>Total Path Cost : </b>".$dist[$kota_tujuan];
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <?php
            }
            else
            {
                ?>

                <div class="content" style="padding-top: 0px;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title text-danger">Select Data First !</h4>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <?php
            }
        ?>



    </div>
</div>


</body>

<?php
    include 'script.php';
?>

</html>
