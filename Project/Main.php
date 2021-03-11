<!DOCTYPE html>
<html lang="en">
<head>
  <title>ツキアカリ</title>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
.filterDiv {
  float: left;
  background-color: #2196F3;
  color: #ffffff;
  width: 100px;
  line-height: 100px;
  text-align: center;
  margin: 2px;
  display: none;
}

.show {
  display: block;
}

.container1 {
  margin-top: 20px;
  overflow: hidden;
}

/* Style the buttons */

</style>
<link href="jquery-sakura.css" rel="stylesheet" type="text/css">
</head>
<body>

  <?php
 include("Nav.php");
 ?>

<div class="jumbotron text-center" style="margin-bottom:0" id="a">
  <div class="container">
  <marquee from="left" direction="right" height="100px" scrollamount="20"><h1 class="text-primary">ツキアカリ Cosplay Shop</h1></marquee>
</div>
  <h2 class="text-dark">Welocome to Tsukiakari Cosplay Shop.For more info, please follow us on Facebook @Tsukiakari CosplayUwU</h2> 
  
  </div>
&nbsp;
 <?php
    include("Carousel.php");
  ?>
  <?php
   include("sakura.htm")
  ?>
  <?php
  include("scroll.php");
 ?>


<div class="container" style="margin-top:30px" >
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3>Shop For</h3>
      <p>More Categories</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <form class="form-inline" action="/action_page.php" >
              <input class="form-control col-sm-6" type="text" placeholder="Search">
                  <button class="btn btn-success" type="submit">Search</button>
  </form>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <button class="btn-primary col-sm" onclick="filterSelection('all')"> Show all</button>
        </li>
        <li class="nav-item">
            <button class="btn-primary col-sm" onclick="filterSelection('cars')"> Cars</button>
        </li>
        <li class="nav-item">
          <button class="btn-primary col-sm" onclick="filterSelection('animals')"> Animals</button>
        </li>
        <li class="nav-item">
          <button class="btn-primary col-sm" onclick="filterSelection('fruits')"> Fruits</button>
        </li>
        <li class="nav-item">
           <button class="btn-primary col-sm" onclick="filterSelection('colors')"> Colors</button>
        </li>
        <li class="nav-item">
           <button class="btn-primary col-sm" onclick="filterSelection('shoes')"> Shoes</button>
        </li>
      </ul>
      <hr class="d-sm-none">
  </div>
    <div class="col-sm-8">
      <h2>Darling in the Franxx</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div ><a href="images/zerotwo.jpg"><img src="images/zerotwo.jpg" width="auto" height="200px;"></a></div>
      <p></p>
      <p>Darling in the Franxx (Japanese: ダーリン・イン・ザ・フランキス Hepburn: Dārin In Za Furankisu), abbreviated as DarliFra (ダリフラ DariFura),[6] is a 2018 Japanese animated science fiction romance television series produced by CloverWorks and animated by CloverWorks and Trigger that premiered on January 13, 2018.[7][8] The series was announced at Trigger's Anime Expo 2017 panel in July 2017.[9] A manga adaptation by Kentaro Yabuki and another four-panel comic strip manga began serialization on January 14, 2018.[10]<a href="">see more.</a></p>
      <div class="container1" style="overflow: hidden;">
          <div class="filterDiv cars">BMW</div>
          <div class="filterDiv colors fruits">Orange</div>
          <div class="filterDiv cars">Volvo</div>
          <div class="filterDiv colors">Red</div>
          <div class="filterDiv cars animals">Mustang</div>
          <div class="filterDiv colors">Blue</div>
          <div class="filterDiv animals">Cat</div>
          <div class="filterDiv animals">Dog</div>
          <div class="filterDiv fruits">Melon</div>
          <div class="filterDiv fruits">Kiwi</div>
          <div class="filterDiv fruits">Banana</div>
          <div class="filterDiv fruits">Lemon</div>
          <div class="filterDiv animals">Cow</div>
          <div class="filterDiv shoes">addidas</div>
      </div>
      <br>
      <h2>The Untamed</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div ><a href="images/TU.png"><img src="images/TU.png" width="auto" height="200px;"></a></div>
      <p></p>
      <p>The Untamed (Chinese: 陈情令; pinyin: Chén Qíng Lìng) is a 2019 Chinese television series based on the BL xianxia novel Mo Dao Zu Shi by Mo Xiang Tong Xiu, starring Xiao Zhan and Wang Yibo.[1] The series follows the adventures of two cultivators who travel to solve a series of murder mysteries, eventually finding and defeating the true culprit.[2] It aired in China on Tencent Video from June 27, 2019 to August 20, 2019.[3][4]</p>
      <div class="container1" style="overflow: hidden;">
          <div class="filterDiv cars">BMW</div>
          <div class="filterDiv colors fruits">Orange</div>
          <div class="filterDiv cars">Volvo</div>
          <div class="filterDiv colors">Red</div>
          <div class="filterDiv cars animals">Mustang</div>
          <div class="filterDiv colors">Blue</div>
          <div class="filterDiv animals">Cat</div>
          <div class="filterDiv animals">Dog</div>
          <div class="filterDiv fruits">Melon</div>
          <div class="filterDiv fruits">Kiwi</div>
          <div class="filterDiv fruits">Banana</div>
          <div class="filterDiv fruits">Lemon</div>
          <div class="filterDiv animals">Cow</div>
          <div class="filterDiv shoes">addidas</div>
      </div>
          <br>
          <h2>Demon Slayer: Kimetsu no Yaiba </h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div><a href="images/DS.jpg"><img src="images/DS.jpg" width="auto" height="200px;"></a></div>
      <p></p>
      <p>Demon Slayer: Kimetsu no Yaiba (Japanese: 鬼滅の刃 Hepburn: Kimetsu no Yaiba) is a Japanese manga series written and illustrated by Koyoharu Gotōge. It has been serialized in Weekly Shōnen Jump since February 2016, with its chapters collected in 17 tankōbon volumes as of October 2019. The series is published in English by Viz Media and simulpublished by Shueisha in English and Spanish on their Manga Plus platform.<a href="">see more.</a></p>
      <div class="container1" style="overflow: hidden;">
          <div class="filterDiv cars">BMW</div>
          <div class="filterDiv colors fruits">Orange</div>
          <div class="filterDiv cars">Volvo</div>
          <div class="filterDiv colors">Red</div>
          <div class="filterDiv cars animals">Mustang</div>
          <div class="filterDiv colors">Blue</div>
          <div class="filterDiv animals">Cat</div>
          <div class="filterDiv animals">Dog</div>
          <div class="filterDiv fruits">Melon</div>
          <div class="filterDiv fruits">Kiwi</div>
          <div class="filterDiv fruits">Banana</div>
          <div class="filterDiv fruits">Lemon</div>
          <div class="filterDiv animals">Cow</div>
          <div class="filterDiv shoes">addidas</div>
      </div>
          <br>
      <h2>MoDaoZuShi</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div><a href="images/tu2.webp"><img src="images/tu2.webp" width="auto" height="200px;"></a></div>
      <p></p>
      <p>Mo Dao Zu Shi (Chinese: 魔道祖师; pinyin: Mó Dào Zǔ Shī; literally: 'Grandmaster of Demonic Cultivation') is a donghua series aired in 2018 and 2019, based on the BL novel of the same name written by Mo Xiang Tong Xiu (Chinese: 墨香铜臭). It is produced by Tencent Penguin Pictures and B.C May Pictures, and created by G.CMay Animation & Film. The series depicts a fictional Xianxia world where humans attempt to cultivate to a state of immortality, known as Xian (Chinese: 仙).[1] The protagonist of the series, Wei Wuxian, due to certain circumstances, deviated from the conventional cultivation path to Xian, and eventually created Mo Dao (the Demonic Path), which is why this series is often unofficially translated by fan communities as Grandmaster of Demonic Path/Cultivation, or The Founder of Diabolism.[2]<a href="">see more.</a></p>
      <div class="container1" style="overflow: hidden;">
          <div class="filterDiv cars">BMW</div>
          <div class="filterDiv colors fruits">Orange</div>
          <div class="filterDiv cars">Volvo</div>
          <div class="filterDiv colors">Red</div>
          <div class="filterDiv cars animals">Mustang</div>
          <div class="filterDiv colors">Blue</div>
          <div class="filterDiv animals">Cat</div>
          <div class="filterDiv animals">Dog</div>
          <div class="filterDiv fruits">Melon</div>
          <div class="filterDiv fruits">Kiwi</div>
          <div class="filterDiv fruits">Banana</div>
          <div class="filterDiv fruits">Lemon</div>
          <div class="filterDiv animals">Cow</div>
          <div class="filterDiv shoes">addidas</div>
      </div>
  <br>
      <h2>Naruto</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div><a href="images/naruto.jpg"><img src="images/naruto.jpg" width="auto" height="200px;"></a></div>
      <p></p>
      <p>Naruto (ナルト) is a Japanese manga series written and illustrated by Masashi Kishimoto. It tells the story of Naruto Uzumaki, a young ninja who seeks to gain recognition from his peers and also dreams of becoming the Hokage, the leader of his village. The story is in two parts, the first set in Naruto's pre-teen years, and the second in his teens. The series is based on two one-shot manga by Kishimoto: Karakuri (1995), which earned Kishimoto an honorable mention in Shueisha's monthly Hop Step Award the following year, and Naruto (1997).<a href="">see more.</a></p>
      <div class="container1" style="overflow: hidden;">
          <div class="filterDiv cars">BMW</div>
          <div class="filterDiv colors fruits">Orange</div>
          <div class="filterDiv cars">Volvo</div>
          <div class="filterDiv colors">Red</div>
          <div class="filterDiv cars animals">Mustang</div>
          <div class="filterDiv colors">Blue</div>
          <div class="filterDiv animals">Cat</div>
          <div class="filterDiv animals">Dog</div>
          <div class="filterDiv fruits">Melon</div>
          <div class="filterDiv fruits">Kiwi</div>
          <div class="filterDiv fruits">Banana</div>
          <div class="filterDiv fruits">Lemon</div>
          <div class="filterDiv animals">Cow</div>
          <div class="filterDiv shoes">addidas</div>
    </div>
  </div>
  </div>
</div>
<?php
  include("Footer.php");
?>
  <script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);    
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
/*var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}*/
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="jquery-sakura.min.js"></script>
<script>
$(window).load(function () {
    $('body').sakura();
});
</script>
</body>
</html>
