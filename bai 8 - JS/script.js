// function sayHello(ten) {
//     document.write('Hello ' + ten)
// }

// sayHello('Trung _ay')

// document.write('<br>')
// function tinhTong (a, b) {
//     if (!isNaN(a) && !isNaN(b)) {
//         return a + b
//     }
//     else {
//         return alert('Nhập a và b là số')
//     }
// }
// var soThu1 = Number(prompt('Nhập số thứ nhất', 'Nhập ở đây'))
// var soThu2 = Number(prompt('Nhập số thứ hai', 'Nhập ở đây'))
// document.write(tinhTong(soThu1, soThu2))

// Viết hàm tính điểm chữ dựa trên 3 điểm A,B,C

// function tinhDiemChu(diemA, diemB, diemC) {
//   for (const d of [diemA, diemB, diemC]) {
//     if (typeof d !== 'number' || d < 0 || d > 10) {
//       return 'Điểm không hợp lệ (phải từ 0 đến 10)';
//     }
//   }

//   const diemTrungBinh = diemA * 0.6 + diemB * 0.3 + diemC * 0.1;

//   var diemChu, thang4;
//   if (diemTrungBinh >= 8.5) { diemChu = 'A'; thang4 = 4.0; }
//   else if (diemTrungBinh >= 7.0) { diemChu = 'B'; thang4 = 3.0; }
//   else if (diemTrungBinh >= 5.5) { diemChu = 'C'; thang4 = 2.0; }
//   else if (diemTrungBinh >= 4.0) { diemChu = 'D'; thang4 = 1.0; }
//   else { diemChu = 'F'; thang4 = 0.0; }

//   return 'Điểm trung bình: ' + diemTrungBinh.toFixed(2) +
//          ' - Điểm chữ: ' + diemChu +
//          ' - Thang 4: ' + thang4;
// }

// const diemA = parseFloat(prompt('Nhập điểm A (hệ số 60%):'));
// const diemB = parseFloat(prompt('Nhập điểm B (hệ số 30%):'));
// const diemC = parseFloat(prompt('Nhập điểm C (hệ số 10%):'));

// document.write(tinhDiemChu(diemA, diemB, diemC));