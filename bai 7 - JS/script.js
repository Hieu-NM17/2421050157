document.writeln('_ay')

var name = 'Trung trẻ trâu <br>'
document.writeln(name)

name = "Khoa khờ khạo <br>"
document.writeln(name)

var year = 2026
document.writeln(year)

// Phép toán

// Cộng
var st1 = 10
var st2 = 2
var kq = st1 + st2
document.write('<br> Số thứ nhất + Số thứ 2 =')
document.writeln(' ', kq)

// Trừ
var st1 = 10
var st2 = 2
var kq = st1 - st2
document.write('<br> Số thứ nhất - Số thứ 2 =')
document.writeln(' ', kq)

// Nhân
var st1 = 10
var st2 = 2
var kq = st1 * st2
document.write('<br> Số thứ nhất * Số thứ 2 =')
document.writeln(' ', kq)

// Chia
var st1 = 10
var st2 = 2
var kq = st1 / st2
document.write('<br> Số thứ nhất / Số thứ 2 =')
document.writeln(' ', kq)

// Chia lấy dư
var st1 = 10
var st2 = 2
var kq = st1 % st2
document.write('<br> Số thứ nhất % Số thứ 2 =')
document.writeln(' ', kq)

document.writeln('<br>', st1++)

document.writeln(st1 += st2)

var lastName = 'Nguyen'

document.writeln('<br>', lastName + name)

document.writeln(lastName.length)
document.writeln(typeof (lastName))

var fullName = 'Nguyễn Đăng Khoa'
document.writeln('<br>')
document.writeln(fullName.indexOf('Khoa'))

document.writeln(fullName.includes('e'))

document.writeln(fullName.startsWith('Nguyễn'))

document.writeln(fullName.replace('Nguyễn', 'Nguyễn Trần Trung'))

document.writeln('<br>')
document.writeln(fullName.toLowerCase(fullName))

document.writeln('<br>')
document.writeln(fullName.toUpperCase(fullName))
document.writeln('<br>')

document.writeln('<br>')

document.writeln('<br>')

document.writeln('<br>')


// Date
var date = new Date()
document.writeln('<br>')
document.writeln(date)

document.writeln('<br>')
var mdy = new Date("9/30/2026")
document.write(mdy)

document.writeln('<br>')
var year = date.getFullYear()
document.write(year)

document.writeln('<br>')
var month = date.getMonth() + 1
document.write(month)

document.writeln('<br>')
var day = date.getDate()
document.write(day)

document.writeln('<br>')
var thu = date.getDay() + 1
document.write(thu + 1)

document.writeln('<br>')
document.write(`Hom nay la Thu ${thu} ngay ${day} thang ${month} nam ${year}`)
document.writeln('<br>')

document.writeln('<br>')

document.writeln('<br>')

document.writeln('<br>')

//Mảng
document.writeln('<br>')
var mang = [1, 2, 3, 4, 5]
document.write(mang[2])
document.writeln('<br>')
document.write(mang.length)

document.writeln('<br>')
var mangTen = [1, 2, 3, 4, 5, 6, 'Trung tre trau', 'Khoa kho khao', '_ay']
document.write(mangTen)

document.writeln('<br>')
var mangSo = [1, 2, 3, 4, 5]
var mangChu = ['a', 'b', 'c']
var d = mang.concat(mangSo, mangTen)
document.write(d)

document.writeln('<br>')
document.write(d.join('-'))

document.writeln('<br>')
document.write(d.pop())

document.writeln('<br>')
d.push('hèn quốc')
document.write(d)

document.writeln('<br>')
mangSo.reverse()
document.write(mangSo)

// Object
document.writeln('<br>')
var thongTin = {
    ten: 'Trung tre trau',
    namSinh: 2006,
    que: {
        xa: 'Thuỵ Vân',
        tinh: 'Đất tổ Phú Thọ',
    },
    soThich: 'Ăn thịt chó'
}
document.write(thongTin.que.tinh)

document.writeln('<br>')
tuoi = year - thongTin.namSinh
thongTin.tuoi = tuoi
document.write(thongTin.tuoi)

document.writeln('<br>')
//boolean: true/nam false/nu
thongTin.gioiTinh = true
document.writeln('<br>')
var danhSach = [
    {
        ten: 'Trung tre trau',
        namSinh: 2006,
        que: {
            xa: 'Thuỵ Vân',
            tinh: 'Đất tổ Phú Thọ',
        },
        soThich: 'Ăn thịt chó'
    },
    {
        ten: 'Khoa kho khao',
        namSinh: 2006,
        que: {
            xa: 'Kim Nỗ',
            tinh: 'Cổ Loa Thành',
        },
        soThich: 'JaValorant'
    }
]
console.log(danhSach)

// === So sánh cả giá trị và kiểu dữ liệu
document.writeln('<br>')
var so1 = 5
var so2 = 10
document.write(so1 == so2)

document.writeln('<br>')
if (thu >= 7) {
    document.write('Nghỉ')
}
else {
    document.write('Đi học')
}
document.writeln('<br>')
var so = 9
if (so %2 == 0) {
    document.write('Số chẵn')
}
else {
    document.write('Số lẻ')
}

document.writeln('<br>')
document.writeln('<br>')
document.writeln('<br>')


