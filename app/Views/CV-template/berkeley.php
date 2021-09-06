<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
    <!-- ./fonts -->


    <!-- css -->
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
            font: 30px "Source Sans Pro", Arial;
            margin: 0;
            margin: 0 0 15px 0;
            padding: 20px 0 0 0;
            font-weight: 600;
            color: #333
        }

        h1 span {
            position: relative;
            font-style: normal;
            display: inline;
            margin-right: 1px;
            padding: 0
        }

        h2 {
            font: 16px "Source Sans Pro", Arial;
            font-weight: 400;
            margin: 0;
            padding: 4px 0 12px 10px;
            background: #f1f1f1
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

        .hero {
            left: 0;
            top: 0;
            width: 100%;
            height: 85px;
            display: none;
            background: #272727;
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

        .section.section--summary .section--content {
            padding-top: 0;
            padding-left: 0
        }

        .section--name {
            position: relative
        }

        .section--name.has--avatar {
            padding-left: 60px;
            padding-bottom: 5px
        }

        .section--avatar {
            display: inline-block;
            position: absolute;
            top: 19px;
            left: 0;
            padding: 0;
            margin: 0;
            height: 45px;
            width: 45px;
            border-radius: 50%;
            -webkit-background-size: cover !important;
            background-size: cover !important
        }

        .section--title {
            display: block;
            position: relative;
            z-index: 99;
            margin: 0;
            padding: 20px 0 15px 0;
            page-break-inside: avoid
        }

        .section--title span {
            display: inline-block;
            margin-right: 0
        }

        .section--title-icon {
            position: relative;
            top: 2px;
            left: 0;
            display: inline-block;
            width: 30px
        }

        .section--title-icon svg {
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
            padding: 5px 0 0 0;
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
            padding: 10px 0 0 0;
            margin: 0
        }

        .section--item.section--item-personal {
            padding-top: 0;
            padding-left: 140px
        }

        .section--item.section--item-personal .section--date {
            top: 5px;
            left: 0;
            right: auto;
            text-align: left
        }

        .section--item:first-child:not(.section--item-personal) {
            padding: 2px 0 0 0
        }

        .section--item:first-child:not(.section--item-personal) .section--heading-group {
            padding-top: 0
        }

        .section--item:first-child:not(.section--item-personal) .section--heading-group .section--date {
            top: 0
        }

        .section--date {
            position: absolute;
            right: 0;
            text-align: right;
            top: 15px;
            width: 120px;
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
            font-style: italic;
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

        .c--333333 .section--title,
        .c--333333 h1 {
            color: #333 !important
        }

        .c--333333 .section--title svg {
            fill: #333 !important
        }

        .c--379047 .section--sub-heading,
        .c--379047 h1,
        .c--379047 h2 {
            color: #48634c !important
        }

        .c--379047 .section--title svg {
            fill: #48634c !important
        }

        .c--3f6592 .section--title,
        .c--3f6592 h1 {
            color: #3f6592 !important
        }

        .c--3f6592 .section--title svg {
            fill: #3f6592 !important
        }

        .c--7a345e .section--title,
        .c--7a345e h1 {
            color: #7a345e !important
        }

        .c--7a345e .section--title svg {
            fill: #7a345e !important
        }

        .c--ac3e49 .section--title,
        .c--ac3e49 h1 {
            color: #ac3e49 !important
        }

        .c--ac3e49 .section--title svg {
            fill: #ac3e49 !important
        }
    </style>
    <!-- ./css -->



</head>

<body class="c--333333" style="overflow: hidden !important;">

    <div class="hero"></div>


    <section class="sections">

        <div class="section--name has--avatar">


            <div class="" style="background:url('/img/<?= $avatar; ?>') no-repeat;">
            </div><?php
                    if ($avatar != null) {
                        $path = 'avatar/' . $avatar;
                        $type = pathinfo($path, PATHINFO_EXTENSION);
                        $data = file_get_contents($path);
                        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                        echo '<div class="avatar"><img class="section--avatar" src="' . $base64 . '" /> </div>';
                    }
                    ?>

            <h1> <?= $firstName . ' ' . $lastName; ?>
            </h1>
        </div>


        <div class="section">
            <div class="section--title">
                <h2>
                    <i class="section--title-icon personal">
                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"></path>
                        </svg>
                    </i>
                    Pribadi
                </h2>
            </div>

            <ol class="section--list">
                <li class="section--item section--item-personal">
                    <div class="section--heading-group">
                        <div class="section--date">
                            Nama
                        </div>
                        <div class="section--heading">
                            <h3>
                                <?= ucwords($firstName) ?> <?= ucwords($lastName) ?>
                            </h3>
                        </div>
                    </div>
                </li>

                <li class="section--item section--item-personal">
                    <div class="section--heading-group">
                        <div class="section--date">
                            Alamat
                        </div>
                        <div class="section--heading">
                            <h3><?= ucwords($meta_streetName) . ' ' . $meta_postalCode . ' ' . ucwords($meta_city); ?>
                            </h3>
                        </div>
                    </div>
                </li>


                <li class="section--item section--item-personal">
                    <div class="section--heading-group">
                        <div class="section--date">
                            Nomor telepon
                        </div>
                        <div class="section--heading">
                            <h3> <?= $meta_phoneNumber; ?></h3>
                        </div>
                    </div>
                </li>

                <li class="section--item section--item-personal">
                    <div class="section--heading-group">
                        <div class="section--date">
                            Email
                        </div>
                        <div class="section--heading">
                            <h3> <?= $email; ?></h3>
                        </div>
                    </div>
                </li>


                <li class="section--item section--item-personal">
                    <div class="section--heading-group">
                        <div class="section--date">
                            Tanggal lahir
                        </div>
                        <div class="section--heading">
                            <h3> <?= date('d-m-Y', strtotime($meta_dateOfBirth));; ?>
                            </h3>
                        </div>
                    </div>
                </li>



                <li class="section--item section--item-personal">
                    <div class="section--heading-group">
                        <div class="section--date">
                            Tempat lahir
                        </div>
                        <div class="section--heading">
                            <h3> <?= ucwords($meta_placeOfBirth) ?></h3>
                        </div>
                    </div>
                </li>

                <li class="section--item section--item-personal">
                    <div class="section--heading-group">
                        <div class="section--date">
                            Jenis kelamin
                        </div>
                        <div class="section--heading">
                            <h3> <?php if ($meta_gender = "m") {
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
                            </h3>
                        </div>
                    </div>
                </li>


                <li class="section--item section--item-personal">
                    <div class="section--heading-group">
                        <div class="section--date">
                            Kebangsaan
                        </div>
                        <div class="section--heading">
                            <h3> <?= ucwords($meta_nationality); ?></h3>
                        </div>
                    </div>
                </li>

                <li class="section--item section--item-personal">
                    <div class="section--heading-group">
                        <div class="section--date">
                            Status pernikahan
                        </div>
                        <div class="section--heading">
                            <h3> <?= ucwords($meta_maritalStatus); ?></h3>
                        </div>
                    </div>
                </li>


                <li class="section--item section--item-personal">
                    <div class="section--heading-group">
                        <div class="section--date">
                            SIM
                        </div>
                        <div class="section--heading">
                            <h3> <?= $meta_drivingLicenses; ?></h3>
                        </div>
                    </div>
                </li>

                <li class="section--item section--item-personal">
                    <div class="section--heading-group">
                        <div class="section--date">
                            Website
                        </div>
                        <div class="section--heading">
                            <h3> <?= $meta_website; ?></h3>
                        </div>
                    </div>
                </li>

                <li class="section--item section--item-personal">
                    <div class="section--heading-group">
                        <div class="section--date">
                            LinkedIn
                        </div>
                        <div class="section--heading">
                            <h3> <?= $meta_linkedin; ?></h3>
                        </div>
                    </div>
                </li>
            </ol>

        </div>



        <div class="section">

            <div class="section--title">
                <h2>
                    <i class="section--title-icon single-textarea">
                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 17H4v2h10v-2zm6-8H4v2h16V9zM4 15h16v-2H4v2zM4 5v2h16V5H4z"></path>
                            <path d="M0 0h24v24H0z" fill="none"></path>
                        </svg>
                    </i>
                    Profil

                </h2>
            </div>

            <div class="section--content section--content-single-textarea">
                <p><?= ucfirst($profile_description); ?></p>
            </div>
        </div>






        <div class="section">

            <div class="section--title">
                <h2>
                    <i class="section--title-icon work">
                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0zm10 5h4v2h-4zm0 0h4v2h-4z" fill="none"></path>
                            <path d="M10 16v-1H3.01L3 19c0 1.11.89 2 2 2h14c1.11 0 2-.89 2-2v-4h-7v1h-4zm10-9h-4.01V5l-2-2h-4l-2 2v2H4c-1.1 0-2 .9-2 2v3c0 1.11.89 2 2 2h6v-2h4v2h6c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-6 0h-4V5h4v2z"></path>
                        </svg>
                    </i>
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
                    <i class="section--title-icon education">
                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"></path>
                        </svg>
                    </i>
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





        <div class="section">

            <div class="section--title">
                <h2>
                    <i class="section--title-icon">
                        <svg fill="#fff" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                            <path d="M0 0h24v24H0z" fill="none"></path>
                        </svg>
                    </i>
                    Minat
                </h2>
            </div>


            <div class="section--content section--content-single-textarea">
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

        </div>






        <div class="section">

            <div class="section--title">
                <h2>
                    <i class="section--title-icon skill">
                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M13 1.07V9h7c0-4.08-3.05-7.44-7-7.93zM4 15c0 4.42 3.58 8 8 8s8-3.58 8-8v-4H4v4zm7-13.93C7.05 1.56 4 4.92 4 9h7V1.07z"></path>
                        </svg>
                    </i>
                    Keahlian
                </h2>
            </div>


            <ol class="section--list skills">
                <?php
                foreach ($skill_name as list($name, $level)) {
                ?>
                    <li class="section--item">
                        <div class="section--heading-group">
                            <div class="section--heading">
                                <h3><?= ucwords($name); ?></h3>
                            </div>

                            <div class="section--sub-heading">
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
                                ?>
                            </div>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ol>

        </div>






        <div class="section">

            <div class="section--title">
                <h2>
                    <i class="section--title-icon single-textarea">
                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 17H4v2h10v-2zm6-8H4v2h16V9zM4 15h16v-2H4v2zM4 5v2h16V5H4z"></path>
                            <path d="M0 0h24v24H0z" fill="none"></path>
                        </svg>
                    </i>
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