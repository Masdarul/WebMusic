<!DOCTYPE html>
<html lang="ID">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Music in Japan</title>
    <link rel="icon" type="image/x-icon" href="icon.png">
</head>

<body>
<header>
    <div class="menu_side">
        <h1>Daftar Putar</h1>
        <div class="playlist">
            <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i> Daftar Putar</h4>
            <h4 ><span></span><i class="bi bi-music-note-beamed"></i> Terakhir Mendengarkan</h4>
            <h4 ><span></span><i class="bi bi-music-note-beamed"></i> Direkomendasikan</h4>
        </div>
        <div class="menu_song">
            <li class="songItem">
                <span>01</span>
                <img src="img/1.jpg" alt="Yoasobi - Idol">
                <h5>
                    On My Way
                    <div class="subtitle">Alan Walker</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
            </li>
            <li class="songItem">
                <span>02</span>
                <img src="img/1.jpg" alt="Alan">
                <h5>
                    On My Way
                    <div class="subtitle">Alan Walker</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
            </li>
            <li class="songItem">
                <span>03</span>
                <img src="img/1.jpg" alt="Alan">
                <h5>
                    On My Way
                    <div class="subtitle">Alan Walker</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
            </li>
            <li class="songItem">
                <span>04</span>
                <img src="img/1.jpg" alt="Alan">
                <h5>
                    On My Way
                    <div class="subtitle">Alan Walker</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
            </li>
            <li class="songItem">
                <span>05</span>
                <img src="img/1.jpg" alt="Alan">
                <h5>
                    On My Way
                    <div class="subtitle">Alan Walker</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
            </li>
            <li class="songItem">
                <span>06</span>
                <img src="img/1.jpg" alt="Alan">
                <h5>
                    On My Way
                    <div class="subtitle">Alan Walker</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
            </li>
        </div>
    </div>


    <div class="song_side">
        <nav>
            <ul>
                <li>Discover <span></span></li>
                <li>KOLEKSI</li>
                <li>RADIO</li>
            </ul>
            <div class="search">
                <i class="bi bi-search"></i>
                <input type="text" placeholder="Search Music...">
            </div>
            <div class="user">
                <img src="img/profil.jpg" alt="User" title="Profil">
                <a href="logout.php" title="Logout"><i class="bi bi-door-closed-fill"></i></a>
            </div>
        </nav>
        <div class="content">
            <h1>LiSA</h1>
            <details>
                <summary>Tentang</summary>
                <p>Risa Oribe atau lebih dikenal sebagai LiSA, adalah seorang penyanyi dan penulis lagu asal Jepang. Ia terinspirasi menjadi musisi di awal hidupnya, dan memulai karier musiknya sebagai vokalis band indie Chucky.</p>
            </details>
            <div class="buttons">
                <button>PLAY</button>
                <button>FOLLOW</button>
            </div>
        </div>
        <div class="popular_song">
            <div class="h4">
                <h4>Popular Song</h4>
                <div class="btn_s">
                    <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                    <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="pop_song">
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                    </div>
                    <h5>On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
                        <!-- change All id  -->
                    </div>
                    <h5>On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                    </div>
                    <h5>On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                    </div>
                    <h5>On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                    </div>
                    <h5>On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                    </div>
                    <h5>On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                    </div>
                    <h5>On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
                    </div>
                    <h5>On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
                    </div>
                    <h5>On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
            </div>
        </div>
        <div class="popular_artists">
            <div class="h4">
                <h4>Popular Artists</h4>
                <div class="btn_s">
                    <i id="left_scrolls" class="bi bi-arrow-left-short"></i>
                    <i id="right_scrolls" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="item">
                <li>
                   <a href="LiSA.html"><img src="img/LiSA.jpg" alt="LiSA" title="LiSA"></a>
                </li>
                <li>
                   <a href="ikura.html"> <img src="img/Ikura.jpg" alt="Lilas Ikura" title="Lilas Ikura"></a>
                </li>
                <li>
                    <a href="milet.html"> <img src="img/Milet.jpg" alt="Milet" title="Milet"> </a>
                </li>
                <li>
                    <a href="Yoasobi.html"> <img src="img/Yoasobi.jpg" alt="Yoasobi" title="Yoasobi"> </a>
                </li>
                <li>
                    <a href="Kenshi_Yonezu.html">  <img src="img/kenshi_yonezu.jpg" alt="kenshi yonezu" title="kenshi yonezu"> </a>
                </li>
                <li>
                    <a href="Adiue.html">  <img src="img/Adieu.jpg" alt="Adieu" title="Adieu"> </a>
                </li>
                <li>
                    <a href="Juju.html">  <img src="img/Juju.jpg" alt="Juju" title="Juju"> </a>
                </li>
                <li>
                    <a href="MWAM.html">   <img src="img/MWAM.png" alt="MWAM" title="MWAM"> </a> 
                </li>
                <li>
                    <a href="OKR.html">  <img src="img/One_Ok_Rock.jpg" alt="One Ok Rock" title="One Ok Rock"> </a>
                </li>
                <li>
                    <a href="Asca.html">  <img src="img/Asca.jpg" alt="Asca" title="Asca"></a>
                </li>
                <li>
                    <a href="Hikaru_Utada.html">  <img src="img/Hikaru_utada.jpg" alt="Hikaru Utada" title="Hikaru Utada"> </a>
                </li>
                <li>
                    <a href="dism.html">   <img src="img/Dindism.jpg" alt="Official HIGE DANdism" title="Official HIGE DANdism"> </a>
                </li>
                <!-- change all img  -->
            </div>
        </div>
    </div>


    <div class="master_play">
        <div class="wave">
            <div class="wave1"></div>
            <div class="wave1"></div>
            <div class="wave1"></div>
        </div>
        <img src="img/Live_Frist_love.jpg" alt="Hikaru" id="poster_master_play">
        <h5 id="title">First Love (Live 2023)<br>
            <div class="subtitle">Hikaru Utada</div>
        </h5>
        <div class="icon">
            <i class="bi shuffle bi-music-note-beamed">next</i>
            <i class="bi bi-skip-start-fill" id="back"></i>
            <i class="bi bi-play-fill" id="masterPlay"></i>
            <i class="bi bi-skip-end-fill" id="next"></i>
            <a href="" download id="download_music"><i class="bi bi-download"></i></a>
        </div>
        <span id="currentStart">0:00</span>
        <div class="bar">
            <input type="range" id="seek" min="0" value="0" max="100">
            <div class="bar2" id="bar2"></div>
            <div class="dot"></div>
        </div>
        <span id="currentEnd">0:00</span>

        <div class="vol">
            <i class="bi bi-volume-down-fill" id="vol_icon"></i>
            <input type="range" id="vol" min="0" value="30" max="100">
            <div class="vol_bar"></div>
            <div class="dot" id="vol_dot"></div>
        </div>
    </div>
</header>
    <script src="app.js"></script>
</body>

</html>