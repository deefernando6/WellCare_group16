const primaryColor = '#4834d4'
const warningColor = '#f0932b'
const successColor = '#6ab04c'
const dangerColor = '#eb4d4b'

const themeCookieName = 'theme'

const themeLight = 'light'

const body = document.getElementsByTagName('body')[0]



function collapseSidebar() {
    body.classList.toggle('sidebar-expand')
}

window.onclick = function(event) {
    openCloseDropdown(event)
}

function closeAllDropdown() {
    var dropdowns = document.getElementsByClassName('dropdown-expand')
    for (var i = 0; i < dropdowns.length; i++) {
        dropdowns[i].classList.remove('dropdown-expand')
    }
}

function openCloseDropdown(event) {
    if (!event.target.matches('.dropdown-toggle')) {
        // 
        // Close dropdown when click out of dropdown menu
        // 
        closeAllDropdown()
    } else {
        var toggle = event.target.dataset.toggle
        var content = document.getElementById(toggle)
        if (content.classList.contains('dropdown-expand')) {
            closeAllDropdown()
        } else {
            closeAllDropdown()
            content.classList.add('dropdown-expand')
        }
    }
}
$(".sidebar-nav-item").on("click", function() {
    $(".sidebar-nav-link").find(".active").removeClass("active");
    $(this).parent().addClass("active");
});