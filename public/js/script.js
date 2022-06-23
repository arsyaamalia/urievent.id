const general = document.querySelectorAll(".form-general");
const details = document.querySelectorAll(".form-details");
const additional = document.querySelectorAll(".form-additional");
const checkout = document.querySelectorAll(".form-checkout");

function overlayGeneral() {
  general.style.display = "block";
  details.style.display = "none";
  additional.style.display = "none";
  checkout.style.display = "none";
  console.log("berhasil masuk overlayGeneral");
}

function overlayDetails() {
  general.style.display = "none";
  details.style.display = "block";
  additional.style.display = "none";
  checkout.style.display = "none";
}

function overlayAdditional() {
  general.style.display = "none";
  details.style.display = "none";
  additional.style.display = "block";
  checkout.style.display = "none";
}

function overlayCheckout() {
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
    html += '<input type="text" name="title[]" class="form-control m-input" placeholder="Insert Other Step here" autocomplete="off">';
    html += '<div class="input-group-append">';
    html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
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
    htmlafter += '<input type="text" name="title[]" class="form-control m-input" placeholder="Insert Other Step here" autocomplete="off">';
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
    html += '<input type="text" name="title[]" class="form-control m-input" placeholder="Insert Other Value here" autocomplete="off">';
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
