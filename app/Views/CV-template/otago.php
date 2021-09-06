<!doctype html>
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
    <!-- ./fonts -->

    <style type="text/css">
        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        html {
            height: 100%;
            margin: 0px;
        }

        body {
            width: 21cm;
            height: 100%;
            min-height: 29.7cm;
            position: relative;
            margin: 0;
            padding: 0 0;
            color: #333;
            line-height: 22px;
            font: 13px "Source Sans Pro", Arial;
            font-style: normal
        }

        h1 {
            font: 32px "Source Sans Pro", Arial;
            margin: 0 0 15px 0;
            padding: 18px 0 5px 0;
            font-weight: 600;
            color: #333;
            letter-spacing: .1em;
            text-align: left;
            text-transform: uppercase
        }

        h1 span {
            padding: 0 20px 10px 0
        }

        h1 span.has--avatar {
            padding-left: 50px
        }

        h2 {
            font: 18px "Source Sans Pro", Arial;
            font-weight: 700;
            margin: 0;
            text-transform: uppercase;
            padding: 0;
            text-align: left;
            letter-spacing: .15em;
            background: #fff
        }

        h3 {
            font-size: 13px;
            font-weight: 600;
            margin: 0;
            padding: 0
        }

        p {
            color: #4c4c4c;
            line-height: 18px;
            font-weight: 400;
            margin: 0;
            padding: 0
        }

        hr {
            border: none;
            height: 1px;
            width: 100%;
            padding: 0;
            margin: 0;
            background: #d2d2d2
        }

        .circle {
            display: none;
            position: fixed;
            top: 950px;
            right: -150px;
            height: 300px;
            width: 300px;
            opacity: .2;
            border-radius: 50%;
            background-color: #f4d92c
        }

        .hero {
            left: 0;
            top: 0;
            width: 100%;
            height: 85px;
            position: absolute
        }

        .sections {
            left: 40px;
            position: relative;
            width: 715px
        }

        .section {
            position: relative;
            width: 100%;
            padding: 0
        }

        .section p {
            display: block;
            font-style: normal
        }

        .section:last-child {
            border: none
        }

        .section.section--summary {
            margin-top: 0;
            width: 100%;
            text-align: left;
            padding-bottom: 0;
            padding-top: 15px;
            margin-top: 17px;
            border-top: 1px solid #b7b7b7
        }

        .section.section--summary .section--content {
            padding-left: 0;
            width: 100%
        }

        .section.section--hobbies .section--content {
            padding-top: 0
        }

        .section.section--characteristics .section--content {
            padding-top: 0
        }

        .section--name {
            position: relative;
            text-align: left
        }

        .section--name.has--avatar {
            padding-left: 70px;
            padding-bottom: 5px
        }

        .section--name__sub {
            display: block;
            margin-top: -10px;
            padding: 0;
            line-height: 24px
        }

        .section--name__sub svg {
            top: 2px;
            position: relative;
            height: 13px;
            width: 13px
        }

        .section--name__sub svg.svg--phone {
            margin-left: 8px
        }

        .section--name__sub svg.svg--email {
            margin-left: 10px
        }

        .section__label {
            display: inline-block;
            position: absolute;
            top: 0;
            right: 0;
            padding: 10px 0 0 0;
            margin: 0;
            height: 65px;
            width: 70px;
            color: #fff;
            font-size: 36px;
            font-weight: 700;
            text-align: center;
            border-width: 0 3px 3px 0;
            background-color: #f4d92c;
            -webkit-background-size: cover !important;
            background-size: cover !important
        }

        .section--name__avatar {
            display: inline-block;
            position: absolute;
            top: 20px;
            left: 0;
            padding: 0;
            margin: 0;
            height: 35px;
            width: 35px;
            border-radius: 50%;
            -webkit-background-size: cover !important;
            background-size: cover !important
        }

        .personalia__list {
            float: left;
            display: inline;
            position: relative;
            width: 100%;
            margin: 0;
            padding: 0
        }

        .personalia__item {
            float: left;
            display: inline;
            position: relative;
            margin: 0;
            padding: 5px 0 0 0;
            width: 175px
        }

        .section__personalia {
            display: inline-block;
            margin-top: 0;
            height: auto;
            width: 715px;
            margin: 15px 0 0 0;
            padding: 15px 0 0 0;
            text-align: left;
            border-top: 1px solid #b7b7b7
        }

        .section__personalia .section__personalia-item {
            display: inline;
            float: left;
            width: 175px
        }

        .section__personalia span {
            position: relative;
            display: inline-block;
            margin-right: 10px;
            padding-left: 20px
        }

        .section__personalia span :last-child {
            margin-right: 0
        }

        .section__personalia svg {
            display: none;
            position: absolute;
            top: 1px;
            left: 0;
            margin-right: 2px;
            height: 14px;
            width: 14px
        }

        .section__personalia .section__personalia--address svg {
            top: 1px
        }

        .section__personalia .section__personalia--phoneNumber svg {
            top: 1px
        }

        .section__personalia .section__personalia--email svg {
            top: 1px
        }

        .section--title {
            display: block;
            position: relative;
            z-index: 99;
            margin: 17px 0 0 0;
            padding: 15px 0 8px 0;
            page-break-inside: avoid;
            border-top: 1px solid #b7b7b7
        }

        .section--title span {
            display: none;
            display: inline-block;
            margin-right: 0
        }

        .section--title .section--title-label {
            display: inline-block;
            height: 20px;
            width: 20px;
            position: absolute;
            left: -40px;
            bottom: 10px;
            display: none;
            background-color: #4c4c4c
        }

        .section--title-icon {
            position: relative;
            top: 2px;
            left: 0;
            display: inline-block;
            width: 30px
        }

        .section--title-icon svg {
            display: none;
            position: relative;
            top: 2px;
            height: 21px;
            fill: #2b2b38
        }

        .section--title-icon.personal svg {
            top: 3px
        }

        .section--title-icon.education svg {
            top: 4px
        }

        .section--title-icon.internships svg {
            top: 3px
        }

        .section--title-icon.language svg {
            top: 4px
        }

        .section--title-icon.course svg {
            top: 4px
        }

        .section--title-icon.work svg {
            top: 3px
        }

        .section--title-icon.certificate svg {
            top: 4px
        }

        .section--title-icon.single-textarea svg {
            top: 4px
        }

        .section--title-icon.extra-curricular svg {
            top: 3px
        }

        .section--title-icon.skill svg {
            top: 4px
        }

        .section--title-icon.reference svg {
            top: 4px
        }

        .section--heading-group {
            display: block;
            padding: 10px 0 0 0;
            margin: 0;
            page-break-inside: avoid
        }

        .section--list {
            display: block;
            list-style: none;
            padding: 0;
            margin: 0
        }

        .section--item {
            display: block;
            position: relative;
            list-style: none;
            padding: 0;
            margin: 0
        }

        .section--item.skills {
            padding-top: 5px
        }

        .section--item.skills:first-child {
            padding-top: 0
        }

        .section--item.section--item-personal {
            padding-left: 140px
        }

        .section--item.section--item-personal .section--date {
            top: 13px;
            left: 0;
            right: auto;
            text-align: left
        }

        .section--item:first-child .section--heading-group {
            padding-top: 0
        }

        .section--item:first-child .section--heading-group .section--date {
            top: 0
        }

        .skills--label {
            display: inline-block;
            width: 175px;
            margin: 0
        }

        .section--date {
            position: absolute;
            right: 0;
            text-align: right;
            top: 10px;
            width: 125px;
            font-size: 13px;
            padding: 0;
            margin: 0
        }

        .section--heading {
            display: block;
            padding: 0;
            margin: 0
        }

        .section--sub-heading {
            display: block;
            padding: 3px 0 0 0;
            margin: 0;
            font-size: 13px
        }

        .section--content {
            display: block;
            width: 600px;
            padding: 5px 0 0 0;
            margin: 0
        }

        .section--content p {
            display: block
        }

        .section--content ol,
        .section--content ul {
            white-space: normal;
            font-weight: 400;
            list-style-position: outside;
            color: #4c4c4c;
            margin: 0;
            padding: 0 0 0 16px
        }

        .section--content ol li,
        .section--content ul li {
            line-height: 18px
        }

        .section--content ul li {
            list-style-type: disc
        }

        .section--content ol {
            padding-left: 14px
        }

        .section--content-single-textarea {
            padding-left: 0
        }

        .skills__list {
            position: relative;
            display: inline-block;
            list-style: none;
            margin: 0;
            padding: 0;
            top: 2px
        }

        .skills__item {
            display: inline-block;
            height: 10px;
            width: 10px;
            padding: 5px 0 0 0;
            margin: 0 3px 0 0;
            border-radius: 50%;
            border: 1px solid #b7b7b7
        }

        .img--avatar {
            width: 100%;
            height: 100%;
        }

        .skills__item.active {
            background: #333;
            border-color: #333
        }

        .c--ababab .section__label {
            background: #F06543 !important
        }

        .c--f4d92c .section__label {
            background: #f4d92c !important
        }

        .c--2196f3 .section__label {
            background: #2196f3 !important
        }

        .c--8bc34a .section__label {
            background: #8bc34a !important
        }

        .c--b34848 .section__label {
            background: #b34848 !important
        }
    </style>

</head>

<body class="c--ababab" style="overflow: hidden !important;">

    <div class="circle"></div>


    <div class="hero"></div>

    <section class="sections">

        <div class="section__label">
            CV
        </div>

        <div class="section--name">
            <h1>

                <?php
                if ($avatar != null) {
                    $path = 'avatar/' . $avatar;
                    $type = pathinfo($path, PATHINFO_EXTENSION);
                    $data = file_get_contents($path);
                    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                    echo '<div class="avatar" > <img class="section--name__avatar"  src="' . $base64 . '" /></div>';
                }
                ?>

                <span class="has--avatar">
                    <?= $firstName . ' ' . $lastName; ?>
                </span>
            </h1>

            <span class="section--name__sub">


                <svg class="svg--address" fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
                    <path d="M0 0h24v24H0z" fill="none"></path>
                </svg>
                <?= ucwords($meta_streetName) . ' ' . $meta_postalCode . ' ' . ucwords($meta_city); ?>



                <svg class="svg--phone" fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"></path>
                </svg>
                <?= $meta_phoneNumber; ?>

                <svg class="svg--email" fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"></path>
                    <path d="M0 0h24v24H0z" fill="none"></path>
                </svg>
                <?= $email; ?>
            </span>

        </div>



        <div class="section__personalia">

            <ul class="personalia__list">


                <li class="personalia__item">
                    <b>Tanggal lahir</b>
                    <br>
                    <?= date('d-m-Y', strtotime($meta_dateOfBirth));; ?>
                </li>



                <li class="personalia__item">
                    <b>Kebangsaan</b>
                    <br>
                    <?= ucwords($meta_nationality); ?>
                </li>



                <li class="personalia__item">
                    <b>Jenis kelamin</b>
                    <br>
                    <?php if ($meta_gender = "m") {
                    ?>
                        Laki-laki
                    <?php
                    } elseif ($meta_gender = "f") {
                    ?>
                        Perempuan
                    <?php
                    } else {
                    ?>

                    <?php
                    } ?>
                </li>




                <li class="personalia__item">
                    <b>Website</b>
                    <br>
                    <?= $meta_website; ?>
                </li>



                <li class="personalia__item">
                    <b>Tempat lahir</b>
                    <br>
                    <?= ucwords($meta_placeOfBirth) ?>
                </li>



                <li class="personalia__item">
                    <b>Status pernikahan</b>
                    <br>
                    <?= ucwords($meta_maritalStatus); ?>
                </li>




                <li class="personalia__item">
                    <b>SIM</b>
                    <br>
                    <?= $meta_drivingLicenses; ?>
                </li>



                <li class="personalia__item">
                    <b>LinkedIn</b>
                    <br>
                    <?= $meta_linkedin; ?>
                </li>

            </ul>

        </div>





        <div class="section section--summary">
            <div class="section--content">
                <p><?= ucfirst($profile_description); ?></p>
            </div>
        </div>






        <div class="section">

            <div class="section--title">
                <h2>
                    <span class="section--title-label"></span>

                    Pengalaman kerja
                </h2>
            </div>


            <?php
            foreach ($work_function as list($function, $city, $employer, $startMonth, $startYear, $endMonth, $endYear)) {
            ?>
                <?php if ($employer != null) {
                ?>
                    <ol class="section--list no-indent">
                        <li class="section--item">
                            <div class="section--heading-group">
                                <div class="section--date">
                                    <?php if ($startMonth == '0') {
                                        if ($endMonth == 'tersembunyi') {
                                            echo ' - ' .  $endYear . '<br>';
                                        } elseif ($endMonth == 'now') {
                                            echo  $startYear . ' - ' .  date('M ') . $endYear . '<br>';
                                        } elseif ($endMonth == '1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9' || '10' || '11' || '12') {
                                            echo  ' - ' . date('M Y', mktime(0, 0, 0, (int)$endMonth, 1, $endYear)) . '<br>';
                                        }
                                    } elseif ($startMonth == 'tersembunyi') {
                                        if ($endMonth == '0') {
                                            echo $startYear . ' - ';
                                        } elseif ($endMonth == 'tersembunyi') {
                                            echo $startYear . ' - ' .  $endYear;
                                        } elseif ($endMonth == 'now') {
                                            echo  $startYear . ' - ' .  date('M') . $endYear . '<br>';
                                        } elseif ($endMonth == '1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9' || '10' || '11' || '12') {
                                            echo  ' - ' . date('M Y', mktime(0, 0, 0, (int)$endMonth, 1, $endYear)) . '<br>';
                                        }
                                    } elseif ($startMonth ==  '1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9' || '10' || '11' || '12') {
                                        if ($endMonth == '0') {
                                            echo date('M Y', mktime(0, 0, 0, (int)$startMonth, 1, $startYear)) . ' - ' . '<br>';
                                        } elseif ($endMonth == 'tersembunyi') {
                                            echo date('M Y', mktime(0, 0, 0, (int)$startMonth, 1, $startYear)) . ' - ' .  $endYear . '<br>';
                                        } elseif ($endMonth == 'now') {
                                            echo date('M Y', mktime(0, 0, 0, (int)$startMonth, 1, $startYear)) . ' - ' .  date('M') . $endYear . '<br>';
                                        } elseif ($endMonth == '1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9' || '10' || '11' || '12') {
                                            echo date('M Y', mktime(0, 0, 0, (int)$startMonth, 1, $startYear)) . ' - ' .  date('M Y', mktime(0, 0, 0, (int)$endMonth, 1, $endYear)) . '<br>';
                                        }
                                    } ?>
                                </div>
                                <div class="section--heading">
                                    <h3><?= ucwords($function); ?></h3>
                                </div>
                                <div class="section--sub-heading">
                                    <?= ucwords($employer); ?> , <?= ucwords($city); ?> </div>
                            </div>
                        </li>
                    </ol>
                <?php
                }
                ?>


            <?php
            }
            ?>
        </div>






        <div class="section">

            <div class="section--title">
                <h2>
                    <span class="section--title-label"></span>

                    Pendidikan dan Kualifikasi
                </h2>
            </div>
            <?php
            foreach ($education_name as list($name, $city, $institution, $startMonth, $startYear, $endMonth, $endYear)) {
            ?>
                <?php if ($institution != null) {
                ?>
                    <ol class="section--list">
                        <li class="section--item">
                            <div class="section--heading-group">
                                <div class="section--date">
                                    <?php if ($startMonth == '0') {
                                        if ($endMonth == 'tersembunyi') {
                                            echo ' - ' .  $endYear . '<br>';
                                        } elseif ($endMonth == 'now') {
                                            echo  $startYear;
                                        } elseif ($endMonth == '1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9' || '10' || '11' || '12') {
                                            echo  ' - ' . date('M Y', mktime(0, 0, 0, (int)$endMonth, 1, $endYear)) . '<br>';
                                        }
                                    } elseif ($startMonth == 'tersembunyi') {
                                        if ($endMonth == '0') {
                                            echo $startYear . ' - ';
                                        } elseif ($endMonth == 'tersembunyi') {
                                            echo $startYear . ' - ' .  $endYear;
                                        } elseif ($endMonth == 'now') {
                                            echo  $startYear;
                                        } elseif ($endMonth == '1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9' || '10' || '11' || '12') {
                                            echo  ' - ' . date('M Y', mktime(0, 0, 0, (int)$endMonth, 1, $endYear)) . '<br>';
                                        }
                                    } elseif ($startMonth ==  '1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9' || '10' || '11' || '12') {
                                        if ($endMonth == '0') {
                                            echo date('M Y', mktime(0, 0, 0, (int)$startMonth, 1, $startYear)) . ' - ' . '<br>';
                                        } elseif ($endMonth == 'tersembunyi') {
                                            echo date('M Y', mktime(0, 0, 0, (int)$startMonth, 1, $startYear)) . ' - ' .  $endYear . '<br>';
                                        } elseif ($endMonth == 'now') {
                                            echo date('M Y', mktime(0, 0, 0, (int)$startMonth, 1, $startYear));
                                        } elseif ($endMonth == '1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9' || '10' || '11' || '12') {
                                            echo date('M Y', mktime(0, 0, 0, (int)$startMonth, 1, $startYear)) . ' - ' .  date('M Y', mktime(0, 0, 0, (int)$endMonth, 1, $endYear)) . '<br>';
                                        }
                                    } ?>
                                </div>
                                <div class="section--heading">
                                    <h3><?= ucwords($name); ?></h3>
                                </div>
                                <div class="section--sub-heading">
                                    <?= ucwords($institution); ?>, <?= ucwords($city); ?> </div>
                            </div>
                            <div class="section--content">

                            </div>
                        </li>
                    </ol>
                <?php
                }
                ?>

            <?php
            }
            ?>
        </div>






        <div class="section section--hobbies">

            <div class="section--title">
                <h2>
                    <span class="section--title-label"></span>
                    Minat
                </h2>
            </div>

            <ol class="section--list">
                <li class="section--item">
                    <div class="section--content">
                        <p><?php
                            foreach ($hobby_name as $hoby) {
                                if ($hoby != null) {
                                    # code...
                                } ?> <?= ucwords($hoby) . ', ' ?>
                            <?php
                            };
                            ?>
                        </p>
                    </div>
                </li>

            </ol>
        </div>








        <div class="section">

            <div class="section--title">
                <h2>
                    <span class="section--title-label"></span>

                    Keahlian
                </h2>
            </div>


            <ol class="section--list skills">
                <?php
                foreach ($skill_name as list($name, $level)) {
                ?>
                    <li class="section--item skills">
                        <div class="skills--label">
                            <h3>
                                <?= ucwords($name); ?>
                            </h3>
                        </div>
                        <div class="skills--label">

                            <?php if ($level == "100") {
                            ?>
                                Ahli
                            <?php
                            } elseif ($level == "75") {
                            ?>
                                Berpengalaman
                            <?php
                            } elseif ($level == "50") {
                            ?>
                                Terampil
                            <?php
                            } elseif ($level == "25") {
                            ?>
                                Menengah

                            <?php
                            } elseif ($level == "20") {
                            ?>
                                Pemula
                            <?php
                            }
                            ?> </div>
                    </li>
                <?php    } ?>
            </ol>

        </div>







        <div class="section">

            <div class="section--title">
                <h2>
                    <span class="section--title-label"></span>
                    Pencapaian
                </h2>
            </div>

            <div class="section--content section--content-single-textarea">
                <p><?= $availability_description; ?></p>
            </div>
        </div>






























    </section>



</body>

</html>