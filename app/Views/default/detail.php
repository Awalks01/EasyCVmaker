<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/appstyle.css">
    <title>EasyCVMaker</title>
</head>

<body>
    <!--navbar-->
    <section id="nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/home/">
                    <span>
                        <img src="/img/Logo-white.png" alt="" width="120" height="34">
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/home/">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGK33CZ" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <form action="/app/create" method="post">
        <div id="app">
            <div class="container fade fade-entered">
                <div class="main center">
                    <div class="wizard">
                        <div class="page__header">
                            <header class="center">
                                <h1>Detail pribadi</h1>
                            </header>
                        </div>
                        <div class="wizard__inner">
                            <div class="form__personal form-enter-done">
                                <div class="form-section" style="padding-top: 0px;">
                                    <div class="form-section__header">
                                        <h2 class="form-section__title"><i class="form-section__title-icon"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="svg-person" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                                                </svg></i>Detail pribadi</h2>
                                    </div>
                                    <hr style="margin-top: 0px; margin-bottom: 20px;">
                                    <div class="form-section__content">
                                        <div class="form__form-group">
                                            <div class="form__form-row col-1">
                                                <div class="form__form-row--avatar">

                                                    <div class="form__form-row--avatar--label">
                                                        <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="12" cy="12" r="3.2"></circle>
                                                            <path d="M9 2L7.17 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2h-3.17L15 2H9zm3 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"></path>
                                                        </svg><span class="form__form-row--avatar--text">Tambahkan foto</span>
                                                    </div>

                                                    <div class="file-upload-content">
                                                        <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                                        <img class="file-upload-image" src="#" alt="your image" />
                                                        <div class="image-title-wrap">
                                                            <button type="button" onclick="removeUpload()" class="remove-image">Remove </button>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form__form-row--avatar-right">
                                                    <div class="form-element col-1" name="position-firstName"><label class="">Nama depan*</label>
                                                        <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="firstName" value="">
                                                    </div>
                                                    <div class="form-element col-1" name="position-lastName"><label class="">Nama belakang*</label>
                                                        <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="lastName" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form__form-row col-1">
                                                <div class="form-element col-2" name="position-email"><label class="">Alamat email*</label>
                                                    <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="email" value="">
                                                </div>
                                                <div class="form-element col-2" name="position-meta.phoneNumber"><label class="">Nomor telepon</label>
                                                    <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="meta.phoneNumber" value="">
                                                </div>
                                            </div>
                                            <div class="form__form-row col-1">
                                                <div class="form__form-row col-1">
                                                    <div class="form-element col-1" name="position-meta.streetName"><label class="">Alamat</label>
                                                        <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="meta.streetName" value="">
                                                    </div>
                                                </div>
                                                <div class="form__form-row col-1">
                                                    <div>
                                                        <div class="form-element col-2" name="position-meta.postalCode"><label class="">Kode pos</label>
                                                            <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="meta.postalCode" value="">
                                                        </div>
                                                        <div class="form-element col-2" name="position-meta.city"><label class="">Kota</label>
                                                            <input type="text" tabindex="" class="data-hj-whitelist" placeholder="mis. Jakarta" autocomplete="off" name="meta.city" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form__extra-options--slide" style="opacity: 1; display: block;">
                                                    <div class="form__form-row col-1">

                                                        <div class="form__form-row form-element--mobile col-1" style="margin-bottom: 0px;">
                                                            <div class="col-1">
                                                                <div class="form-element col-2" name="position-meta.dateOfBirth"><label class="">Tanggal lahir</label>
                                                                    <input type="date" tabindex="" class="data-hj-whitelist" autocomplete="off" name="meta.dateOfBirth" value="">
                                                                </div>
                                                                <div class="form-element col-2" name="position-meta.placeOfBirth"><label class="">Tempat lahir</label>
                                                                    <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="meta.placeOfBirth" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form__form-row col-1">
                                                        <div>
                                                            <div class="form-element col-2" name="position-meta.drivingLicenses">
                                                                <label class="">
                                                                    <div class="sc-htpNat fYMbTb">SIM
                                                                        <div class="sc-bwzfXH kNgcyi">
                                                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" color="#cbcbcb" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: rgb(203, 203, 203);">
                                                                                <path d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z"></path>
                                                                            </svg>
                                                                            <div class="sc-bdVaJa jFYCqK">Hanya sertakan jenis SIM Anda jika merupakan persyaratan yang relevan dengan posisi yang dilamar. Jika tidak, kosongkan.</div>
                                                                        </div>
                                                                    </div>
                                                                </label><input type="text" tabindex="" class="data-hj-whitelist" placeholder="" autocomplete="off" name="meta.drivingLicenses" value="">
                                                            </div>
                                                            <div class="form-element col-2 gender" name="position-meta.gender"><label class="">
                                                                    <div class="sc-htpNat fYMbTb">Jenis kelamin<div class="sc-bwzfXH kNgcyi"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" color="#cbcbcb" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: rgb(203, 203, 203);">
                                                                                <path d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z"></path>
                                                                            </svg>
                                                                            <div class="sc-bdVaJa jFYCqK">Hanya sertakan jenis kelamin Anda jika merupakan persyaratan yang relevan dengan posisi yang dilamar. Jika tidak, kosongkan.</div>
                                                                        </div>
                                                                    </div>
                                                                </label><select class="form-select-custom" name="meta.gender">
                                                                    <option value="0">Pilih</option>
                                                                    <option value="m">Laki-laki</option>
                                                                    <option value="f">Perempuan</option>
                                                                </select><i class="form-select-custom--arrow"></i></div>
                                                        </div>
                                                    </div>
                                                    <div class="form__form-row col-1">
                                                        <div>
                                                            <div class="form-element col-2" name="position-meta.nationality"><label class="">
                                                                    <div class="sc-htpNat fYMbTb">Kebangsaan<div class="sc-bwzfXH kNgcyi"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" color="#cbcbcb" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: rgb(203, 203, 203);">
                                                                                <path d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z"></path>
                                                                            </svg>
                                                                            <div class="sc-bdVaJa jFYCqK">Hanya sertakan kebangsaan Anda jika merupakan persyaratan yang relevan dengan posisi yang dilamar. Jika tidak, kosongkan.</div>
                                                                        </div>
                                                                    </div>
                                                                </label><input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="meta.nationality" value=""></div>
                                                            <div class="form-element col-2" name="position-meta.maritalStatus"><label class="">
                                                                    <div class="sc-htpNat fYMbTb">Status pernikahan<div class="sc-bwzfXH kNgcyi"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" color="#cbcbcb" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: rgb(203, 203, 203);">
                                                                                <path d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z"></path>
                                                                            </svg>
                                                                            <div class="sc-bdVaJa jFYCqK">Hanya sertakan status pernikahan Anda jika merupakan persyaratan yang relevan dengan posisi yang dilamar. Jika tidak, kosongkan.</div>
                                                                        </div>
                                                                    </div>
                                                                </label><input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="meta.maritalStatus" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="form__form-row col-1">
                                                        <div>
                                                            <div class="form-element col-2" name="position-meta.linkedin"><label class="">LinkedIn</label>
                                                                <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="meta.linkedin" value="">
                                                            </div>
                                                            <div class="form-element col-2" name="position-meta.website"><label class="">Website</label>
                                                                <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="meta.website" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn__add-form-section" style="margin-top: 10px;"><i class="btn__add-form-section--icon"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                                                    </svg></i><span class="btn__add-form-section--label">Informasi tambahan</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__buttons">
                                    <div class="form__button">
                                        <button type="submit" class="btn__large button--red">
                                            <div class="spinner--hidden">
                                                Selanjutnya
                                                <div class="btn__arrow-right">
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="svg-keyboard-arrow-right" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                                                    </svg>
                                                </div>
                                            </div>


                                        </button>
                                    </div>
                                    <div class="form__button-text form__button-text--privacy-policy">Dengan menklik selanjutnya anda akan lanjut ke tahap selanjutya dan setuju dengan data diri</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="heading__bg"></div>
                <div class="modals"></div>
            </div>
        </div>
    </form>


    <!-- footer -->
    <footer class="page-footer-container" style="background-color : #f71735;">
        <div class="page-footer -secondary">
            <div class="container">
                <div style="float:right;">
                    2021 © EasyCVmaker | Bujang-Developer | Team-Lord </div>
                <div style="float:right;margin-top:-40px; margin-right:30px;"></div>
            </div>
        </div>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.form__form-row--avatar--label').hide();

                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();

                    $('.image-title').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload();
            }
        }

        function removeUpload() {
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.form__form-row--avatar--label').show();
        }
        $('.form__form-row--avatar--label').bind('dragover', function() {
            $('.form__form-row--avatar--label').addClass('image-dropping');
        });
        $('.form__form-row--avatar--label').bind('dragleave', function() {
            $('.form__form-row--avatar--label').removeClass('image-dropping');
        });
    </script>

</body>

</html>