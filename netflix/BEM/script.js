var danhSachPhim = [
    {
        id: 0,
        ten: "Cảnh sát trưởng Labrado",
        thoiLuong: 20,
        banner: "../anh/anh1.jpg",
        link: "https://www.youtube.com/embed/nm1hA18q_Ws?si=WjP1bPC94eICIFs-"
    },
    {
        id: 1,
        ten: "《Tình Yêu Vô Hình Nơi Màn Đêm Trong Vắt⟫ 💗 Tập 1 (Vietsub)【Ani-One Vietnam】",
        thoiLuong: 24,
        banner: "https://i.ytimg.com/vi/2le90FbiD4A/hqdefault.jpg?sqp=-oaymwEmCKgBEF5IWvKriqkDGQgBFQAAiEIYAdgBAeIBCggYEAIYBjgBQAE=&rs=AOn4CLAlezoLLADZzFGROCepHihFSk55Yg",
        link: "https://www.youtube.com/embed/2le90FbiD4A?si=wXpUaOP8KeSI36gC"
    },
    {
        id: 2,
        ten: "【Vietsub】《Grand Blue》｜Tập 01｜TROPICS ENTERTAINMENT",
        thoiLuong: 24,
        banner: "https://i.ytimg.com/an_webp/po57ragkbZw/mqdefault_6s.webp?du=3000&sqp=COTz-tYG&rs=AOn4CLDBMz-KCp2Ej1cuDUe98m093xMjGg",
        link: "https://www.youtube.com/embed/po57ragkbZw?si=5SQx6zIXWaPvrYXQ"
    },
    {
        id: 3,
        ten: "[S1] KONOSUBA-God's blessing on this wonderful world!! - Tập 2 (Vietsub)【Ani-One Vietnam】",
        thoiLuong: 24,
        banner: "",
        link: "https://www.youtube.com/embed/xD3SLvHOUq4?si=qA5X7eVSyknofzrr"
    }
]

function showTrailer(filmId) {

    var selectedFilm = danhSachPhim.find((phim) => {
        return phim.id === filmId
    })

    if (!selectedFilm) {
        return alert('Không tìm thấy phim')
    }

    if (!selectedFilm.link) {
        return alert('Phim chưa có trailer')
    }

    var videoIframe = document.querySelector('.labrador__iframe')

    if (videoIframe) {
        videoIframe.src = selectedFilm.link
    }
    else {
        return console.log('Hiện không có iframe hiển thị video')
    }

    var imgBanner = document.querySelector('.labrador__banner')
    var videoBanner = document.querySelector('.labrador__video')

    if (imgBanner) {
        imgBanner.style.display = 'none'
    }
    if (videoBanner) {
        videoBanner.style.display = 'block'
    }

    document.querySelector('.labrador__title').innerHTML = selectedFilm.ten

    

}

