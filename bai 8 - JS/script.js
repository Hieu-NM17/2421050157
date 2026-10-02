function sayHello(ten) {
    document.write('Hello ' + ten)
}

sayHello('Trung _ay')

document.write('<br>')
function tinhTong (a, b) {
    if (!isNaN(a) && !isNaN(b)) {
        return a + b
    }
    else {
        return alert('Nhập a và b là số')
    }
}
var soThu1 = Number(prompt('Nhập số thứ nhất', 'Nhập ở đây'))
var soThu2 = Number(prompt('Nhập số thứ hai', 'Nhập ở đây'))
document.write(tinhTong(soThu1, soThu2))

// Viết hàm tính điểm chữ dựa trên 3 điểm A,B,C