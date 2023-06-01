const songs2 = [
    {
        id:'1',
        songName:` Gurenge<br>
        <div class="subtitle">LiSA</div>`,
        poster: "../img/LISA/1.jpg"
    },
    {
        id:'2',
        songName:` Homura <br>
        <div class="subtitle">LiSA</div>`,
        poster: "../img/LISA/2.jpg"
    },
    // all object type 
    {
        id:"3",
        songName: `Saikai <br><div class="subtitle"> LiSA Feat Uru</div>`,
        poster: "../img/LISA/3.jpg",
    },
    {
        id:"4",
        songName: `Adamas <br><div class="subtitle">LiSA</div>`,
        poster: "../img/LISA/4.jpg",
    },
    {
        id:"5",
        songName: `Gurenge (The First Take) <br><div class="subtitle">LiSA</div>`,
        poster: "../img/LISA/5.jpg",
    },
    {
        id:"6",
        songName: `Yu-Ke <br><div class="subtitle">LiSA</div>`,
        poster: "../img/LISA/6.jpg",
    },
    {
        id:"7",
        songName: `Isseino Kassai <br><div class="subtitle">LiSA</div>`,
        poster: "../img/LISA/7.jpg",
    },
    {
        id:"8",
        songName: `Catch The Moment (The First Take) <br><div class="subtitle">LiSA</div>`,
        poster: "../img/LISA/8.jpg",
    },
    {
        id:"9",
        songName: `ASH <br><div class="subtitle">LiSA</div>`,
        poster: "../img/LISA/9.jpg",
    },
    {
        id:"10",
        songName: `Thrill,Risk,Heartless <br><div class="subtitle">LiSA</div>`,
        poster: "../img/LISA/10.jpg",
    },
    {
        id:"11",
        songName: `Surprise <br><div class="subtitle">LiSA</div>`,
        poster: "../img/LISA/11.jpg",
    },
    {
        id:"12",
        songName: `Adamas (LADYBUG) <br><div class="subtitle">LiSA</div>`,
        poster: "../img/LISA/12.jpg",
    },
    {
        id:"13",
        songName: `Dawn (LADYBUG) <br><div class="subtitle">LiSA</div>`,
        poster: "../img/LISA/13.jpg",
    },
    {
        id:"14",
        songName: `Pyschedelic Drive <br><div class="subtitle">LiSA</div>`,
        poster: "../img/LISA/14.jpg",
    },
    {
        id:"15",
        songName: `Cancellation <br><div class="subtitle">LiSA</div>`,
        poster: "../img/LISA/15.jpg",
    },
    {
        id:"16",
        songName: `Viva La Midala <br><div class="subtitle">LiSA</div>`,
        poster: "../img/LISA/16.jpg",
    },
    {
        id:"17",
        songName: `Blue Moon (364 Joker) <br><div class="subtitle">LiSA</div>`,
        poster: "../img/LISA/17.jpg",
    },
]

Array.from(document.getElementsByClassName('songItem')).forEach((element, i)=>{
    element.getElementsByTagName('img')[0].src = songs2[i].poster;
    element.getElementsByTagName('h5')[0].innerHTML = songs2[i].songName;
})