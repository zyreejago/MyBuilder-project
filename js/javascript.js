// Ambil elemen input
const luasInput = document.getElementById("luasInput");
const hargaInput = document.getElementById("hargaInput");
const totalInput = document.getElementById("totalInput");

// Fungsi untuk menghitung total dan memperbarui input total
function updateTotal() {
  const luas = parseFloat(luasInput.value) || 0;
  const harga = parseFloat(hargaInput.value) || 0;

  const total = luas * harga;

  totalInput.value = total.toFixed(2);
}

// Tambahkan event listener untuk mendengarkan perubahan pada input luas dan harga
luasInput.addEventListener("input", updateTotal);
hargaInput.addEventListener("input", updateTotal);
