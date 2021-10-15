<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Covid-19</title>
</head>

<body>
  <?php
  $api = file_get_contents('https://static.easysunday.com/covid-19/getTodayCases.json?fbclid=IwAR104EixBvh406fzgGsnxXMK2pJ3vvlKCGaqgvqQeS5AQCD9Q5LBBk1m1b8');
  $covid19_th = json_decode($api);

  // echo '<pre>';
  // print_r($covid19_th);
  // echo '</pre>';

  $UpdateDate = $covid19_th->UpdateDate;
  $Confirmed = $covid19_th->Confirmed;
  $NewConfirmed = $covid19_th->NewConfirmed;
  $Recovered = $covid19_th->Recovered;
  $NewRecovered = $covid19_th->NewRecovered;
  $Deaths = $covid19_th->Deaths;
  $NewDeaths = $covid19_th->NewDeaths;
  $Hospitalized = $covid19_th->Hospitalized;
  ?>

  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">โรคโคโรนาไวรัส (COVID-19)</h5>

      <div class="position-absolute top-0 end-0 p-4">
        <a href="en_index.php"><img src="https://www.nicepng.com/png/full/333-3336369_multi-language-website-for-international-students-language-white.png" alt="" height="40"></a>
      </div>

      <span class="text-muted">โควิด-19 ส่งผลกระทบต่อผู้คนในรูปแบบต่างๆ ผู้ติดเชื้อส่วนใหญ่จะมีอาการป่วยเล็กน้อยถึงปานกลางและฟื้นตัวได้โดยไม่ต้องรักษาตัวในโรงพยาบาล</span>
      <p class="text-muted">อาการที่พบบ่อยที่สุด:</p>
      <ul class="text-muted">
        <li>ไข้</li>
        <li>ไอ</li>
        <li>เหน็ดเหนื่อยเมื่อยล้า</li>
        <li>สูญเสียรสชาติหรือกลิ่น</li>
      </ul>

      <p class="text-muted">อาการที่พบได้น้อย:</p>
      <ul class="text-muted">
        <li>เจ็บคอ</li>
        <li>ปวดหัว</li>
        <li>ปวดเมื่อย</li>
        <li>ท้องเสีย</li>
        <li>ผื่นที่ผิวหนังหรือนิ้วมือหรือนิ้วเท้าเปลี่ยนสี</li>
        <li>ตาแดงหรือระคายเคือง</li>
      </ul>

      <p class="text-muted">อาการรุนแรง:</p>
      <ul class="text-muted">
        <li>หายใจลำบากหรือหายใจถี่</li>
        <li>สูญเสียคำพูดหรือการเคลื่อนไหวหรือความสับสน</li>
        <li>อาการเจ็บหน้าอก</li>
      </ul>

      <span class="text-muted">ไปพบแพทย์ทันทีหากคุณมีอาการรุนแรง โทรทุกครั้งก่อนไปพบแพทย์หรือสถานบริการสุขภาพของคุณ

        ผู้ที่มีอาการไม่รุนแรงและมีสุขภาพดีควรจัดการอาการที่บ้าน

        โดยเฉลี่ยแล้วจะใช้เวลา 5-6 วันนับจากเวลาที่มีคนติดเชื้อไวรัสเพื่อแสดงอาการ อย่างไรก็ตาม อาจใช้เวลาถึง 14 วัน </span>


    </div>


  </div>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6 offset-md-4">
        <h3 style="margin-top: 30px;"> รายงานสถานการณ์ โควิด-19 </h3>
        <h5>อัพเดทข้อมูลล่าสุด :
          <?php echo  $UpdateDate; ?> </h5>
      </div>
    </div>
  </div>

  <div class="container px-4">

    <div class="row gx-1 ">

      <div class="card  bg-danger bg-gradient col-sm">
        <div class="card-body">
          <h5 class="text-light ">ติดเชื้อสะสม</h5>
          <h3 class="mt-3 mb-3 text-light"><?php echo number_format($Confirmed) ?> คน</h3>
          <p class="mb-0 text-muted">
            <hr class="bg-light">
            <span class="text-light ">เพิ่ม</span>
            <span class="text-light me-2"><i class="mdi mdi-arrow-down-bold"></i> + <?php echo number_format($NewConfirmed)  ?> คน</span>
          </p>
        </div>
      </div>

      <div class="card   bg-success bg-gradient col-sm">
        <div class="card-body">
          <h5 class=" text-light">รักษาหายแล้ว</h5>
          <h3 class="mt-3 mb-3 text-light"><?php echo number_format($Recovered) ?> คน</h3>
          <p class="mb-0 text-muted">
            <hr class="bg-light">
            <span class="text-light ">เพิ่ม</span>
            <span class="text-light me-2"><i class="mdi mdi-arrow-down-bold"></i> + <?php echo number_format($NewRecovered) ?> คน</span>
          </p>
        </div>
      </div>

      <div class="card  bg-dark bg-gradient col-sm">
        <div class="card-body">
          <h5 class="text-light">เสียชีวิต</h5>
          <h3 class="mt-3 mb-3 text-light"><?php echo number_format($Deaths) ?> ศพ</h3>
          <p class="mb-0 text-muted">
            <hr class="bg-light">
            <span class="text-light">เพิ่ม</span>
            <span class="text-light me-2"><i class="mdi mdi-arrow-down-bold"></i> + <?php echo number_format($NewDeaths) ?> ศพ</span>
          </p>
        </div>
      </div>
    </div>

    <div class="card bg-secondary bg-gradient col-sm ">
      <div class="card-body ">
        <h5 class="text-light offset-md-5">อยู่ในโรงพยาบาล</h5>
        <h3 class="mt-3 mb-3 text-light offset-md-5"><?php echo number_format($Hospitalized) ?> คน</h3>
        <p class="mb-0 text-muted">
          <hr class="bg-light">
        </p>
      </div>
    </div>


    <?php

    $url = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces');
    $covid19_pro = json_decode($url);

    // echo '<pre>';
    // print_r($covid19_pro[0]->province);
    // echo '</pre>';

    ?>



  </div>

</body>

</html>