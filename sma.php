<!doctype html>
<html lang="en">
<?php
    include 'head.php';
?>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">
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
                <li>
                    <a href="bfs.php">
                        <i class="pe-7s-angle-right-circle"></i>
                        <p>BFS</p>
                    </a>
                </li>
                <li class="active">
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
                    <a class="navbar-brand" href="sma.php">SMA* Algorithm Program</a>
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
                                <h4 class="title">Straightline from Arad &rarr; Bucharest</h4>
                            </div>
                            <div class="content table-responsive table-full-width" style="padding: 15px 15px 0px 15px;">
                                <table class="table table-hover table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Arad</td>
                                            <td>366</td>
                                            <td>Mehadia</td>
                                            <td>241</td>
                                        </tr>
                                        <tr>
                                            <td>Bucharest</td>
                                            <td>0</td>
                                            <td>Neamt</td>
                                            <td>234</td>
                                        </tr>
                                        <tr>
                                            <td>Craiova</td>
                                            <td>160</td>
                                            <td>Oradea</td>
                                            <td>380</td>
                                        </tr>
                                        <tr>
                                            <td>Dobreta</td>
                                            <td>242</td>
                                            <td>Pitesti</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>Eforie</td>
                                            <td>161</td>
                                            <td>Rimnicu Vilcea</td>
                                            <td>193</td>
                                        </tr>
                                        <tr>
                                            <td>Fagaras</td>
                                            <td>176</td>
                                            <td>Sibiu</td>
                                            <td>253</td>
                                        </tr>
                                        <tr>
                                            <td>Giurgiu</td>
                                            <td>77</td>
                                            <td>Timisoara</td>
                                            <td>329</td>
                                        </tr>
                                        <tr>
                                            <td>Hirsova</td>
                                            <td>151</td>
                                            <td>Urziceni</td>
                                            <td>80</td>
                                        </tr>
                                        <tr>
                                            <td>Iasi</td>
                                            <td>226</td>
                                            <td>Vaslui</td>
                                            <td>199</td>
                                        </tr>
                                        <tr>
                                            <td>Lugoj</td>
                                            <td>244</td>
                                            <td>Zerind</td>
                                            <td>374</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content" style="padding-top: 0px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Travel from <b>Arad</b> to <b>Bucharest</b> using SMA* Algorithm</h4>
                                <hr>
                            </div>
                            <div class="content">
                                <div class="footer">
                                    <div class="">

                                    <?php
                                        // Definisikan semua kota pada Romania Map
                                        // Definisikan semua tetangga pada setiap kota. Arad tidak perlu dijadikan tetangga siapapun  
                                        // Straightline hanya berlaku untuk travel dari Arad ke Bucharest                                      
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
                                        $kota['Sibiu']['tetangga'][] = "Fagaras";           $kota['Sibiu']['Fagaras']['jarak'] = 99;
                                        $kota['Sibiu']['tetangga'][] = "Rimnicu Vilcea";    $kota['Sibiu']['Rimnicu Vilcea']['jarak'] = 80;
                                        $kota['Sibiu']['tetangga'][] = "Oradea";            $kota['Sibiu']['Oradea']['jarak'] = 151;
                                        sort($kota['Sibiu']['tetangga']);

                                        $kota[] = "Timisoara";
                                        $kota['Timisoara']['h'] = 329;
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
                                        $kota['Zerind']['tetangga'][] = "Oradea";           $kota['Zerind']['Oradea']['jarak'] = 71;
                                        sort($kota['Zerind']['tetangga']);


                                        $kota_mulai          = "Arad"; //SMA* masih statis karena perlu mengubah data straightline juga
                                        $kota_tujuan         = "Bucharest"; //SMA* masih statis karena perlu mengubah data straightline juga
                                        $level               = 1;
                                        $f_min               = 0;
                                        $kota_berikut        = "";
                                        $kota_sebelumnya     = "";
                                        $hasil               = "";
                                        $tujuan_ketemu       = false;
                                        $tujuan_tidak_ketemu = 0;


                                        while( $tujuan_ketemu == false )
                                        {
                                            if( $level == 1 )
                                            { 
                                                $kota_sekarang = $kota_mulai; 

                                                //kota level disimpan didalam kota sekarang pada level 1
                                                $kota_level[$level][] = $kota_sekarang;

                                                $kota[$kota_sekarang]['min'] = $kota[$kota_sekarang]['h']+0;

                                                //deklarasi kota yang dilalui simpan dalam rute 
                                                $rute[] = $kota_sekarang;
                                            }
                                            //level selanjutnya
                                            $level++;
                                            
                                            $jum_anak = count($kota[$kota_sekarang]['tetangga'])-1;
                                            
                                            echo "<h5><b>Current City : ".$kota_sekarang."</b></h5>";
                                            
                                            for( $i=0;$i<=$jum_anak;$i++ )
                                            {
                                                // ambil kota anak nya
                                                $kota_anak = $kota[$kota_sekarang]['tetangga'][$i];
                                                
                                                $kota[$kota_sekarang]['lalui'] = 1;
                                                $kota_level[$level][] = $kota_anak;

                                                // simpan jarak sebelumnya kota_anak            
                                                $jarak_sebelumnya = @$kota[@$kota_sebelumnya]['rute_jarak']+@$kota[@$kota_sebelumnya][@$kota_sekarang]['jarak'];

                                                @$kota[$kota_anak]['jarak_sebelumnya'] = @$kota[$kota_sebelumnya][$kota_sekarang]['jarak'];
                                            
                                                $kota[$kota_anak]['rute_jarak'] = $kota[$kota_sekarang][$kota_anak]['jarak']+$jarak_sebelumnya;
                                                
                                                if( $level > 2 )
                                                {
                                                    $jarak_anak = $kota[$kota_anak]['rute_jarak']+$kota[$kota_anak]['h'];
                                                }
                                                else
                                                {
                                                    $jarak_anak = $kota[$kota_sekarang][$kota_anak]['jarak']+$kota[$kota_anak]['h'];
                                                }

                                                echo "> $kota_anak (".$jarak_anak.")<br>";
                                                $rute_jarak = $jarak_anak;

                                                //menyimpan variabel f(n)
                                                $kota[$kota_anak]['f'] = $rute_jarak;

                                                //membandingkan jarak terkecil dan terbesar dari tiap kota anak 
                                                if( $i == 0 )
                                                {
                                                    // simpan f-nya kota anak yang nanti akan di bandingkan
                                                    $tampung = $rute_jarak;
                                                    $kota_berikut = $kota_anak;
                                                    $kota[$kota_sekarang]['minimum'] = $tampung;
                                                    $kota[$kota_sekarang]['maximum'] = $tampung;
                                                }
                                                else
                                                {
                                                    // bandingkan f-nya kota anak dengan yang sebelumnya
                                                    if( $rute_jarak < $tampung )
                                                    {
                                                        $tampung = $rute_jarak;
                                                        $kota_berikut = $kota_anak;
                                                        //simpan minimum dalam variabel tampung 
                                                        $kota[$kota_sekarang]['minimum'] = $tampung; 
                                                    }

                                                    //simpan maksimum dalam variabel rute jarak 
                                                    if( $rute_jarak > $kota[$kota_sekarang]['maximum'] )
                                                    {
                                                        $kota[$kota_sekarang]['maximum'] = $rute_jarak;
                                                    }
                                                }
                                                            
                                                //jika kota anak=kota tujuan 
                                                echo "&nbsp;&nbsp;&nbsp;&nbsp;$kota_sekarang : f(min) = ".$kota[$kota_sekarang]['minimum']." , f(max) = ".$kota[$kota_sekarang]['maximum']." <br>";
                                                if( $kota_anak == $kota_tujuan )
                                                {
                                                    $tujuan_ketemu = true;
                                                    $rute[] = $kota_tujuan;
                                                    $tujuan_ketemu = true;
                                                    @$kota[$kota_anak]['rute_jarak'] = @$kota[$kota_sekarang]['rute_jarak']+$kota[$kota_sekarang][$kota_anak]['jarak']+$kota[$kota_anak]['h'];
                                                    break;
                                                }
                                            }
                                            echo "<br>";
                                            if( $tujuan_ketemu == false )
                                            {
                                                // bandingkan dengan level sebelumnya
                                                $pre_level = $level-1;
                                                $jum_kota_level = count($kota_level[$pre_level]);
                                                if( $pre_level > 2 && $kota_anak <> $kota_tujuan )
                                                {
                                                    //ambil kota level sebelumnya 
                                                    for ( $ke=0;$ke<=$jum_kota_level-1;$ke++ )
                                                    {
                                                        //jika kota pertama , simpan nilai minimum kevariabel minimum 
                                                        if( $ke == 0 )
                                                        {
                                                            $minimum = $kota[$kota_sekarang]['minimum'];
                                                        }
                                                        //menampilkan kota level sebelumnya sampai tujuan 
                                                        echo "** Kota Level Sebelumnya : ".$kota_level[$pre_level][$ke]." = ";
                                                        $prekota = $kota_level[$pre_level][$ke];
                                                        echo $kota[$prekota]['f']." <  ".$minimum." <br>";
                                            
                                                        if( $kota[$prekota]['f'] < $minimum && $prekota <> $kota_sekarang && $prekota <> $kota_tujuan )
                                                        {
                                                            $ada = 1;
                                                                              
                                                            $kota_berikut = $prekota;
                                                            $minimum = $kota[$prekota]['f'];
                                                           
                                                            array_pop($rute);
                                                        }
                                                    }
                                                    $kota_sekarang = $rute[$pre_level-2];
                                                }

                                                echo "<br>";
                                                
                                                $kota_sebelumnya = $kota_sekarang;
                                               
                                                if( $kota_berikut == $kota_tujuan )
                                                {
                                                    $rute[] = $kota_tujuan;
                                                    $tujuan_ketemu = true;
                                                    $kota[$kota_tujuan]['rute_jarak'] = $kota[$kota_sebelumnya]['rute_jarak']+$kota[$kota_sebelumnya][$kota_tujuan]['jarak']+$kota[$kota_tujuan]['h'];
                                                }
                                                else
                                                {
                                                    $kota_sekarang = $kota_berikut;
                                                    
                                                    $rute[] = $kota_berikut;
                                                }
                                            }
                                            if( $level > 6)
                                            {
                                                $tujuan_ketemu = true;
                                                $tujuan_tidak_ketemu = 1;
                                            }
                                        }
                                        //menampilan hasil 
                                        $jum_rute = count($rute);
                                        if( $tujuan_tidak_ketemu == 0 && $jum_rute > 0 )
                                        {
                                            for( $j=0;$j<$jum_rute;$j++)
                                            {
                                                $city = $rute[$j];
                                                $hasil .= "<b>".$rute[$j]."</b>";
                                                if( @$kota[$city]['minimum'] > 0 && @$kota[$city]['maximum'] > 0 )
                                                {
                                                    $hasil.=" (".$kota[$city]['minimum'].", ".$kota[$city]['maximum'].") &nbsp;&rarr;&nbsp; ";
                                                }
                                                else
                                                {
                                                    $hasil.= " <br><b>Total Path Cost : </b>".$kota[$city]['rute_jarak']."-";
                                                }
                                            }
                                        }
                                        else
                                        {
                                            $hasil = "Kota Tujuan Tidak di temukan!";
                                        }
                                        echo "<hr><h4><b>Result</b></h4>";
                                        echo "<b>Path Taken : </b>";
                                        echo rtrim($hasil," - ");
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
</div>


</body>

<?php
    include 'script.php';
?>

</html>
