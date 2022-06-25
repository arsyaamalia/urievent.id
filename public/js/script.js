const general = document.querySelector(".form-general");
const details = document.querySelector(".form-details");
const additional = document.querySelector(".form-additional");
const checkout = document.querySelector(".form-checkout");

function overlayGeneral() {
  console.log("berhasil masuk overlayGeneral");
  general.style.display = "block";
  details.style.display = "none";
  additional.style.display = "none";
  checkout.style.display = "none";
  document.getElementById("tahapan-general-aktif").style.backgroundColor = "#0f3460";
  document.getElementById("back-number-change-general").style.backgroundColor = "#fff";
  document.getElementById("number-change-general").style.color = "#0f3460";
  document.getElementById("title-change-general").style.color = "#fff";
  document.getElementById("tahapan-details-aktif").style.backgroundColor = "#fff";
  document.getElementById("back-number-change-details").style.backgroundColor = "#ddd";
  document.getElementById("number-change-details").style.color = "rgb(143, 143, 143)";
  document.getElementById("title-change-details").style.color = "rgb(143, 143, 143)";
  document.getElementById("tahapan-additional-aktif").style.backgroundColor = "#fff";
  document.getElementById("back-number-change-additional").style.backgroundColor = "#ddd";
  document.getElementById("number-change-additional").style.color = "rgb(143, 143, 143)";
  document.getElementById("title-change-additional").style.color = "rgb(143, 143, 143)";
  document.getElementById("tahapan-checkout-aktif").style.backgroundColor = "#fff";
  document.getElementById("back-number-change-checkout").style.backgroundColor = "#ddd";
  document.getElementById("number-change-checkout").style.color = "rgb(143, 143, 143)";
  document.getElementById("title-change-checkout").style.color = "rgb(143, 143, 143)";
}

function overlayDetails() {
  console.log("berhasil masuk overlayDetails");
  general.style.display = "none";
  details.style.display = "block";
  additional.style.display = "none";
  checkout.style.display = "none";
  document.getElementById("tahapan-details-aktif").style.backgroundColor = "#0f3460";
  document.getElementById("back-number-change-details").style.backgroundColor = "#fff";
  document.getElementById("number-change-details").style.color = "#0f3460";
  document.getElementById("title-change-details").style.color = "#fff";
  document.getElementById("tahapan-general-aktif").style.backgroundColor = "#fff";
  document.getElementById("back-number-change-general").style.backgroundColor = "#ddd";
  document.getElementById("number-change-general").style.color = "rgb(143, 143, 143)";
  document.getElementById("title-change-general").style.color = "rgb(143, 143, 143)";
  document.getElementById("tahapan-additional-aktif").style.backgroundColor = "#fff";
  document.getElementById("back-number-change-additional").style.backgroundColor = "#ddd";
  document.getElementById("number-change-additional").style.color = "rgb(143, 143, 143)";
  document.getElementById("title-change-additional").style.color = "rgb(143, 143, 143)";
  document.getElementById("tahapan-checkout-aktif").style.backgroundColor = "#fff";
  document.getElementById("back-number-change-checkout").style.backgroundColor = "#ddd";
  document.getElementById("number-change-checkout").style.color = "rgb(143, 143, 143)";
  document.getElementById("title-change-checkout").style.color = "rgb(143, 143, 143)";
}

function overlayAdditional() {
  console.log("berhasil masuk overlayAdditional");
  general.style.display = "none";
  details.style.display = "none";
  additional.style.display = "block";
  checkout.style.display = "none";
  document.getElementById("tahapan-additional-aktif").style.backgroundColor = "#0f3460";
  document.getElementById("back-number-change-additional").style.backgroundColor = "#fff";
  document.getElementById("number-change-additional").style.color = "#0f3460";
  document.getElementById("title-change-additional").style.color = "#fff";
  document.getElementById("tahapan-general-aktif").style.backgroundColor = "#fff";
  document.getElementById("back-number-change-general").style.backgroundColor = "#ddd";
  document.getElementById("number-change-general").style.color = "rgb(143, 143, 143)";
  document.getElementById("title-change-general").style.color = "rgb(143, 143, 143)";
  document.getElementById("tahapan-details-aktif").style.backgroundColor = "#fff";
  document.getElementById("back-number-change-details").style.backgroundColor = "#ddd";
  document.getElementById("number-change-details").style.color = "rgb(143, 143, 143)";
  document.getElementById("title-change-details").style.color = "rgb(143, 143, 143)";
  document.getElementById("tahapan-checkout-aktif").style.backgroundColor = "#fff";
  document.getElementById("back-number-change-checkout").style.backgroundColor = "#ddd";
  document.getElementById("number-change-checkout").style.color = "rgb(143, 143, 143)";
  document.getElementById("title-change-checkout").style.color = "rgb(143, 143, 143)";
}

function overlayCheckout() {
  console.log("berhasil masuk overlayCheckout");
  general.style.display = "none";
  details.style.display = "none";
  additional.style.display = "none";
  checkout.style.display = "block";
  document.getElementById("tahapan-checkout-aktif").style.backgroundColor = "#0f3460";
  document.getElementById("back-number-change-checkout").style.backgroundColor = "#fff";
  document.getElementById("number-change-checkout").style.color = "#0f3460";
  document.getElementById("title-change-checkout").style.color = "#fff";
  document.getElementById("tahapan-general-aktif").style.backgroundColor = "#fff";
  document.getElementById("back-number-change-general").style.backgroundColor = "#ddd";
  document.getElementById("number-change-general").style.color = "rgb(143, 143, 143)";
  document.getElementById("title-change-general").style.color = "rgb(143, 143, 143)";
  document.getElementById("tahapan-details-aktif").style.backgroundColor = "#fff";
  document.getElementById("back-number-change-details").style.backgroundColor = "#ddd";
  document.getElementById("number-change-details").style.color = "rgb(143, 143, 143)";
  document.getElementById("title-change-details").style.color = "rgb(143, 143, 143)";
  document.getElementById("tahapan-additional-aktif").style.backgroundColor = "#fff";
  document.getElementById("back-number-change-additional").style.backgroundColor = "#ddd";
  document.getElementById("number-change-additional").style.color = "rgb(143, 143, 143)";
  document.getElementById("title-change-additional").style.color = "rgb(143, 143, 143)";
}

$(document).ready(function () {
  // INI ADD FIELD BUAT STEP BEFORE
  // add row
  $("#addRow").click(function () {
    var html = "";
    html += '<div id="inputFormRow">';
    html += '<div class="input-group mb-3">';
    html += '<input type="text" name="title[]" class="add-input" placeholder="Insert Other Step here" autocomplete="off">';
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
    htmlafter += '<input type="text" name="title[]" class="fadd-input" placeholder="Insert Other Step here" autocomplete="off">';
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
    html += '<input type="text" name="title[]" class="add-input" placeholder="Insert Other Value here" autocomplete="off">';
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
  $("#addRowPackage").click(function () {
    var html = "";
    html += '<div id="inputFormRowPackage">';
    html += '<div class="input-group mb-3">';
    html += '<label for="package-name" class="upload-label">Package Category Name</label><br>';
    html += '<input type="text" name="package-name" id="package-name" placeholder="Input package category name here" required /><br>';
    html += '<label for="package-desc" class="upload-label">Package Category Description</label><br>';
    html += '<textarea name="package-desc" id="package-desc" cols="30" rows="6" placeholder="Description of package category. Ex: Bronze Package = 2x Upload Feed" required></textarea><br>';
    html += '<label for="package-prize" class="upload-label">Package Prize (Rp)</label><br>';
    html += '<input type="number" name="package-prize" id="package-prize" placeholder="25000" min="0.00" max="10000.00" step="0.01" required><br>';
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

button.onclick = () => {
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
