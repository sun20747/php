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
            <h5 class="text-white h4">Coronavirus disease (COVID-19)</h5>

            <div class="position-absolute top-0 end-0 p-4">
                <a href="index.php"><img src="https://www.nicepng.com/png/full/333-3336369_multi-language-website-for-international-students-language-white.png" alt="" height="40"></a>
            </div>

            <span class="text-muted">COVID-19 affects different people in different ways. Most infected people will develop mild to moderate illness and recover without hospitalization.</span>
            <p class="text-muted">Most common symptoms:</p>
            <ul class="text-muted">
                <li>fever</li>
                <li>cough</li>
                <li>tiredness</li>
                <li>loss of taste or smell.</li>
            </ul>

            <p class="text-muted">Less common symptoms:</p>
            <ul class="text-muted">
                <li>sore throat</li>
                <li>headache</li>
                <li>aches and pains</li>
                <li>diarrhoea</li>
                <li>a rash on skin, or discolouration of fingers or toes</li>
                <li>red or irritated eyes.</li>
            </ul>

            <p class="text-muted">Serious symptoms:</p>
            <ul class="text-muted">
                <li>difficulty breathing or shortness of breath</li>
                <li>loss of speech or mobility, or confusion</li>
                <li>chest pain.</li>
            </ul>

            <span class="text-muted">Seek immediate medical attention if you have serious symptoms. Always call before visiting your doctor or health facility.

                People with mild symptoms who are otherwise healthy should manage their symptoms at home.

                On average it takes 5–6 days from when someone is infected with the virus for symptoms to show, however it can take up to 14 days. </span>


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
                <h3 style="margin-top: 30px;"> Thailand Situation Covid-19 </h3>
                <h5>Update Data At :
                    <?php echo  $UpdateDate; ?> </h5>
            </div>
        </div>
    </div>

    <div class="container px-4">

        <div class="row gx-1 ">

            <div class="card  bg-danger bg-gradient col-sm">
                <div class="card-body">
                    <h5 class="text-light ">Total Case</h5>
                    <h3 class="mt-3 mb-3 text-light"><?php echo number_format($Confirmed) ?> people
                    </h3>
                    <p class="mb-0 text-muted">
                        <hr class="bg-light">
                        <span class="text-light ">New Case</span>
                        <span class="text-light me-2"><i class="mdi mdi-arrow-down-bold"></i> + <?php echo number_format($NewConfirmed)  ?> people
                        </span>
                    </p>
                </div>
            </div>

            <div class="card   bg-success bg-gradient col-sm">
                <div class="card-body">
                    <h5 class=" text-light">Discharged</h5>
                    <h3 class="mt-3 mb-3 text-light"><?php echo number_format($Recovered) ?> people</h3>
                    <p class="mb-0 text-muted">
                        <hr class="bg-light">
                        <span class="text-light ">เพิ่ม</span>
                        <span class="text-light me-2"><i class="mdi mdi-arrow-down-bold"></i> + <?php echo number_format($NewRecovered) ?> people</span>
                    </p>
                </div>
            </div>

            <div class="card  bg-dark bg-gradient col-sm">
                <div class="card-body">
                    <h5 class="text-light">Deaths</h5>
                    <h3 class="mt-3 mb-3 text-light"><?php echo number_format($Deaths) ?> people</h3>
                    <p class="mb-0 text-muted">
                        <hr class="bg-light">
                        <span class="text-light">เพิ่ม</span>
                        <span class="text-light me-2"><i class="mdi mdi-arrow-down-bold"></i> + <?php echo number_format($NewDeaths) ?> people</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="card bg-secondary bg-gradient col-sm ">
            <div class="card-body ">
                <h5 class="text-light offset-md-5">Recovered</h5>
                <h3 class="mt-3 mb-3 text-light offset-md-5"><?php echo number_format($Hospitalized) ?> people</h3>
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