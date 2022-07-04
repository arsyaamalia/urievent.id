const defaultBtn = document.querySelector("#default-btn");
const customBtn = document.querySelector("#custom-btn");
const imageArea = document.querySelector(".edit-image-image"),
  img = imageArea.querySelector("img");

function defaultBtnActive() {
  const defaultBtn = document.querySelector("#default-btn");
  console.log("haloo");
  defaultBtn.click();
}

defaultBtn.addEventListener("click", function () {
  console.log("halooo");
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function () {
      console.log("haloooo");
      const result = reader.result;
      img.src = result;
    };
    reader.readAsDataURL(file);
  }
});

// const deleteBtn = document.querySelector("#delete-btn-avatar");

// function deleteBtnActive() {
//   console.log("halaa");
//   alert("Are you sure want to delete?");
//   imageArea.classList.remove("active");
// }
