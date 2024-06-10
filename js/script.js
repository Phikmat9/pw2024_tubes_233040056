const tombolCari = document.querySelector(".tombol-cari");
const keyword = document.querySelector(".keyword");
const containers = document.querySelector(".containers");

// hilangkan tombol cari
tombolCari.style.display = "none";

// event ketika kita menuliskan keyword
keyword.addEventListener("keyup", function () {
  // ajax
  // xmlhttprequest

  //  const xhr = new XMLHttpRequest();

  //  xhr.onreadystatechange = function() {
  //     if(xhr.readyState == 4 && xhr.status == 200) {
  //         containers.innerHTML = xhr.responseText;
  //     }
  //  };

  //  xhr.open('get', '../ajax/ajax_cari.php?keyword=' + keyword.value);
  //     xhr.send();

  // fetch()
  fetch("../ajax/ajax_cari.php?keyword=" + keyword.value)
    .then((response) => response.text())
    .then((response) => (containers.innerHTML = response));
});
