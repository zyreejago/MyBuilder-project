// File: searchTable.js

document.addEventListener("DOMContentLoaded", function () {
  // Fungsi untuk melakukan pencarian
  document.getElementById("filter").addEventListener("keyup", function () {
    let input, filter, table, tr, td1, td2, i, txtValue1, txtValue2;
    input = document.getElementById("filter");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
      td1 = tr[i].getElementsByTagName("td")[1]; // Kolom kedua
      td2 = tr[i].getElementsByTagName("td")[4]; // Kolom ketiga
      if (td1 && td2) {
        txtValue1 = td1.textContent || td1.innerText;
        txtValue2 = td2.textContent || td2.innerText;
        let concatenatedText = txtValue1 + " " + txtValue2; // Gabungkan teks dari kedua kolom
        if (concatenatedText.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  });
});
