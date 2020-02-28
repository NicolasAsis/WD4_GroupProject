<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WWF</title>

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
    <!-- <script src="jquery-3.4.1.min.js"></script> -->
</head>

<body>
    <!-- navbar -->
    <nav class="navbar ticky-top bg-light bg-white">
        <div class="s-nav-left-collapse-m s-nav-left-collapse-s s-nav-left s-nav-left-collapse-s-disappear">
            <a class="mr-3">Our work</a>
            <a class="mr-3">Species</a>
            <a class="mr-3">Places</a>
            <input class="s-input-icon s-searchbar mr-3" placeholder="Search">
        </div>
        <div class="s-nav-left-collapse-m s-nav-left-collapse-s s-nav-left collapse navbar-collapse"
            id="navbarNavAltMarkup">
            <a class="mr-3">Our work</a>
            <a class="mr-3">Species</a>
            <a class="mr-3">Places</a>
            <input class="s-input-icon s-searchbar mr-3" placeholder="Search">

            <div class="s-nav-right-collapse-m s-nav-right-collapse-s s-nav-right">
                <button class="s-btn s-btn-orange pl-3 pr-3 mr-2">Donate</button>
                <button class="s-btn s-btn-sorange pl-3 pr-3 mr-2">Adopt</button>
                <a href="login-signup.php" class=" mt-2 "><button
                        class="s-btn-border pl-3 pr-3 mr-2 font-weight-bold">Login</button></a>
            </div>
        </div>
        <a href="./index.php"><img class="mr-5 s-logo-collapse-m s-logo-collapse-s" width="60px"
                src="imgs/logo-s.png"></a>
        <button class="navbar-toggler s-ham" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <img width="28px" src="imgs/icon-ham.png">
        </button>
        <div class="s-nav-right-collapse-m s-nav-right-collapse-s s-nav-right s-nav-right-collapse-s-disappear">
            <button class="s-btn s-btn-orange pl-3 pr-3 mr-2">Donate</button>
            <button class="s-btn s-btn-sorange pl-3 pr-3 mr-2">Adopt</button>
            <a href="login-signup.php" class="pl-3 pr-3"><button
                    class="s-btn-border pl-3 pr-3  font-weight-bold">Login</button></a>
        </div>
    </nav>

    <!-- Banner -->
    <div class="s-banner">
    </div>
    <div>
        <h1>A NEW APPROACH TO INFRASTRUCTURE</h1>
        <span class="s-subtitle">Changing how we build for people and nature in a rapidly warming world</span>
    </div>

    <!-- News -->
    <div class="s-titletag">
        <div class="s-hordivider"></div>
        <h3>News</h3>
        <div class="s-hordivider"></div>
    </div>

    <!-- For demo -->
    <div class="s-news container">
        <div class="s-t1 mt-3 card">
            <div class="s-news-thumb-title">Video: Stunning footage of snow leopard and her quadruplet cubs</div>
        </div>
        <div class="s-t2 mt-3 card">
            <div class="s-news-card-title">Tell Congress to
                Prioritize Climate</div>
            <div class="s-news-card-subtitle">We need a 100% clean energy economy. Contact your Member of Congress
                today.</div>
            <div class="s-actnow">ACT NOW</div>
        </div>
        <div class="s-t3 mt-3 card">
            <div class="s-news-thumb-title">Support WWF with a monthly gift to help protect polar bears and other
                species.</div>
        </div>
    </div>

    <div class="s-news container">
        <div class="s-t4 mt-3 card">
            <div class="s-news-thumb-title">Setting the line on transparency in tuna fishing</div>
        </div>
        <div class="s-t5 mt-3 card">
            <div class="s-news-thumb-title">The human health and conservation connection</div>
        </div>
    </div>

    <div class="s-news container mt-3">
        <button type="button" class="s-btn s-btn-border s-btn-full s-btn-green p-2 mr-2" data-toggle="modal"
            data-target="#exampleModal" data-whatever="@mdo">Add News</button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adding News</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method='POST'>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Title</label>
                            <input type="text" class="form-control" id="recipient-name" name="title">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Image URL</label>
                            <textarea class="form-control" id="message-text" name="imgUrl"></textarea>
                        </div>
                        <button type="submit" class="s-btn s-btn-border p-2 s-btn-orange" name="addPost">Add News</button>
                    </form>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="s-btn s-btn-border p-2 btn-secondary"
                        data-dismiss="modal">Close</button>
                    <button type="button" class="s-btn s-btn-border p-2 s-btn-orange">Add News</button>
                </div> -->
            </div>
        </div>
    </div>


    <!-- From database -->
   
        <!-- <div class="s-news-wrap s-sm-wrap container">
            <div class="mt-3 card" style="
                background-image: url(https://www.petmd.com/sites/default/files/puppy-potty-training-388719256.jpg);
                width: 100%;
                height: 350px;
                background-size: cover;
                border-radius: 3px;
                position: relative;
                margin-right:10px;
            ">
                <div class="s-news-thumb-title">
                    <div>$title</div>
                    <button class='s-btn-del'><img width='30px' src="./imgs/icon-del.png"></button>
                </div>
            </div>
        </div> -->

        <?php

            $conn = new mysqli("localhost", "root", "root", "webdev4_assignment");
            $sql = "SELECT * FROM news";
    
            $table = mysqli_query($conn,$sql);

            while($row=mysqli_fetch_array($table)){
                echo '
                    <div class="s-news-wrap s-sm-wrap container">
                    <div class="mt-3 card" style="
                        background-image: url('.$row['news_imgUrl'].');
                        width: 100%;
                        height: 350px;
                        background-size: cover;
                        border-radius: 3px;
                        position: relative;
                        margin-right:10px;
                    ">
                        <div class="s-news-thumb-title">
                            <div>'.$row['news_title'].'</div>
                            <form method="POST">
                            <button class="s-btn-del"><img width="30px" src="./imgs/icon-del.png" name="delete" onclick="DeleteNews('.$row['id'].')"></button>
                            </form>
                        </div>
                    </div>
                    </div>
                ';
            }


             // if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //     // alert("Hello");
            //     if(isset($_POST['delete'])){
            //         $username = $_POST['username'];
            //         $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
            
            //         // echo $username;
            //         if ($conn->connect_error) {
            //             die("Connection failed: " . $conn->connect_error);
            //         }
            
            //         $sql = "INSERT INTO users(username,password) VALUES ('$username','$password')";
            
            //         if ($conn->query($sql) === TRUE) {
            //             echo "<script type='text/javascript'>alert('New account created successfully');</script>";
            //             // console.log("New record created successfully");
            //             // alert("New record created");
            //             exit();
            //         } else {
            //             echo "Error: " . $sql . "<br>" . $conn->error;
            //         }
            
            //     }
            // }
        ?>
  
    <!-- Volunteer -->
    <div class="s-titletag ">
        <div class="s-hordivider"></div>
        <h3>Volunteer</h3>
        <div class="s-hordivider"></div>
    </div>

    <div class="mt-3 mb-5 s-volunteer container">
    </div>

    <!-- footer -->
    <footer>
        <div class="s-footer">
            <div class="s-titletag">
                <h3 style="color: white; margin-top: -30px;">CONTACT US</h3>
                <div class="s-hordivider-orange"></div>
            </div>
            <form method='POST'>
            <div class="s-form">
                <div class="mr-5">
                    <div class="s-form-left" style="color: white;">
                        <div class="s-form-item">
                            <label>Name</label>
                            <input class="s-no-outline" placeholder="Will" name="firstName" type="text">
                         </div>
                    </div>
                    <div class="s-form-left" style="color: white;">
                        <div class="s-form-item">
                            <label>Email</label>
                            <input class="s-no-outline" placeholder="will.s@email.com" name='email' type='text'>
                        </div>
                    </div>
                </div>
                <div class="s-desc">
                    <textarea placeholder="Write something" name='msg' type='text'></textarea>
                </div>
            </div>

            <div class="mt-1 pb-4">
                <button class="s-btn s-btn-orange s-btn-full" type='submit' name='contactBut'>SEND MESSAGE</button>
            </div>
            </form>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="<?php echo $url?>/script.js"></script>
    <script> 
        function DeleteNews(postId) {
        // $.ajax({
        //     type:"POST",
        //     url:"delete.php",
        //     data:{"id":postId},
        //     success:function(html) {
        //         alert(html);
        //     }
        // });
        // return false;

        // alert("Hi");
        // alert(postId);

        var info = new FormData();
        info.append("postId",postId);

        var postData = new XMLHttpRequest();
        
        postData.open("POST", "./deletePost.php", true);
        postData.send(info);
        
    }
    </script>
 
</body>

</html>

<?php
    include "./add-post.php";
    include "./contact.php";