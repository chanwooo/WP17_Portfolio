
<?php
include "header.php";

$t=$c[0]+1;

$q="UPDATE counter SET cnt=$t";
mysqli_query($connect,$q);

?>

<div style="padding-top: 10px;" Class="large-3 medium-3 columns">

    <img class="thumbnail" src="img/profile.png" width="100%">


    </div>

    <div style="padding-top: 10px;" Class="large-7 medium-7 columns">

    
    	<div>
    	<h5>안녕하세요</h5>
    	
    	<p>
    	저는 김찬우입니다.<br>
    	이번학기에 "소프트웨어 특론" 과목을 수강하고 있습니다.<br>
    	저의 포트폴리오를 소개하는 홈페이지입니다.<br>


    	</p>
   
    	</div>


    </div>
</div>

        <div Class="Row">
    <div style="padding-top: 10px" Class="large-2 medium-2 columns">

    </div>

    <div style="padding-top: 10px;" Class="large-10 medium-10 columns">

<br><br>
<h3>이력</h3>



<div class="row" data-equalizer="foo">
  <div class="columns" data-equalizer-watch="foo">
    <div class="callout" data-equalizer="bar">

        <?php
        $query = "select * from intro";
        $result=mysqli_query($connect,$query);


        while($row=mysqli_fetch_array($result))
        {?>
            <h5><?=$row[1]?></h5>
            <div class="callout" data-equalizer-watch="bar">
                <p><?=$row[2]?></p>
            </div>

            <?php
        }

        ?>

        <!--

      <h5>요약</h5>
      <div class="callout" data-equalizer-watch="bar">
      <p>
홍익대학교 세종캠퍼스 컴퓨터정보통신공학전공 4학년 재학중<br>
보안솔루션(OTP) 서버 관리(SE) 고객사 20여개, 2년재직  </p>
          

      </div>

      <h5>경력</h5>
      <div class="callout" data-equalizer-watch="bar">
          2013/08~2015/11 미래테크놀로지, 서버엔지니어<br>
          - OTP로그인 서버 설치, 관리, 유지보수 업무 수행
      </div>

      <h5>학력</h5>
      <div class="callout" data-equalizer-watch="bar">
      <ul>
      	  <li>2010/03~현재, 홍익대학교(세종)
          
</li>
    	  <li>2007/03~2010/02, 서울금융고등학교
          </li>
	</ul>
          
          

      </div>

      <h5>자격</h5>
      <div class="callout" data-equalizer-watch="bar">
      <ul>
      	  <li>정보처리기능사</li>
    	  <li>정보기기운용기능사</li>
	</ul>
          

      </div>


      <h5>보유기술</h5>
      <div class="callout" data-equalizer-watch="bar">
      <ul>
      <li>Language : C,C++,Java,Python</li>
      <li>OS : Linux(CentOS, Ubuntu, KaliLinux), OSX, Windows, Vmware Esxi Server, Citrix Xen Server</li>
      <li>Tools : Visualstudio, Eclipse, Pycharm, Clion, PhpStorm, Git, Wireshark, Photoshop</li>
      </ul>
      </div>


-->


    </div>
      

   
    </div>


  </div>

<!---->

    </div>
    </div>




    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script>$(document).foundation();</script>
  </body>
</html>





