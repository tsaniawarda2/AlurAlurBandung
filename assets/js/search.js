console.log("MASUK");
const tombolCari = document.querySelector(".tombol-cari");
const keyword = document.querySelector(".keyword");
const container = document.querySelector(".konten");

keyword.addEventListener("keyup", function () {
  const xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  xhr.open("GET", "../../../assets/ajax/ajax_cari.php");
  xhr.send();
});
