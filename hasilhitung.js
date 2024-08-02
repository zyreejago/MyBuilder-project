// hasilhitung.js
angular.module("myApp", []).controller("myCtrl", function ($scope) {
  $scope.jumlah = 1;
  $scope.harga = 1;
  $scope.hitungHasil = function () {
    $scope.hasil = $scope.jumlah * $scope.harga;
  };
  // Panggil fungsi untuk menghitung total secara otomatis saat halaman dimuat
  $scope.hitungHasil();
});
