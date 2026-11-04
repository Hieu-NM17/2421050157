create database netflix;
-- phim
-- the_loai
-- quoc_gia
-- dien_vien
-- dao_dien
-- tap_phim
-- nguoi_dung

--Table nguoi_dung
create table nguoi_dung (
	id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
	ten_dang_nhap varchar(30) NOT NULL,
	mat_khau varchar(30) NOT NULL,
	email varchar(30) NOT NULL,
	ho_ten varchar(50) NOT NULL,
	ngay_sinh date NOT NULL,
	so_dien_thoai varchar(10) NOT NULL,
	gioi_tinh boolean NOT NULL
)

create table if not EXISTS the_loai (
	id int AUTO_INCREMENT PRIMARY KEY not null,
	ten_the_loai varchar(255) not null
);

create table if not EXISTS dien_vien(
    id int AUTO_INCREMENT PRIMARY KEY not null,
    ho_ten varchar(100) not null,
    ngay_sinh date
);

CREATE TABLE if not EXISTS dao_dien (
    id int AUTO_INCREMENT PRIMARY KEY not null,
    ho_ten varchar(100) not null,
    ngay_sinh date
);

create table if not EXISTS phim(
    id int AUTO_INCREMENT PRIMARY KEY not null,
    ten_phim varchar(255) not null,
    quoc_gia varchar(100),
    dao_dien_id int not null,
create table the_loai (
	id int AUTO_INCREMENT PRIMARY KEY,
	ten_the_loai varchar(255)
);

create table dien_vien(
    id int AUTO_INCREMENT PRIMARY KEY,
    ho_ten varchar(100),
    ngay_sinh date
);

CREATE TABLE dao_dien (
    id int AUTO_INCREMENT PRIMARY KEY,
    ho_ten varchar(100),
    ngay_sinh date
);

create table phim(
    id int AUTO_INCREMENT PRIMARY KEY,
    ten_phim varchar(255),
    quoc_gia varchar(100),
    dao_dien_id int,
    nam datetime,
	do_tuoi int,
	mo_ta varchar(255)
);

CREATE TABLE if not EXISTS phim_the_loai (
    id int AUTO_INCREMENT PRIMARY key not null,
    phim_id int not null,
    the_loai_id int not null
);

CREATE TABLE if not EXISTS phim_dien_vien (
    id int AUTO_INCREMENT PRIMARY KEY not null,
    phim_id int not null,
    dien_vien_id int not null
);

CREATE TABLE phim_the_loai (
    id int AUTO_INCREMENT PRIMARY key,
    phim_id int,
    the_loai_id int
);

CREATE TABLE phim_dien_vien (
    id int AUTO_INCREMENT PRIMARY KEY,
    phim_id int,
    dien_vien_id int
);

INSERT INTO `the_loai`(`id`, `ten_the_loai`) VALUES ('6','Viễn tưởng');
INSERT INTO `the_loai`(`ten_the_loai`) VALUES ('Viễn tưởng');

DELETE FROM `the_loai` WHERE id = 6

SELECT * FROM `the_loai` WHERE ten_the_loai like 'Kinh dị';

INSERT INTO `phim`(`ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mo_ta`)
VALUES
('Mai', 'Việt Nam', 1, '2024-01-01', 18, 'Câu chuyện tình cảm giữa Mai và Dương'),
('Mắt Biếc', 'Việt Nam', 2, '2019-01-01', 16, 'Chuyện tình đơn phương của Ngạn dành cho Hà Lan'),
('Bố Già', 'Việt Nam', 3, '2021-01-01', 16, 'Câu chuyện gia đình về tình cha con và những mâu thuẫn thế hệ'),
('Inception', 'Mỹ', 4, '2010-01-01', 13, 'Một nhóm chuyên gia xâm nhập vào giấc mơ để đánh cắp ý tưởng'),
('Interstellar', 'Mỹ', 5, '2014-01-01', 13, 'Hành trình tìm kiếm hành tinh mới để cứu nhân loại');

INSERT INTO `phim_dien_vien` (`phim_id`, `dien_vien_id`)
VALUES
-- Mai
(1, 2),
(1, 3),
(1, 5),

-- Mắt Biếc
(2, 3),
(2, 5),

-- Bố Già
(3, 2),
(3, 5),

-- Inception
(4, 1),

-- Interstellar
(5, 1);


INSERT INTO `phim_the_loai` (`phim_id`, `the_loai_id`)
VALUES
-- Mai: Hài hước, Tình cảm
(1, 1),
(1, 5),

-- Mắt Biếc: Tình cảm, Trinh thám
(2, 5),
(2, 8),

-- Bố Già: Hài hước, Tình cảm
(3, 1),
(3, 5),

-- Inception: Hành động, Viễn tưởng, Trinh thám
(4, 3),
(4, 6),
(4, 8),

-- Interstellar: Viễn tưởng, Tình cảm
(5, 5),
(5, 6);

SELECT * from `phim` p
join `dao_dien` dd
ON p.dao_dien_id = dd.id
JOIN `phim_the_loai` ptl
on p.id = ptl.phim_id
JOIN the_loai tl
on tl.id = ptl.the_loai_id
where p.id = 1