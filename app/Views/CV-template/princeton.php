<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="format-detection" content="telephone=no">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400" rel="stylesheet">
    <!-- ./fonts -->

    <style>
        @import 'https://fonts.googleapis.com/css?family=Slabo+27px';
        @import 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400';
    </style>

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
            font: 30px "Slabo 27px", Arial;
            margin: 0;
            padding: 25px 0 5px 0;
            font-weight: 600
        }

        h1 span {
            position: relative;
            font-style: normal;
            display: inline;
            margin-right: 1px;
            padding: 0
        }

        h2 {
            font: 16px "Slabo 27px", Arial;

            text-transform: uppercase;
            font-weight: 700;
            margin: 0;
            padding: 0
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
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid #d2d2d2
        }

        .section.section--summary .section--content {
            padding-top: 0;
            padding-left: 0
        }

        .section--name {
            position: relative
        }

        .section--name.has--avatar h1 {
            padding-left: 70px
        }



        .section--avatar {
            display: inline-block;
            position: absolute;
            top: 15px;
            padding: 0;
            margin: 0;
            height: 55px;
            width: 55px;
            border-radius: 50%;
            -webkit-background-size: cover !important;
            background-size: cover !important
        }

        .section--title {
            display: block;
            position: relative;
            z-index: 99;
            margin: 20px 0 0 0;
            background: #fff;
            padding: 15px 0 15px 0;
            page-break-inside: avoid;
            border-top: 2px solid #d2d2d2
        }

        .section--title span {
            display: inline-block;
            margin-right: 0
        }

        .section--heading-group {
            display: block;
            padding: 15px 0 0 150px;
            margin: 0;
            page-break-inside: avoid
        }

        .section--list {
            display: block;
            list-style: none;
            padding: 0;
            margin: 0
        }

        .section--list.no-indent .section--item .section--heading-group {
            padding-left: 0
        }

        .section--list.no-indent .section--item .section--content {
            padding-left: 0
        }

        .section--list.section--list-skills .section--sub-heading {
            padding-top: 0;
            max-width: 120px;
            text-align: right;
            font-style: normal
        }

        .section--list.section--list-skills .section--heading-group {
            padding-left: 0
        }

        .section--list.section--list-skills .section--date {
            left: 150px;
            text-align: left;
            font-weight: 700
        }

        .section--item {
            display: block;
            position: relative;
            list-style: none;
            padding: 0;
            margin: 0
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
            margin: 5px 0 0 -5px
        }

        .skills--level {
            display: inline-block;
            position: relative;
            top: 0;
            height: 7px;
            width: 150px;
            padding: 0;
            margin: 0;
            background: #eaeaea;
            border-radius: 6px
        }

        .skills--level-filler {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background: #b1b1b1;
            border-radius: 6px
        }

        .skills--stars {
            display: inline-block;
            position: relative;
            top: 4px
        }

        .skills--stars svg {
            fill: #b1b1b1
        }

        .skills--stars svg.active {
            fill: #2b2b38
        }

        .section--date {
            position: absolute;
            left: 0;
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
            padding: 5px 0 0 150px;
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

        .c--333333 h1,
        .c--333333 h2 {
            color: #333 !important
        }

        .c--da4453 h1,
        .c--da4453 h2 {
            color: #da4453 !important
        }

        .c--3f6592 h1,
        .c--3f6592 h2 {
            color: #3f6592 !important
        }

        .c--82652b h1,
        .c--82652b h2 {
            color: #82652b !important
        }

        .c--37bc9b h1,
        .c--37bc9b h2 {
            color: #37bc9b !important
        }
    </style>


</head>

<body class="c--333333" style="overflow: hidden !important;">

    <section class="sections">

        <div class="section--name  has--avatar">


            <?php
            if ($avatar != null) {
                $path = 'avatar/' . $avatar;
                $type = pathinfo($path, PATHINFO_EXTENSION);
                $data = file_get_contents($path);
                $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                echo '<img class="section--avatar class="img--avatar"  src="' . $base64 . '" />';
            }
            ?>


            <h1>Curriculum Vitae</h1>
        </div>


        <div class="section">
            <div class="section--title">
                <h2>
                    Pribadi
                </h2>
            </div>

            <ol class="section--list">
                <li class="section--item">
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

                <li class="section--item">
                    <div class="section--heading-group">
                        <div class="section--date">
                            Alamat
                        </div>
                        <div class="section--heading">
                            <h3><?= ucwords($meta_streetName) . ' ' . $meta_postalCode . ' ' . ucwords($meta_city); ?></h3>
                        </div>
                    </div>
                </li>

                <li class="section--item">
                    <div class="section--heading-group">
                        <div class="section--date">
                            Nomor telepon
                        </div>
                        <div class="section--heading">
                            <h3><?= $meta_phoneNumber; ?></h3>
                        </div>
                    </div>
                </li>

                <li class="section--item">
                    <div class="section--heading-group">
                        <div class="section--date">
                            Email
                        </div>
                        <div class="section--heading">
                            <h3><?= $email; ?></h3>
                        </div>
                    </div>
                </li>


                <li class="section--item">
                    <div class="section--heading-group">
                        <div class="section--date">
                            Tanggal lahir
                        </div>
                        <div class="section--heading">
                            <h3>
                                <?= date('d-m-Y', strtotime($meta_dateOfBirth)); ?>
                            </h3>
                        </div>
                    </div>
                </li>



                <li class="section--item">
                    <div class="section--heading-group">
                        <div class="section--date">
                            Tempat lahir
                        </div>
                        <div class="section--heading">
                            <h3><?= ucwords($meta_placeOfBirth) ?></h3>
                        </div>
                    </div>
                </li>


                <li class="section--item">
                    <div class="section--heading-group">
                        <div class="section--date">
                            Jenis kelamin
                        </div>
                        <div class="section--heading">
                            <h3><?php if ($meta_gender = "m") {
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

                <li class="section--item">
                    <div class="section--heading-group">
                        <div class="section--date">
                            Kebangsaan
                        </div>
                        <div class="section--heading">
                            <h3><?= ucwords($meta_nationality); ?></h3>
                        </div>
                    </div>
                </li>



                <li class="section--item">
                    <div class="section--heading-group">
                        <div class="section--date">
                            Status pernikahan
                        </div>
                        <div class="section--heading">
                            <h3>
                                <?= ucwords($meta_maritalStatus); ?>
                            </h3>
                        </div>
                    </div>
                </li>


                <li class="section--item">
                    <div class="section--heading-group">
                        <div class="section--date">
                            SIM
                        </div>
                        <div class="section--heading">
                            <h3> <?= $meta_drivingLicenses; ?></h3>
                        </div>
                    </div>
                </li>

                <li class="section--item">
                    <div class="section--heading-group">
                        <div class="section--date">
                            Website
                        </div>
                        <div class="section--heading">
                            <h3><?= $meta_website; ?></h3>
                        </div>
                    </div>
                </li>

                <li class="section--item">
                    <div class="section--heading-group">
                        <div class="section--date">
                            LinkedIn
                        </div>
                        <div class="section--heading">
                            <h3><?= $meta_linkedin; ?></h3>
                        </div>
                    </div>
                </li>


            </ol>

        </div>




        <div class="section">

            <div class="section--title">
                <h2>
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
                    Pengalaman kerja
                </h2>
            </div>

            <?php
            foreach ($work_function as list($function, $city, $employer, $startMonth, $startYear, $endMonth, $endYear)) {
            ?>
                <?php if ($employer != null) {
                ?>
                    <ol class="section--list">
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
                    Keahlian
                </h2>
            </div>


            <ol class="section--list skills section--list-skills">

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