<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="style.css" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet" />
        
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        
    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="layout-dark.php">Go Game Chart</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="layout-dark.php"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- 오른쪽 상단-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index.html">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        
        
        <!-- 왼쪽 -->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">HOME</div>
                            
                            <a class="nav-link" href="layout-dark.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            
                            <div class="sb-sidenav-menu-heading">Contents</div>
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Game Information Site
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Go To Site
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="https://www.op.gg/">OP.GG</a>
                                            <a class="nav-link" href="https://www.inven.co.kr/">INVEN</a>
                                            <a class="nav-link" href="https://store.steampowered.com/?l=koreana">STEAM</a>
                                            <a class="nav-link" href="https://www.userbenchmark.com/">USERBENCHMARK</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>

                            <a class="nav-link" href="#GameChart">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Online Game Ranking
                            </a>
                            

                            <a class="nav-link" href="#Chart">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Various Game Chart
                            </a>
                            
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Display Mode
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-dark.php">Dark Mode</a>
                                    <a class="nav-link" href="layout-light.php">Light Mode</a>
                                </nav>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                    
                </nav>
            </div>
            
            <!-- 가운데 -->>
            <div id="layoutSidenav_content">
                <main>
                    
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Go Game Chart</h1>
                        
                        <br>
                        <br>
                        <br>
                        
                        <ul style="font-size : 20px;">
                            <li> Game Information Site </li>
                        </ul> 
                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body" style="font-size: medium;">OP.GG  (게임 전적 검색 사이트)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="https://www.op.gg/">Go to Site</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body" style="font-size: medium;">INVEN  (게임 정보 사이트)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="https://www.inven.co.kr/">Go to Site</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body" style="font-size: medium;">STEAM  (게임 관리 플랫폼)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="https://store.steampowered.com/?l=koreana">Go to Site</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body" style="font-size: medium;">USERBENCHMARK  (PC 성능 측정 사이트)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="https://www.userbenchmark.com/">Go to Site</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <br>
                        <br>

                        <a name = "GameChart"></a>
                            <ul style ="font-size : 20px;">
                                <li> Online Game Ranking    (2022-06-06 ~ 2022-06-12) </li>  
                                <a style ="font-size : 13px;">포털 트렌드 , PC방 접속 , 게임방송 시청자 , 메카 유저 투표 기준</a> 

                            </ul> 
                        </a> 

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Online Game Ranking
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Rank</th>
                                            <th>Game Name</th>
                                            <th>Company</th>
                                            <th>Genre</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                        $host = 'localhost';
                                        $user = 'tjdckdwh0';
                                        $pw = '1234';
                                        $dbName = 'mysql';
                                        
                                        $con = new mysqli($host, $user, $pw, $dbName);

                                        $sql = "SELECT * FROM gamechart";
                                        $result = mysqli_query($con, $sql);
 
                                        while($row = mysqli_fetch_array($result)){
                                            echo 
                                            "<tr> 
                                                <td>".  $row["gamechart_no"]  ."</td>
                                                <td>".  $row["gamechart_gamename"]  ."</td>
                                                <td>".  $row["gamechart_company"]  ."</td>
                                                <td>".  $row["genre"]  ."</td>
                                            </tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <br>
                        <br>
                        
                        <a name = "Chart">
                            <ul style="font-size : 20px;">
                                <li> Various Game Chart    (2022-06-06 ~ 2022-06-12)   </li>
                            </ul>
                        </a>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Share By Online Game Genre
                                    </div>
                                    <?php
                                        $host = 'localhost';
                                        $user = 'tjdckdwh0';
                                        $pw = '1234';
                                        $dbName = 'mysql';
                                        $con = new mysqli($host, $user, $pw, $dbName);
                                                                    
                                        
                                        $query1 = $con->query("SELECT chartpie_genre,chartpie_data FROM chartpie");
                                        
                                        
                                        foreach($query1 as $row)
                                        {
                                            $genre[] = $row['chartpie_genre'];
                                            $data[] = $row['chartpie_data'];
                                        }
                                        
                                    ?>
                                    
                                    <div class="card-body"><canvas id="myPieChart" width="100%" height="100" ></canvas></div>
                                    
                                    <script>    
                                        var ctx = document.getElementById("myPieChart");
                                        var pieChart = new Chart(ctx, {
                                          type: 'pie',
                                          data: {
                                            labels: <?php echo json_encode($genre) ?>,
                                            datasets: [{
                                              data: <?php echo json_encode($data) ?>,
                                              backgroundColor: [
                                                "rgba(255,99,132,1)",
                                                "rgba(54,162,235,1)",
                                                "rgba(255,206,86,1)",
                                                "rgba(75,192,192,1)",
                                                "rgba(153,102,255,1)",
                                              ],
                                              borderColor: [
                                                "rgba(255,99,132,1)",
                                                "rgba(54,162,235,1)",
                                                "rgba(255,206,86,1)",
                                                "rgba(75,192,192,1)",
                                                "rgba(153,102,255,1)",
                                              ],

                                            }],
                                          },
                                      
                                          options: { 
                                            legend: {
                                                labels: {
                                                    fontColor: 'rgba(128, 128, 128, 1)',
                                                    fontSize: 30,
                                                    position: 'right'
                                                }
                                            },
                                          }
                                        });
                                    </script>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        STEAM GAME Concurrent Connections Ranking
                                    </div>
                                    <?php
                                        $host = 'localhost';
                                        $user = 'tjdckdwh0';
                                        $pw = '1234';
                                        $dbName = 'mysql';
                                        $con = new mysqli($host, $user, $pw, $dbName);
                                                                    
                                        
                                        $query = $con->query("SELECT chartbar_gamename,chartbar_players FROM chartbar");
                                        
                                        
                                        foreach($query as $row)
                                        {
                                            $players[] = $row['chartbar_players'];
                                            $name[] = $row['chartbar_gamename'];
                                        }
                                        
                                    ?>
    
                                    <div class="card-body">
                                        <canvas id="myBarChart" width="100%" height="100"></canvas>
                                    </div>
                                    
                                    <script>    
                                        const labels = <?php echo json_encode($name) ?>;
                                        const data = {
                                            labels: labels,
                                            datasets: [{
                                              label: 'Concurrent Connections',
                                              data: <?php echo json_encode($players) ?>,
                                              backgroundColor: [
                                                "rgba(255,99,132,1)",
                                                "rgba(54,162,235,1)",
                                                "rgba(255,206,86,1)",
                                                "rgba(75,192,192,1)",
                                                "rgba(153,102,255,1)",
                                                "rgba(255,159,64,1)"
                                              ],
                                              borderColor: [
                                                "rgba(255,99,132,1)",
                                                "rgba(54,162,235,1)",
                                                "rgba(255,206,86,1)",
                                                "rgba(75,192,192,1)",
                                                "rgba(153,102,255,1)",
                                                "rgba(255,159,64,1)"
                                              ],
                                            }]
                                        };
                                        const config = {
                                            type : 'bar',
                                            data: data,
                                            options: {
                                                scales: {
                                                  x: [{
                                                    time: {
                                                      unit: 'GameName'
                                                    },
                                                    gridLines: {
                                                      display: false
                                                    },
                                                    ticks: {
                                                      maxTicksLimit: 6,
                                                      fontColor: 'rgba(128, 128, 128, 1)'
                                                    }
                                                  }],
                                                  y: [{
                                                    ticks: {
                                                      min: 100000,
                                                      max: 800000,
                                                      maxTicksLimit: 8,
                                                      fontColor: 'rgba(128, 128, 128, 1)'
                                                    },
                                                    gridLines: {
                                                      display: true,
                                                      color: "rgba(2,117,216,0.8)"
                                                    }
                                                  }],
                                                },
                                                legend: {
                                                  display: false
                                                }
                                            }
                                        };
                                    
                                        const myChart = new Chart(
                                          document.getElementById('myBarChart'),
                                          config
                                        );
                                    </script>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </main>
                <footer class="py-4 bg-copy mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Go Game Chart 2022</div>
                            <div>
                                <a href="#">Top</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="sidebarToggle.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="datatables-simple-demo.js"></script>
    </body>
</html>
