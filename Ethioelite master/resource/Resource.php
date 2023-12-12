<?php 
    $location="localhost";
    $username="root";
    $password="";
    $database_name="ethioelite";

    $select_free="SELECT * FROM `free-unit-ppt-resourses`";
    $select_all="SELECT * FROM `all-unit-ppt-resourses`";
    $select_single="SELECT * FROM `single-unit-ppt-resourses`";
    $select_department='SELECT * FROM `department`';
    $select_book='SELECT * FROM `books`';
    $select_video='SELECT * FROM `videos`';
    
    $link_to_database=mysqli_connect($location,$username,$password,$database_name);
    
    $select_free_qurey_free=mysqli_query($link_to_database,$select_free);
    $select_free_qurey_all=mysqli_query($link_to_database,$select_all);
    $select_free_qurey_single=mysqli_query($link_to_database,$select_single);
    $select_department_qurey=mysqli_query($link_to_database,$select_department);
    
    $select_book_qurey=mysqli_query($link_to_database,$select_book);
    $select_video_qurey=mysqli_query($link_to_database,$select_video);
    
    if(!$link_to_database){
        die ;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EthioElite</title>
    <link rel="shortcut icon" href="book_pile.jpg" type="image/x-icon">
    <link rel="stylesheet" href="Resource.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .links {
        position: absolute;
        text-align: right;
        bottom: 1%;
        width: 90%;
        margin: 0 auto;
    }

    .links a i {
        font-size: 2rem;
        margin-left: 2px;
    }

    header {
        padding-top: .1%;
        padding-bottom: .0%;
        background-color: var(--first-color--);
    }

    #nav {
        height: auto;
        width: 90%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 0 auto;
        position: relative;
    }

    .logo {
        color: var(--second-color--);
        font-size: 1.5rem;
        font-weight: bolder;
        font-family: 'Vladimir Script Regular';
        cursor: default;
    }

    .logo span {
        color: var(--forth-color--);
        font-family: '';
        font-size: 1.7rem;
    }

    #header-main-nav {
        background: var(--first-color--);
        z-index: 999;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 1%;
    }


    #header-menu-nav {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: .2rem;
    }

    #header-menu-nav ol {
        display: flex;
        list-style: none;
        gap: .4rem;

    }

    #header-menu-nav ol li i {
        font-size: 1.2rem;
        margin-right: .2rem;
        padding: .1rem;
    }

    #header-menu-nav ol li a {
        text-decoration: none;
        border-radius: 10px 10px 0 0;
        color: var(--third-color--);
        transition: all .8s;
        position: relative;
        font-size: var(--font-size-m--);
        z-index: 1;
        overflow: hidden;
    }

    #header-menu-nav ol li a::before {
        content: '';
        position: absolute;
        top: -1px;
        left: -4px;
        width: 100%;
        border-radius: 0px 0px 5px 5px;
        background: var(--second-color--);
        transform-origin: top;
        background: linear-gradient(to left, var(--third-color--), var(--forth-color--));
        transform: scaleY(0.0);
        z-index: -1;
        transition: all .4s;
    }

    #header-menu-nav ol li a:hover::before {
        transform: scaleY(1.3);
        height: 100%;
    }

    #header-menu-nav ol li a:hover {
        color: var(--fifth-color--);
    }


    .btn-login {
        padding: 1%;
        border: #0a3b5c 2px solid;
        background: var(--first-color--);
        font-size: var(--font-size-m--);
        font-weight: bold;
        transition: all .5s;
        position: relative;
        cursor: pointer;
        margin: 10px auto;
    }

    .btn-login:hover {
        border-color: var(--first-color--);
        background-color: var(--fifth-color--);
    }

    #open-close {
        display: none;

    }

    #free-ppt-resources,
    #payable-ppt-resources-all,
    #payable-ppt-resources-specific {
        grid-template-columns: repeat(auto-fit, 19%);
        gap: 1%;
    }

    #books-resources {
        grid-template-columns: repeat(auto-fit, 24.2%);
        justify-content: start;
        column-gap: 1%;
        row-gap: 10px;

    }

    #videos-resources {
        grid-template-columns: repeat(auto-fit, 33.333333%);
        justify-content: start;
        gap: 0;
    }

    .videos-image-continer {
        width: 100%;
    }

    .videos-image-continer img {
        width: 100%;
        height: 100%;
        border-radius: 10px;
        cursor: pointer;
        object-fit: fit;
        aspect-ratio: 3/1.75;
    }

    @media (max-width:950px) {

        #free-ppt-resources,
        #payable-ppt-resources-all,
        #payable-ppt-resources-specific {
            grid-template-columns: repeat(auto-fit, 24.25%);
        }

        #books-resources {
            grid-template-columns: repeat(auto-fit, 31.2%);
        }
    }

    @media (max-width:880px) {
        .tab-titles {
            font-size: 78%;
        }

        #free-ppt-resources,
        #payable-ppt-resources-all,
        #payable-ppt-resources-specific {
            grid-template-columns: repeat(auto-fit, 32%);
        }
    }

    @media (max-width:710px) {
        .tab-titles {
            font-size: 78%;
        }

        .search-form input {
            display: none;
        }

        #videos-resources {
            grid-template-columns: repeat(auto-fit, 49.5%);
            justify-content: start;
        }
    }

    @media (max-width:660px) {
        #open-close {
            display: block;
        }

        #close-menu {
            display: none;
        }

        #header-main-nav {
            width: 50%;
            background: red;
            position: absolute;
            flex-direction: column;
            top: 110%;
            right: 0px;
            z-index: 1000;
            /* text-align: center; */
            /* padding: 2%; */
            border-radius: 10px;
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;
            display: none;
        }

        #header-menu-nav ol {
            /* width: 100%; */
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* margin: 10px auto; */
            /* padding: 10px; */
            text-align: left;
        }

        #header-menu-nav ol li {
            display: inline-block;
            width: 120%;
            font-size: 1rem;
            padding: 10px;
        }

        #header-menu-nav i {
            font-size: var(--font-size-M--);
            margin-right: 5px;
            color: var(--second-color--);
            margin-left: 10px;
        }

        #free-ppt-resources,
        #payable-ppt-resources-all,
        #payable-ppt-resources-specific {
            grid-template-columns: repeat(auto-fit, 49.5%);
        }

        #books-resources {
            grid-template-columns: repeat(auto-fit, 48.2%);
        }
    }

    @media (max-width:550px) {
        .books-resources img {
            width: 100%;
            height: 80vh;
        }

        #free-ppt-resources,
        #payable-ppt-resources-all,
        #payable-ppt-resources-specific {

            grid-template-columns: repeat(auto-fit, 49%);
            /* padding-bottom: 0%; */
            width: 99%;
            /* margin: 0 auto; */
            column-gap: 2%;
            row-gap: 10px;

        }

        #videos-resources {
            grid-template-columns: repeat(auto-fit, 100%);
            justify-content: start;
            width: 90%;
            margin: 0 auto;
        }
    }

    @media (max-width:510px) {
        #dropDownList {
            position: relative;
            justify-content: space-between;
            align-items: center;
        }

        #tab {
            position: absolute;
            flex-direction: column;
            top: 110%;
            width: 300px;
            background-color: #1b4c5d;
            display: none;
            padding-top: 7%;
            padding-bottom: 10%;
            border-radius: 10px;
            z-index: 999;

        }

        .res {
            padding: .3%;
            display: flex;
            align-items: center;
        }

        .res i {
            color: var(--forth-color--);
        }

        .tab-titles {
            text-align: left;
            font-size: 1.1rem;
            background: none;
            border-radius: 0px;
            padding: 5% 2%;
            padding-left: 10%;
            cursor: pointer;
            border: none;
            border-bottom: 1.5px var(--first-color--) solid;
            color: #34eef1;

        }

        #dorpDownList-conti {
            padding: 0 1%;
            display: block;
        }

        #dorpDownList-conti #close {
            display: none;
        }

        .titles {
            font-size: var(--font-size-S--);
        }

        #tab i {
            margin-right: 10px;
        }

    }

    @media (max-width:410px) {

        #free-ppt-resources,
        #payable-ppt-resources-all,
        #payable-ppt-resources-specific {

            grid-template-columns: repeat(auto-fit, 100%);
            padding-bottom: 0%;
            width: 80%;
            margin: 0 auto;
        }

        #books-resources {
            grid-template-columns: repeat(auto-fit, 100%);
            width: 90%;
            margin: 0 auto;
        }
    }
    </style>

</head>

<body>
    <?php include '../components/header.php' ;?>

    <main id="continer">
        <section id="tab-bar">

            <div id="dropDownList">

                <div id="dorpDownList-conti">
                    <h2 id="res">resources</h2>
                    <h2 id="open">
                        <i class="fa fa-angle-down fa-1x"
                            style="color:#ffc107 font-size: 1.5rem; margin-left: 2px;"></i>
                    </h2>
                    <h2 id="close">
                        <i class="fa fa-solid fa-x" style="font-size: 1.5rem; margin-left: 2px;"></i>
                    </h2>
                </div>

                <div id="tab">
                    <h3 class="tab-titles active-link" id="powerPoint">
                        <i class="fa fa-solid fa-file-powerpoint"></i>
                        power Points
                    </h3>
                    <h3 class="tab-titles" id="Book">
                        <i class="fa fa-solid fa-book"></i>
                        Recommended Books
                    </h3>
                    <h3 class="tab-titles" id="Video">
                        <i class="fa fa-solid fa-video"></i>
                        Recommended Videos
                    </h3>
                </div>
                <div class="search">
                    <form action="" class="search-form">
                        <input type="search" name="search_box" placeholder="search courses..." maxlength="100">
                        <button type="submit" class="fa fa-search" name="search_box"></button>
                    </form>
                </div>

            </div>

        </section>
        <script>
        console.log("ghjkh");
        var powerPoint = document.getElementById("power-point");
        var books = document.getElementById('books');
        var videos = document.getElementById('videos');
        var tabLinks = document.getElementsByClassName('tab-titles');

        document.getElementById("open").addEventListener("click", function() {
            document.getElementById('tab').style.display = "block";
            document.getElementById("open").style.display = "none";
            document.getElementById("close").style.display = "inline";
        });
        document.getElementById("close").addEventListener("click", function() {
            document.getElementById('tab').style.display = "none";
            document.getElementById("open").style.display = "inline";
            document.getElementById("close").style.display = "none";
        });
        document.getElementById("powerPoint").addEventListener("click", function() {
            closeResourcePart();
            powerPoint.style.display = 'block';
            tabLinks[0].classList.add('active-link');
        });
        document.getElementById('Book').addEventListener("click", function() {
            closeResourcePart();
            books.style.display = 'block';
            tabLinks[1].classList.add('active-link');
        });
        document.getElementById('Video').addEventListener("click", function() {
            closeResourcePart();
            videos.style.display = 'block';
            tabLinks[2].classList.add('active-link');
        });

        function closeResourcePart() {
            powerPoint.style.display = 'none';
            books.style.display = 'none';
            videos.style.display = 'none';
            tabLinks[0].classList.remove('active-link');
            tabLinks[1].classList.remove('active-link');
            tabLinks[2].classList.remove('active-link');
        }
        </script>
        <section id="power-point">
            <section id="ppt-continer">
                <h2 class="titles">
                    Free Resources
                </h2>

                <div id="free-ppt-resources">
                    <?php while($data=mysqli_fetch_assoc($select_free_qurey_free)){?>
                    <div class="free-unit-ppt-resources">
                        <div class="free-unit-ppt-image-continer">
                            <img src="../uploaded_files/<?= $data['image']; ?>" alt="image">
                            <div class="des">
                                <div class="course-name">
                                    <h3>
                                        <?php echo $data['course_name']; ?>
                                    </h3>
                                    <h3>
                                        Chaprter : <?php echo $data['course_name']; ?>
                                    </h3>
                                    <h3>
                                        <?php echo $data['price']; ?>
                                    </h3>
                                </div>
                            </div>
                            <div class="links">
                                <a href="../uploaded_files/<?=$data['file'];?>">
                                    <i class="fa fa-light fa-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <h2 class=" titles">
                    Payable Resources(All Unit At All)
                </h2>

                <div id="payable-ppt-resources-all">
                    <?php while($data=mysqli_fetch_assoc($select_free_qurey_all)){?>
                    <div class="all-unit-ppt-resources">
                        <div class="all-unit-ppt-image-continer">
                            <img src="../uploaded_files/<?= $data['image']; ?>" alt="image">
                            <div class="des">
                                <div class="course-name">
                                    <h3>
                                        <?php echo  $data['course_name']; ?>
                                    </h3>
                                    <h3>All unit</h3>
                                    <h3>
                                        <?php echo $data['price']; ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <h3>
                                Credit hour : <?php echo $data['price']; ?>
                            </h3>
                            <h3>
                                Ectc : <?php echo $data['price']; ?>
                            </h3>
                            <h3>
                                No exam in exit : <?php echo $data['price']; ?>
                            </h3>
                            <!-- <div class="links">
                                <a href="\Ethioelite master\login\test.gif" download>
                                    <i class="fa fa-solid fa-download"></i>
                                </a>
                            </div> -->
                        </div>

                    </div>
                    <?php } ?>
                </div>

                <h2 class="titles">
                    Payable Resourcess(on Spacific unit)
                </h2>

                <div id="payable-ppt-resources-specific">

                    <?php while($data=mysqli_fetch_assoc($select_free_qurey_single)){?>
                    <div class="specific-unit-ppt-resources">
                        <div class="specific-unit-ppt-image-continer">

                            <img src="../uploaded_files/" alt="image">
                            <div class="des">
                                <div class="course-name">
                                    <h3>
                                        <?php echo $data['course_name']; ?>
                                    </h3>
                                    <h3>
                                        Chaprter : <?php echo $data['Chaprter']; ?>
                                    </h3>
                                    <h3>
                                        <?php echo $data['price']; ?>
                                    </h3>
                                </div>
                            </div>
                            <div class="links">
                                <a href="../uploaded_files/<?=$data['file'];?>">
                                    <i class="fa fa-light fa-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </section>
        </section>

        <section id="books">
            <!-- https://www.dbooks.org/ -->
            <div id="books-resources">
                <?php while($data=mysqli_fetch_assoc($select_book_qurey)){?>
                <div class="books-image-continer">
                    <a href="<?= $data['book-link']; ?>" download>
                        <img src="<?= $data['photo-link']; ?>" alt="image">
                    </a>
                </div>
                <?php } ?>
            </div>
        </section>

        <section id="videos">
            <div id="videos-resources">
                <?php while($data=mysqli_fetch_assoc($select_video_qurey)){?>
                <div class="videos-image-continer">
                    <h3 class="links">
                        <a href="<?=$data['video-link']?>" target="_blank">
                            <img src="<?=$data['photo-link']?>" alt=" image">
                        </a>
                    </h3>
                    <div class="subject">
                        <?php echo $data['course_name'];?>
                    </div>
                </div>

                <?php } ?>
        </section>

    </main>
    <script src=" Resource.js"></script>
</body>

</html>