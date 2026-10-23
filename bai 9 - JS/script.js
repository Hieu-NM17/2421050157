var cheDo = true
function doiCheDo() {
    
    if (cheDo == true) {
        document.getElementsByTagName('div')[0].style = 'background-color: black'
        document.getElementsByClassName('che-do')[0].style = 'color: white'
        document.getElementsByClassName('che-do')[0].innerHTML = 'Chế độ tối'
        document.getElementsByTagName('img')[0].src = '/img/moon.png'
        cheDo = false
    }
    else {
        document.getElementsByTagName('div')[0].style = 'background-color: white'
        document.getElementsByClassName('che-do')[0].style = 'color: black'
        document.getElementsByClassName('che-do')[0].innerHTML = 'Chế độ sáng'
        document.getElementsByTagName('img')[0].src = '/img/sun.png'
        cheDo = true
    }

}
