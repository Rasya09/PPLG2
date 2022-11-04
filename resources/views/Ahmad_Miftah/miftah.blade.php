<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV Miftah</title>
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="{{ asset('Assets-miftah/style.css')}}">
</head>

<body>
  <div class="container">
    <div class="profile">
      <div class="profile_container">
        <div class="profile_profileImg">
          <img src="{{ asset('Assets-miftah/images/tah.jpeg')}}" alt="shaif arfan">
        </div>
        <div>
          <h1 class="profile_name">
            <span class="profile_name_firstName">Ahmad Miftah</span>
            <span class="profile_name_lastName">Hasanuddin</span>
          </h1>
          <p class="profile_title">Software Developer</p>
          <p class="description profile_description">
            Hallo perkenalkan nama saya Ahmad Miftah Hasanuddin Lahir di Depok 16 juli 2006 dan sekarang saya tinggal di Depok
          </p>
          <!-- <a class="downloadBtn" href="./cv.pdf" download="Resume.pdf">Download Resume</a> -->
        </div>
      </div>
    </div>
    <div class="group-1">
      <div class="skills">
        <h3 class="title">Expertise</h3>
        <ul class="skills_list description">
          <li>JavaScript</li>
          <li>PHP</li>
          <li>HTML CSS</li>
          <li>MYSQL</li>
        </ul>
      </div>
      <div class="ref">
        <h3 class="title">Reference</h3>
        <div class="ref_item">
          <h4 class="ref_name">Mr.Agus</h4>
          <p class="description">Belajar Pemrograman Dasar</p>
        </div>
        <div class="ref_item">
          <h4 class="ref_name">Mr.Eraldo</h4>
          <p class="description">Belajar Pemrograman gim</p>
        </div>
      </div>

      <div class="edu">
        <h3 class="title">Education</h3>
        <div class="edu_item">
          <p class="item_preTitle">2012-2018</p>
          <h4 class="item_title">SD</h4>
          <p class="item_subtitle">
            SDIT BANI HASYIM EXELLENT SCHOOL
          </p>
        </div>
        <div class="edu_item">
          <p class="item_preTitle">2018-2021</p>
          <h4 class="item_title">SMP</h4>
          <p class="item_subtitle">
            SMP FATAHILLAH
          </p>
        </div>
        <div class="edu_item">
          <p class="item_preTitle">2021-2024</p>
          <h4 class="item_title">SMK</h4>
          <p class="item_subtitle">
            SMK TARUNA BHAKTI
          </p>
        </div>
      </div>
      <div class="interest">
        <h3 class="title">Interest</h3>
        <div class="interest_items">
          <div class="interest_item">
            <i data-feather="music"></i>
            <span>Music</span>
          </div>
          <div class="interest_item">
            <i data-feather="book"></i>
            <span>Books</span>
          </div>
          <div class="interest_item">
            <i data-feather="map"></i>
            <span>Travel</span>
          </div>
        </div>

      </div>
    </div>
    <hr>
    <div class="group-3">
      <div class="contact">
        <h3 class="title">Contact</h3>
        <div class="contact_info">
          <p class="description">
            Depok,Indonesia
          </p>
          <p class="description">
            089501817392
          </p>
          <p class="description">
            ahmad.miftahh1607@gmail.com
          </p>
        </div>
      </div>
      <div class="social">
        <h3 class="title">Socials</h3>
        <div class="social_items">
          <a href="https://github.com/ahmadmiftah2006/"class="social_item">
            <i data-feather="github"></i>
            <span>/ahmadmiftah2006</span>
          </a>
          <a href="#" target="_blank" class="social_item">
            <i data-feather="twitter"></i>
            <span>/ahmdmiftah06</span>
          </a>
          <a href="#" target="_blank" class="social_item">
            <i data-feather="linkedin"></i>
            <span>/ahmdmiftah06</span>
            <a href="https://www.instagram.com/ahmd.miftah" class="social_item">
              <i data-feather="instagram"></i>
              <span>/ahmd.miftah</span>
            </a>
          </a>
        </div>
      </div>
    </div>
  </div>
  <script>
    feather.replace()
  </script>
</body>

</html>