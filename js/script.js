const tombolCari = document.querySelector(".tombol-cari");
const keyword = document.querySelector(".keyword");
const containers = document.querySelector(".containers");

// hilangkan tombol cari
tombolCari.style.display = "none";

// event ketika kita menuliskan keyword
keyword.addEventListener("keyup", function () {
  // fetch()
  fetch("../ajax/ajax_cari.php?keyword=" + keyword.value)
    .then((response) => response.text())
    .then((response) => {
      containers.innerHTML = response;
    })
    .catch((error) => console.log(error));
});
