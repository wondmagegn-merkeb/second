<header>
    <nav id="nav">
        <p class="logo">Ethio<span>Elite</span></p>
        <div id="header-main-nav">
            <div id="header-menu-nav">
                <ol>
                    <li>
                        <a href="\Ethioelite master\ethioeli-master\about us.php">
                            <i class="fa fa-solid fa-address-card">
                                &nbsp;&nbsp;About
                            </i>
                        </a>
                    </li>
                    <li>
                        <a href="\Ethioelite master\chat boc\chatbox.php">
                            <i class="fa fa-solid fa-comment">
                                &nbsp;&nbsp;chat
                            </i>
                        </a>
                    </li>
                    <li>
                        <a href="\Ethioelite master\ethioeli-master\Contact us.php">
                            <i class="fa fa-solid fa-address-book">
                                &nbsp;&nbsp;Contact
                            </i>
                        </a>
                    </li>
                    <li>
                        <a href="\Ethioelite master\resource\Resource.php">
                            <i class="fa fa-solid fa-file">
                                &nbsp;&nbsp;resources
                            </i>
                        </a>
                    </li>

                </ol>
            </div>
            <div>
                <button class="btn-login">
                    <a href="\Ethioelite master\ethioeli-master\index.php">
                        Logout
                    </a>
                </button>
            </div>
        </div>
        <div id="open-close">
            <h2 id="close-menu">
                <i class="fa-solid fa-xmark" style="font-size: 1.5rem; margin-left: 2px;">X</i>
            </h2>
            <h2 id="open-menu">
                <i class="fa fa-bars" style="font-size: 1.5rem; margin-left: 2px;"></i>
            </h2>
        </div>
    </nav>
</header>
<style>
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
    grid-template-columns: repeat(auto-fit, 33%);
    justify-content: start;
    gap: 0.3%;
}

.videos-image-continer {
    width: 100%;
    height: 90%;
}

#videos-resources .subject {
    font-size: 1.5rem;
    color: var(--fifth-color--);
    width: 100%;
    margin: 0 auto;
    border-radius: 10px;
    border: 2px var(--forth-color--) solid;
    padding-left: 5%;
    /* margin-bottom: 15px; */
}

.videos-image-continer .links {
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

<script>
document.getElementById("open-menu").addEventListener("click", function() {
    document.getElementById('header-main-nav').style.display = "block";
    document.getElementById("open-menu").style.display = "none";
    document.getElementById("close-menu").style.display = "block";
});

document.getElementById("close-menu").addEventListener("click", function() {

    document.getElementById('header-main-nav').style.display = "none";
    document.getElementById("open-menu").style.display = "block";
    document.getElementById("close-menu").style.display = "none";
});
</script>