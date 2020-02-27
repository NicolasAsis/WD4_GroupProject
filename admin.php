<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage News</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Siya css -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap');

        body {
            font-family: 'Quicksand';
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar sticky-top navbar-light bg-light bg-white">
        <a class="navbar-brand ml-5" href="#">
            <img width="60px" src="imgs/logo-s.png">
        </a>
        <div style="display:flex; flex-direction:column;">
            <div>
                <a class="mr-5">Howdy! $Username </a>
                <a href="#">Logout</a>
            </div>
            
            <div><?php
                echo "Today is ";
                echo date('<b>Y M d</b>');
                ?> 
            </div>
        </div>
    </nav>
   
    <!-- News Session -->
    <div style="position: relative; " class="container">
    <div class="s-news-div">
        <div class='s-fs30'>News</div>
        <button class='s-btn s-btn-border s-btn-green'>+ News</button>
    </div>
    <!-- News List -->
    <div class="mt-5 s-news-list">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link s-fc-black" id="pills-jan-tab" data-toggle="pill" href="#pills-jan" role="tab"
                    aria-controls="pills-jan" aria-selected="true">JAN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active s-fc-black" id="pills-feb-tab" data-toggle="pill" href="#pills-feb"
                    role="tab" aria-controls="pills-feb" aria-selected="false">FEB</a>
            </li>
            <li class="nav-item">
                <a class="nav-link s-fc-black" id="pills-mar-tab" data-toggle="pill" href="#pills-mar"
                    role="tab" aria-controls="pills-mar" aria-selected="false">MAR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link s-fc-black" id="pills-apr-tab" data-toggle="pill" href="#pills-apr"
                    role="tab" aria-controls="pills-apr" aria-selected="false">APR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link s-fc-black" id="pills-may-tab" data-toggle="pill" href="#pills-may"
                    role="tab" aria-controls="pills-may" aria-selected="false">MAY</a>
            </li>
            <li class="nav-item">
                <a class="nav-link s-fc-black" id="pills-jun-tab" data-toggle="pill" href="#pills-jun"
                    role="tab" aria-controls="pills-jun" aria-selected="false">JUN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link s-fc-black" id="pills-jul-tab" data-toggle="pill" href="#pills-jul"
                    role="tab" aria-controls="pills-jul" aria-selected="false">JUL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link s-fc-black" id="pills-aug-tab" data-toggle="pill" href="#pills-aug"
                    role="tab" aria-controls="pills-aug" aria-selected="false">AUG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link s-fc-black" id="pills-sep-tab" data-toggle="pill" href="#pills-sep"
                    role="tab" aria-controls="pills-sep" aria-selected="false">SEP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link s-fc-black" id="pills-oct-tab" data-toggle="pill" href="#pills-oct"
                    role="tab" aria-controls="pills-oct" aria-selected="false">OCT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link s-fc-black" id="pills-nov-tab" data-toggle="pill" href="#pills-nov"
                    role="tab" aria-controls="pills-nov" aria-selected="false">NOV</a>
            </li>
            <li class="nav-item">
                <a class="nav-link s-fc-black" id="pills-dec-tab" data-toggle="pill" href="#pills-dec"
                    role="tab" aria-controls="pills-dec" aria-selected="false">DEC</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="pills-jan" role="tabpanel" aria-labelledby="pills-jan-tab">
                <div class="s-news-list-item s-btn-border p-1">
                    <div>Video: Stunning footage of snow leopard and her quadruplet cubs</div>
                    <div><img width="30px" src="imgs/icon-del.png"></div>
                </div>
            </div>
            <div class="tab-pane fade show active" id="pills-feb" role="tabpanel" aria-labelledby="pills-feb-tab">
                <div class="s-news-list-item s-btn-border p-1">
                    <div>Setting the line on transparency in tuna fishing</div>
                    <div><img width="30px" src="imgs/icon-del.png"></div>
                </div>
                <div class="s-news-list-item s-btn-border p-1">
                    <div>Setting the line on transparency in tuna fishing</div>
                    <div><img width="30px" src="imgs/icon-del.png"></div>
                </div>
                <div class="s-news-list-item s-btn-border p-1">
                    <div>How LED nets help sea turtles swim free</div>
                    <div><img width="30px" src="imgs/icon-del.png"></div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-mar" role="tabpanel" aria-labelledby="pills-mar-tab">
                <div class="s-news-list-item s-btn-border p-1">
                    <div>The human health and conservation connection</div>
                    <div><img width="30px" src="imgs/icon-del.png"></div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-apr" role="tabpanel" aria-labelledby="pills-apr-tab">
                <div class="s-news-list-item s-btn-border p-1">
                    <div>Support WWF with a monthly gift to help protect polar bears and other species.</div>
                    <div><img width="30px" src="imgs/icon-del.png"></div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-may" role="tabpanel" aria-labelledby="pills-may-tab">
                <div class="s-news-list-item s-btn-border p-1">
                    <div>Mountain gorilla numbers rise in a Central African protected forest</div>
                    <div><img width="30px" src="imgs/icon-del.png"></div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-jun" role="tabpanel" aria-labelledby="pills-jun-tab">
                <div class="s-news-list-item s-btn-border p-1">
                    <div>Two years after China bans elephant ivory trade, demand for elephant ivory is down</div>
                    <div><img width="30px" src="imgs/icon-del.png"></div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-jul" role="tabpanel" aria-labelledby="pills-jul-tab">
                <div class="s-news-list-item s-btn-border p-1">
                    <div>Wild pandas get a boost</div>
                    <div><img width="30px" src="imgs/icon-del.png"></div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-aug" role="tabpanel" aria-labelledby="pills-aug-tab">
                <div class="s-news-list-item s-btn-border p-1">
                    <div>Celebrating good news for India's tigers</div>
                    <div><img width="30px" src="imgs/icon-del.png"></div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-sep" role="tabpanel" aria-labelledby="pills-sep-tab">
                <div class="s-news-list-item s-btn-border p-1">
                    <div>Help Protect the Arctic Refuge</div>
                    <div><img width="30px" src="imgs/icon-del.png"></div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-oct" role="tabpanel" aria-labelledby="pills-oct-tab">
                <div class="s-news-list-item s-btn-border p-1">
                    <div>15 Brilliant Products Made from Recycled Ocean Plastics</div>
                    <div><img width="30px" src="imgs/icon-del.png"></div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-nov" role="tabpanel" aria-labelledby="pills-nov-tab">
                <div class="s-news-list-item s-btn-border p-1">
                    <div>After the blaze: Amazon community begins recovery following the fires</div>
                    <div><img width="30px" src="imgs/icon-del.png"></div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-dec" role="tabpanel" aria-labelledby="pills-dec-tab">
                <div class="s-news-list-item s-btn-border p-1">
                    <div>Help end the illegal trade of pangolin products</div>
                    <div><img width="30px" src="imgs/icon-del.png"></div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>