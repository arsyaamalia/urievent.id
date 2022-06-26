const general = document.querySelector(".form-general");
const details = document.querySelector(".form-details");
const additional = document.querySelector(".form-additional");
const checkout = document.querySelector(".form-checkout");

const general1 = document.querySelector(".general1");
const details1 = document.querySelector(".details1");
const additional1 = document.querySelector(".additional1");
const checkout1 = document.querySelector(".checkout1");

const general2 = document.querySelector(".general2");
const details2 = document.querySelector(".details2");
const additional2 = document.querySelector(".additional2");
const checkout2 = document.querySelector(".checkout2");

function overlayGeneral() {
  console.log("berhasil masuk buttonGeneral");
  general1.style.display = "none";
  details1.style.display = "block";
  additional1.style.display = "block";
  checkout1.style.display = "block";

  general2.style.display = "block";
  details2.style.display = "none";
  additional2.style.display = "none";
  checkout2.style.display = "none";

  console.log("berhasil masuk overlayGeneral");
  general.style.display = "block";
  details.style.display = "none";
  additional.style.display = "none";
  checkout.style.display = "none";
}

function overlayDetails() {
  console.log("berhasil masuk buttonDetails");
  general1.style.display = "block";
  details1.style.display = "none";
  additional1.style.display = "block";
  checkout1.style.display = "block";

  general2.style.display = "none";
  details2.style.display = "block";
  additional2.style.display = "none";
  checkout2.style.display = "none";

  console.log("berhasil masuk overlayDetails");
  general.style.display = "none";
  details.style.display = "block";
  additional.style.display = "none";
  checkout.style.display = "none";
}

function overlayAdditional() {
  console.log("berhasil masuk buttonAdditional");
  general1.style.display = "block";
  details1.style.display = "block";
  additional1.style.display = "none";
  checkout1.style.display = "block";

  general2.style.display = "none";
  details2.style.display = "none";
  additional2.style.display = "block";
  checkout2.style.display = "none";

  console.log("berhasil masuk overlayAdditional");
  general.style.display = "none";
  details.style.display = "none";
  additional.style.display = "block";
  checkout.style.display = "none";
}

function overlayCheckout() {
  console.log("berhasil masuk buttonCheckout");
  general1.style.display = "block";
  details1.style.display = "block";
  additional1.style.display = "block";
  checkout1.style.display = "none";

  general2.style.display = "none";
  details2.style.display = "none";
  additional2.style.display = "none";
  checkout2.style.display = "block";

  console.log("berhasil masuk overlayCheckout");
  general.style.display = "none";
  details.style.display = "none";
  additional.style.display = "none";
  checkout.style.display = "block";
}

$(document).ready(function () {
  // INI ADD FIELD BUAT STEP BEFORE
  // add row
  $("#addRow").click(function () {
    var html = "";
    html += '<div id="inputFormRow">';
    html += '<div class="input-group mb-3">';
    html += '<input type="text" name="stepBefore[]" class="add-input" placeholder="Insert Other Step here" autocomplete="off">';
    html += '<img src="../icon/trash.png" id="removeRow">';
    html += "</div>";
    html += "</div>";

    $("#newRow").append(html);
  });

  // remove row
  $(document).on("click", "#removeRow", function () {
    $(this).closest("#inputFormRow").remove();
  });

  // INI ADD FIELD BUAT STEP AFTER
  // add row
  $("#addRowAfter").click(function () {
    var htmlafter = "";
    htmlafter += '<div id="inputFormRowAfter">';
    htmlafter += '<div class="input-group mb-3">';
    htmlafter += '<input type="text" name="stepAfter[]" class="fadd-input" placeholder="Insert Other Step here" autocomplete="off">';
    htmlafter += '<div class="input-group-append">';
    htmlafter += '<button id="removeRowAfter" type="button" class="btn btn-danger">Remove</button>';
    htmlafter += "</div>";
    htmlafter += "</div>";

    $("#newRowAfter").append(htmlafter);
  });

  // remove row
  $(document).on("click", "#removeRowAfter", function () {
    $(this).closest("#inputFormRowAfter").remove();
  });

  // INI ADD FIELD BUAT VALUE
  // add row
  $("#addRowValue").click(function () {
    var html = "";
    html += '<div id="inputFormRowValue">';
    html += '<div class="input-group mb-3">';
    html += '<input type="text" name="value[]" class="add-input" placeholder="Insert Other Value here" autocomplete="off">';
    html += '<div class="input-group-append">';
    html += '<button id="removeRowValue" type="button" class="btn btn-danger">Remove</button>';
    html += "</div>";
    html += "</div>";
    $("#newRowValue").append(html);
  });

  // remove row
  $(document).on("click", "#removeRowValue", function () {
    $(this).closest("#inputFormRowValue").remove();
  });

  // INI ADD FIELD BUAT PACKAGE
  // add row
  var ipackage = 0;
  console.log(ipackage);
  $("#addRowPackage").click(function () {
    ipackage++;
    console.log(ipackage);

    var html = "";
    html += '<div id="inputFormRowPackage">';
    html += '<div class="input-group mb-3">';
    html += '<label for="package-name" class="upload-label">Package Category Name</label><br>';
    html += '<input type="text" name="package[i][name]" id="package-name" placeholder="Input package category name here" required /><br>';
    html += '<label for="package-desc" class="upload-label">Package Category Description</label><br>';
    html += '<textarea name="package[i][desc]" id="package-desc" cols="30" rows="6" placeholder="Description of package category. Ex: Bronze Package = 2x Upload Feed" required></textarea><br>';
    html += '<label for="package-prize" class="upload-label">Package Prize (Rp)</label><br>';
    html += '<input type="number" name="package[i][prize]e" id="package-prize" placeholder="25000" min="0.00"  step="0.01" required><br>';
    html += '<div class="input-group-append">';
    html += '<button id="removeRowPackage" type="button" class="btn btn-danger">Remove</button>';
    html += "</div>";
    html += "</div>";
    $("#newRowPackage").append(html);
  });

  // remove row
  $(document).on("click", "#removeRowPackage", function () {
    $(this).closest("#inputFormRowPackage").remove();
  });

  //INI ADD QUESTION FORM
  $("#add").click(function () {
    var lastField = $("#buildyourform div:last");
    var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
    var fieldWrapper = $('<div class="fieldwrapper" id="field' + intId + '"/>');
    fieldWrapper.data("idx", intId);
    var fName = $('<input type="text" class="fieldname" />');
    var fType = $('<select class="fieldtype"><option value="checkbox">Checked</option><option value="textbox">Text</option><option value="textarea">Paragraph</option></select>');
    var removeButton = $('<input type="button" class="remove" value="-" />');
    removeButton.click(function () {
      $(this).parent().remove();
    });
    fieldWrapper.append(fName);
    fieldWrapper.append(fType);
    fieldWrapper.append(removeButton);
    $("#buildyourform").append(fieldWrapper);
  });
  $("#preview").click(function () {
    $("#yourform").remove();
    var fieldSet = $('<fieldset id="yourform"><legend>Your Form</legend></fieldset>');
    $("#buildyourform div").each(function () {
      var id = "input" + $(this).attr("id").replace("field", "");
      var label = $('<label for="' + id + '">' + $(this).find("input.fieldname").first().val() + "</label>");
      var input;
      switch ($(this).find("select.fieldtype").first().val()) {
        case "checkbox":
          input = $('<input type="checkbox" id="' + id + '" name="' + id + '" />');
          break;
        case "textbox":
          input = $('<input type="text" id="' + id + '" name="' + id + '" />');
          break;
        case "textarea":
          input = $('<textarea id="' + id + '" name="' + id + '" ></textarea>');
          break;
      }
      fieldSet.append(label);
      fieldSet.append(input);
    });
    $("body").append(fieldSet);
  });
});

//selecting all required elements
const dropArea = document.querySelector(".drag-area"),
dragText = dropArea.querySelector("header"),
button = dropArea.querySelector("button"),
input = dropArea.querySelector("input");
let file; //this is a global variable and we'll use it inside multiple functions

button.onclick = (e) => {
  e.preventDefault();
  input.click(); //if user click on the button then the input also clicked
};

input.addEventListener("change", function () {
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = this.files[0];
  dropArea.classList.add("active");
  showFile(); //calling function
});

//If user Drag File Over DropArea
dropArea.addEventListener("dragover", (event) => {
  event.preventDefault(); //preventing from default behaviour
  dropArea.classList.add("active");
  dragText.textContent = "Release an image";
});

//If user leave dragged File from DropArea
dropArea.addEventListener("dragleave", () => {
  dropArea.classList.remove("active");
  dragText.textContent = "Drag and drop an image";
});

//If user drop File on DropArea
dropArea.addEventListener("drop", (event) => {
  event.preventDefault(); //preventing from default behaviour
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = event.dataTransfer.files[0];
  showFile(); //calling function
});

function showFile() {
  let fileType = file.type; //getting selected file type
  let validExtensions = ["image/jpeg", "image/jpg", "image/png"]; //adding some valid image extensions in array
  if (validExtensions.includes(fileType)) {
    //if user selected file is an image file
    let fileReader = new FileReader(); //creating new FileReader object
    fileReader.onload = () => {
      let fileURL = fileReader.result; //passing user file source in fileURL variable
      // UNCOMMENT THIS BELOW LINE. I GOT AN ERROR WHILE UPLOADING THIS POST SO I COMMENTED IT
      let imgTag = `<img src="${fileURL}" alt="image">`; //creating an img tag and passing user selected file source inside src attribute
      dropArea.innerHTML = imgTag; //adding that created img tag inside dropArea container
    };
    fileReader.readAsDataURL(file);
  } else {
    alert("This is not an Image File!");
    dropArea.classList.remove("active");
    dragText.textContent = "Drag and drop an image";
  }
}

// const subcategory = document.querySelector(".subcategory");

// function callSubcategory() {
//   if(document.getElementById("category").value = "Media Partner"){
//     subcategory.style.display = "block";
//   }
//   else{
//     subcategory.style.display = "none";
//   }
// }