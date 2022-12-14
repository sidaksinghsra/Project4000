function settingHover2() {
    document.getElementById('dropAccount').classList.toggle('show')
}
window.onclick = function (ex) {
    if (
        !ex.target.matches('.accountButton') &&
        !ex.target.matches('.fa-caret-down') &&
        !ex.target.matches('.fa-circle-user')
    ) {
        let DropAccount = document.getElementById('dropAccount')
        if (DropAccount.classList.contains('show')) {
            DropAccount.classList.remove('show')
        }
    }
}

/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
    if (window.innerWidth <= 768) {
        document.getElementById('mySidebar').style.width = '120px'
        document.getElementById('main').style.marginLeft = '120px'
        document.getElementById('userProfileDropdown').style.marginRight =
            '145px'
    } else if (window.innerWidth > 768 && window.innerWidth < 1024) {
        document.getElementById('mySidebar').style.width = '150px'
        document.getElementById('main').style.marginLeft = '150px'
        document.getElementById('userProfileDropdown').style.marginRight =
            '165px'
    } else {
        document.getElementById('mySidebar').style.width = '200px'
        document.getElementById('main').style.marginLeft = '200px'
        document.getElementById('userProfileDropdown').style.marginRight =
            '200px'
    }
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById('mySidebar').style.width = '0'
    document.getElementById('main').style.marginLeft = '0'
    document.getElementById('userProfileDropdown').style.marginRight = '0'
}
