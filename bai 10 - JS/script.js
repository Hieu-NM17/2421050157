var danhSachVid = [
    {
        id: 1,
        ten: "Dự báo thời tiết hôm nay mưa",
        duongDanAnh: "",
        duongDanYoutube:"https://www.youtube.com/embed/heMYSOZoT3c?si=GrQpeDYXDCOWXXBT"
    },
    {
        id: 2,
        ten: "Những kẻ mộng mơ",
        duongDanAnh:"",
        duongDanYoutube:"https://www.youtube.com/embed/u6EPA-nU5RE?si=-G88gouUnvTOLASu"
    },
    {
        id: 3,
        ten: "VIỆT NAM - TỰ HÀO TIẾP BƯỚC TƯƠNG LAI",
        duongDanAnh:"",
        duongDanYoutube:"https://www.youtube.com/embed/vSHLQHaMkx8?si=TmdoGEJRe2zZGA_x"
    },
    {
        id: 4,
        ten: "Tái sinh",
        duongDanAnh:"",
        duongDanYoutube:"https://www.youtube.com/embed/EqKUpelTb6A?si=ZyxICV9VaA24h3x1"
    },
]

function chonVid(id) {
    for (let i = 0; i < danhSachVid.length; i++) {
        if (danhSachVid[i].id == id) {
            document.getElementsByClassName('ten')[0].innerHTML = danhSachVid[i].ten;
            document.getElementsByTagName('iframe')[0].src = danhSachVid[i].duongDanYoutube;
        }
        else {
            continue
        }
    }
}