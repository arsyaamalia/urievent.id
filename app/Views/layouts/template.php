<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/sponsorship.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <header>
        <div class="header">
            <div class="nav-left">
                <div class="urievent">
                    <a href="/pages" class="clicked-urievent">UriEvent</a>
                </div>
                <div class="nav">
                    <ul>
                        <li><a href="/pages/about" class="nav-link">About Us</a></li>
                        <li><a href="/pages/advertise" class="nav-link">Advertise With Us</a></li>
                        <li><a href="/pages/medpart_name" class="nav-link">Program</a></li>
                        <li>
                            <div class="search-box-2">
                                <form action="/pages/search">
                                    <input type="text" placeholder="Mau cari apa?" name="cari" style="color: black;">
                                    <div class="search-icon">
                                        <i class="fas fa-search"></i>
                                    </div>
                                    <button class="search-button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </form>
                                <div class="cancel-icon">
                                    <i class="fas fa-times"></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header-nav-right">
                <div class="nav-right-item" id="addheight" onmouseover="mouseOver()" onmouseout="mouseOut()">
                    <div class="profile-link">
                        <img src="/img/foto-arsya.jpg" class="nav-right-icon" id="message">
                    </div>
                </div>
                <div class="nav-right-item">
                    <a href="/pages/urichat">
                        <div class="urichat-icon">
                            <img src="/icon/message.png" class="nav-right-icon">
                        </div>
                    </a>
                </div>
                <div class="nav-right-item">
                    <a href="/upload">
                        <div class="upload-button">
                            <p>Upload</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </header>
    <div class="profile-hover" id="buathover" onmouseover="mouseOver()" onmouseout="mouseOut()">
        <div class="profil-hover-wrap">
            <a href="/pages/edit-profile">
                <div class="profile-hover-item">
                    <h3>Edit Profile</h3>
                </div>
            </a>
        </div>
        <div class="profile-hover-line">
            <hr>
        </div>
        <div class="profil-hover-wrap">
            <a href="/pages/coin">
                <div class="profile-hover-item">
                    <h3>UriCoin</h3>
                </div>
            </a>
        </div>
        <div class="profil-hover-wrap">
            <a href="/pages/list">
                <div class="profile-hover-item">
                    <h3>UriList</h3>
                </div>
            </a>
        </div>
        <div class="profil-hover-wrap">
            <a href="/pages/service">
                <div class="profile-hover-item">
                    <h3>UriService</h3>
                </div>
            </a>
        </div>
        <div class="profil-hover-wrap">
            <a href="/pages/premium">
                <div class="profile-hover-item">
                    <h3>UriPremium</h3>
                </div>
            </a>
        </div>
        <div class="profile-hover-line">
            <hr>
        </div>
        <div class="profil-hover-wrap">
            <a href="/pages/setting">
                <div class="profile-hover-item">
                    <h3>Account Settings</h3>
                </div>
            </a>
        </div>
        <div class="profil-hover-wrap">
            <a href="/sign">
                <div class="profile-hover-item">
                    <h3>Sign Out</h3>
                </div>
            </a>
        </div>
    </div>

    <?= $this->renderSection('content') ?>

    <div class="footer">
        <div class="nav-bottom">
            <div class="nav-bottom-box">
                <h5>Categories</h5>
                <div class="nav-container-link">
                    <a href="#">
                        <p class="nav-bottom-link">Media Partner</p>
                    </a>
                    <a href="#">
                        <p class="nav-bottom-link">Sponsorship</p>
                    </a>
                    <a href="#">
                        <p class="nav-bottom-link">Vendor</p>
                    </a>
                    <a href="#">
                        <p class="nav-bottom-link">Venue</p>
                    </a>
                </div>
            </div>
            <div class="nav-bottom-box">
                <h5>UriEvent</h5>
                <div class="nav-container-link">
                    <a href="/pages/about">
                        <p class="nav-bottom-link">About Us</p>
                    </a>
                    <a href="/pages/advertise">
                        <p class="nav-bottom-link">Advertise With Us</p>
                    </a>
                    <a href="#">
                        <p class="nav-bottom-link">Career</p>
                    </a>
                    <a href="/pages/program">
                        <p class="nav-bottom-link">Program</p>
                    </a>
                    <a href="/privacy">
                        <p class="nav-bottom-link">Privacy Policy</p>
                    </a>
                    <a href="/terms">
                        <p>Terms & Conditions</p>
                    </a>
                </div>
            </div>
            <div class="nav-bottom-box">
                <h5>Contact Us</h5>
                <div class="nav-container-link">
                    <a href="https://wa.me/6282228544074">
                        <div class="contact-box">
                            <div class="icon-contact">
                                <img src="/icon/whatsapp.png" alt="Whatsapp">
                            </div>
                            <div class="text-contact">
                                <p>+62 822-2854-4074</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="nav-container-link">
                    <a href="https://instagram.com/urievent.id">
                        <div class="contact-box">
                            <div class="icon-contact">
                                <img src="/icon/instagram.png" alt="Instagram">
                            </div>
                            <div class="text-contact">
                                <p>@urievent.id</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="nav-container-link">
                    <a href="https://arsyaamalia1@gmail.com">
                        <div class="contact-box">
                            <div class="icon-contact">
                                <img src="/icon/email.png" alt="Email">
                            </div>
                            <div class="text-contact">
                                <p>halo@urievent.id</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="nav-container-link">
                    <a href="https://urievent.medium.com">
                        <div class="contact-box">
                            <div class="icon-contact">
                                <img src="/icon/medium.png" alt="Medium">
                            </div>
                            <div class="text-contact">
                                <p>UriEvent</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="nav-bottom-box">
                <h5>Office</h5>
                <p class="nav-bottom-link">Fakultas Ilmu Komputer</p>
                <p class="nav-bottom-link">UPN "Veteran" Jawa Timur</p>
                <p>Jl. Rungkut Madya No.1, Gn. Anyar, Kec. Gn. Anyar, Kota SBY, Jawa Timur 60294</p>
            </div>
        </div>
        <div class="credit">
            <h5>Copyright © 2022 UriEvent. All Rights Reserved</h5>
        </div>
    </div>
    </div>


    <script>
        const hoverprofile = document.getElementById('buathover');

        function mouseOver() {
            console.log("berhasil masuk hover profile");
            hoverprofile.style.display = "block";
        }

        function mouseOut() {
            hoverprofile.style.display = "none";
        }

        const searchBox = document.querySelector(".search-box-2");
        const searchBtn = document.querySelector(".search-icon");
        const cancelBtn = document.querySelector(".cancel-icon");
        searchBtn.onclick = () => {
            searchBox.classList.add("active");
            searchBtn.classList.add("active");
            cancelBtn.classList.add("active");
        }
        cancelBtn.onclick = () => {
            searchBox.classList.remove("active");
            searchBtn.classList.remove("active");
            cancelBtn.classList.remove("active");
        }

        // const general = document.querySelectorAll(".form-general");
        // const details = document.querySelectorAll(".form-details");
        // const additional = document.querySelectorAll(".form-additional");
        // const checkout = document.querySelectorAll(".form-checkout");

        // function overlayGeneral() {
        // general.style.display = "block";
        // details.style.display = "none";
        // additional.style.display = "none";
        // checkout.style.display = "none";
        // console.log("berhasil masuk overlayGeneral");
        // }

        // function overlayDetails() {
        // general.style.display = "none";
        // details.style.display = "block";
        // additional.style.display = "none";
        // checkout.style.display = "none";
        // }

        // function overlayAdditional() {
        // general.style.display = "none";
        // details.style.display = "none";
        // additional.style.display = "block";
        // checkout.style.display = "none";
        // }

        // function overlayCheckout() {
        // general.style.display = "none";
        // details.style.display = "none";
        // additional.style.display = "none";
        // checkout.style.display = "block";
        // }

        // $(document).ready(function () {
        // // INI ADD FIELD BUAT STEP BEFORE
        // // add row
        // $("#addRow").click(function () {
        //     var html = "";
        //     html += '<div id="inputFormRow">';
        //     html += '<div class="input-group mb-3">';
        //     html += '<input type="text" name="title[]" class="form-control m-input" placeholder="Insert Other Step here" autocomplete="off">';
        //     html += '<div class="input-group-append">';
        //     html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
        //     html += "</div>";
        //     html += "</div>";

        //     $("#newRow").append(html);
        // });

        // // remove row
        // $(document).on("click", "#removeRow", function () {
        //     $(this).closest("#inputFormRow").remove();
        // });

        // // INI ADD FIELD BUAT STEP AFTER
        // // add row
        // $("#addRowAfter").click(function () {
        //     var htmlafter = "";
        //     htmlafter += '<div id="inputFormRowAfter">';
        //     htmlafter += '<div class="input-group mb-3">';
        //     htmlafter += '<input type="text" name="title[]" class="form-control m-input" placeholder="Insert Other Step here" autocomplete="off">';
        //     htmlafter += '<div class="input-group-append">';
        //     htmlafter += '<button id="removeRowAfter" type="button" class="btn btn-danger">Remove</button>';
        //     htmlafter += "</div>";
        //     htmlafter += "</div>";

        //     $("#newRowAfter").append(htmlafter);
        // });

        // // remove row
        // $(document).on("click", "#removeRowAfter", function () {
        //     $(this).closest("#inputFormRowAfter").remove();
        // });

        // // INI ADD FIELD BUAT VALUE
        // // add row
        // $("#addRowValue").click(function () {
        //     var html = "";
        //     html += '<div id="inputFormRowValue">';
        //     html += '<div class="input-group mb-3">';
        //     html += '<input type="text" name="title[]" class="form-control m-input" placeholder="Insert Other Value here" autocomplete="off">';
        //     html += '<div class="input-group-append">';
        //     html += '<button id="removeRowValue" type="button" class="btn btn-danger">Remove</button>';
        //     html += "</div>";
        //     html += "</div>";
        //     $("#newRowValue").append(html);
        // });

        // // remove row
        // $(document).on("click", "#removeRowValue", function () {
        //     $(this).closest("#inputFormRowValue").remove();
        // });

        // // INI ADD FIELD BUAT PACKAGE
        // // add row
        // $("#addRowPackage").click(function () {
        //     var html = "";
        //     html += '<div id="inputFormRowPackage">';
        //     html += '<div class="input-group mb-3">';
        //     html += '<label for="package-name" class="upload-label">Package Category Name</label><br>';
        //     html += '<input type="text" name="package-name" id="package-name" placeholder="Input package category name here" required /><br>';
        //     html += '<label for="package-desc" class="upload-label">Package Category Description</label><br>';
        //     html += '<textarea name="package-desc" id="package-desc" cols="30" rows="6" placeholder="Description of package category. Ex: Bronze Package = 2x Upload Feed" required></textarea><br>';
        //     html += '<label for="package-prize" class="upload-label">Package Prize (Rp)</label><br>';
        //     html += '<input type="number" name="package-prize" id="package-prize" placeholder="25000" min="0.00" max="10000.00" step="0.01" required><br>';
        //     html += '<div class="input-group-append">';
        //     html += '<button id="removeRowPackage" type="button" class="btn btn-danger">Remove</button>';
        //     html += "</div>";
        //     html += "</div>";
        //     $("#newRowPackage").append(html);
        // });

        // // remove row
        // $(document).on("click", "#removeRowPackage", function () {
        //     $(this).closest("#inputFormRowPackage").remove();
        // });

        // //INI ADD QUESTION FORM
        // $("#add").click(function () {
        //     var lastField = $("#buildyourform div:last");
        //     var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
        //     var fieldWrapper = $('<div class="fieldwrapper" id="field' + intId + '"/>');
        //     fieldWrapper.data("idx", intId);
        //     var fName = $('<input type="text" class="fieldname" />');
        //     var fType = $('<select class="fieldtype"><option value="checkbox">Checked</option><option value="textbox">Text</option><option value="textarea">Paragraph</option></select>');
        //     var removeButton = $('<input type="button" class="remove" value="-" />');
        //     removeButton.click(function () {
        //     $(this).parent().remove();
        //     });
        //     fieldWrapper.append(fName);
        //     fieldWrapper.append(fType);
        //     fieldWrapper.append(removeButton);
        //     $("#buildyourform").append(fieldWrapper);
        // });
        // $("#preview").click(function () {
        //     $("#yourform").remove();
        //     var fieldSet = $('<fieldset id="yourform"><legend>Your Form</legend></fieldset>');
        //     $("#buildyourform div").each(function () {
        //     var id = "input" + $(this).attr("id").replace("field", "");
        //     var label = $('<label for="' + id + '">' + $(this).find("input.fieldname").first().val() + "</label>");
        //     var input;
        //     switch ($(this).find("select.fieldtype").first().val()) {
        //         case "checkbox":
        //         input = $('<input type="checkbox" id="' + id + '" name="' + id + '" />');
        //         break;
        //         case "textbox":
        //         input = $('<input type="text" id="' + id + '" name="' + id + '" />');
        //         break;
        //         case "textarea":
        //         input = $('<textarea id="' + id + '" name="' + id + '" ></textarea>');
        //         break;
        //     }
        //     fieldSet.append(label);
        //     fieldSet.append(input);
        //     });
        //     $("body").append(fieldSet);
        // });
        // });
    </script>
</body>

</html>