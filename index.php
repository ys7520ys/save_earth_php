<?php
// PHP 데이터 처리
$data = json_decode(file_get_contents('json/data.json'), true);
$sections = $data['sections'];


$first_section = $sections[0];
$first_sections_boxes = $first_section["boxes"];
$first_box1 = $first_sections_boxes[0];
$first_box2 = $first_sections_boxes[1];

$second_section = $sections[1];
$lists = $second_section["lists"];

$third_section = $sections[2];
$third_cards = $third_section["cards"];

$fourth_section = $sections[3];
$fourth_cards = $fourth_section["cards"];


?>
<?php include_once $_SERVER["DOCUMENT_ROOT"]."/inc/start.html" ?>
  <!-- container start-->
  <div class="container">
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/inc/header.html" ?>
    <main>
      <!-- swiper_slide start -->
      <section class="swiper mySwiper section">
        <h2 class="sr-only">스와이퍼 영역</h2>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="image/slides/slide01.jpg" alt="비닐은 잠시의 편안함을 주지만, 500년 동안 지구에 머무는 현실을 알아보아요."> 
          </div>
          <div class="swiper-slide">
            <img src="image/slides/slide02.jpg" alt="매분 2400그루의 나무가 사라지고 있습니다. 미래의 숲을 지키기 위해서 지구를 보호합시다."> 
          </div>
          <div class="swiper-slide">
            <img src="image/slides/slide03.jpg" alt="우리들을 품어주는 바다를 위해서 사소한 행동들을 조금씩 줄여보아요."> 
          </div>
        </div>
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Navigation Buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </section>
      <!-- swiper_slide end -->

      <!-- first_section start -->

        <section class="firstSection section" id="part1" aria-labelledby="우리의이야기-title">
          <h2 class="sr-only" id="우리의이야기-title">지구 온난화로 인한 피해를 알아보기기</h2> 
          <h2 class="section-title">
            <?php echo $first_section["section-title"]; ?>
          </h2>
          <h3 class="section-subtitle">
            <?php echo $first_section["section-subtitle"] ?>
          </h3>
          <div>
            <div class="img_box">
              <img src="image/sections/wave.jpg" alt="검은색으로 물든 바다 이미지">
              <div class="text_box">
                <h2 class="card-title">
                  <?php echo $first_box1["card-title"] ?>
                </h2>
                <p class="card-subtitle">
                  <?php echo $first_box1["card-subtitle"] ?>
                </p>
                <a href="#none" aria-label="자세히 보기">자세히 보기</a>
              </div>
            </div>
            <div class="img_box">
              <img src="image/sections/space.jpg" alt="정적인 상태의 검은 우주 이미지">
              <div class="text_box">
                <h2 class="card-title">
                  <?php echo $first_box2["card-title"] ?>
                </h2>
                <p class="card-subtitle">
                  <?php echo $first_box2["card-subtitle"] ?>
                </p>
                <a href="#none" aria-label="자세히 보기">자세히 보기</a>
              </div>
            </div>
          </div>
        </section>
      <!-- first_section end -->

      <!-- second_section start -->
      <section class="secondSection section" id="part2" aria-labelledby="현재의상황-title">     
        <h2 class="sr-only" id="현재의상황-title">지구가 걸어온 길에 대해 알아보기기</h2>
        <div>
          <div class="text_box">
            <h2 class="section-title">
              <?php echo $second_section["section-title"] ?>
            </h2>
            <h3 class="section-subtitle">
              <?php echo $second_section["section-subtitle"] ?>
            </h3>
            <ul>
              <?php 
                $i = 1;
                while ($i <= 7) {
                  echo "<li>".$lists["list".$i]."</li>";
                  $i++;
                }
              ?>
            </ul>
          </div>
          <div class="img_box">
            <div>
              <img src="image/sections/oil_1.jpg" alt="기름의 역사와 시간의 변화를 나타내는 포스터 이미지">
              <a href="#none">기름의 역사 알아보기</a>
            </div>
            <div>
              <img src="image/sections/oil_2.jpg" alt="바다와 사람의 공생관계를 의미하는 포스터 이미지">
              <a href="#none">바다의 기원 알아보러가기</a>
            </div>
          </div>
        </div>
      </section>
      <!-- second_section end -->

      <!-- third_section start -->
      <section class="thirdSection section" id="part3" aria-labelledby="상황알아보기-title">
        <h2 class="sr-only" id="상황알아보기-title">지구온난화로 인한 피해 알아보기기</h2> 
        <h2 class="section-title">
          <?php echo $third_section["section-title"] ?>
        </h2>
        <h3 class="section-subtitle">
          <?php echo $third_section["section-subtitle"] ?>
        </h3>
        <div class="card_box">
        <?php
        $i = -1;
        foreach ($third_cards as $card): 
        ++$i
        ?>
          <div class="deco_">
            <div class="img_box">
              <img src="image/sections/card<?php echo $i+1; ?>.jpg" alt="">
            </div>
            <div class="text_box">
              <h2 class="card-title">
                <?php echo $third_cards[$i]["card-title"] ?>
              </h2>
              <p class="card-subtitle">
                <?php echo $third_cards[$i]["card-subtitle"] ?>
              </p>
              <a href="#none">자세히 보러가기</a>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      </section>
      <!-- third_section end -->



      <!-- fourth_section start-->
      <section class="fourthSection section" id="part4" aria-labelledby="캠페인-title">
        <h2 class="sr-only" id="캠페인-title">자연환경보호 캠페인 카드 영역</h2>
        <h2 class="section-title">
          <?php echo $fourth_section["section-title"] ?>
        </h2>
        <h3 class="section-subtitle">
          <?php echo $fourth_section["section-subtitle"] ?>
        </h3>
        <div class="card_box">
        <?php
        $i = -1;
        foreach ($fourth_cards as $card):
        ++$i
        ?>
          <div class="card">
            <img class="img_box" src="image/sections/icons/card_icon<?php echo $i+1 ?>.jpg" alt=""> 
            <div class="text_box">
              <h2 class="card-title">
                <?php echo $fourth_cards[$i]["card-title"] ?>
              </h2>
              <p class="card-subtitle">
                <?php echo $fourth_cards[$i]["card-subtitle"] ?> 
              </p>
              <a href="#none">더보기</a>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      </section>
      <!-- fourth_section end -->

      <!-- banner start -->
      <section class="bannerSection" aria-labelledby="배너-title">
        <h2 class="sr-only" id="배너-title">사람들이 지구온난화에 대해서 좀 더 생각하길 바라는 배너</h2>
        <img src="image/sections/banner/banner_change.jpg" alt="지구 온난화를 생각하자는 이미지">
      </section>
      <!-- banner end -->
    </main>
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/inc/footer.html" ?>
  </div>
</body>
</html>