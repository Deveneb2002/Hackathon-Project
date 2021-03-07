

var sideNav = document.querySelector('.sidenav');
sideNav.addEventListener('mouseover', changeDefOver);
sideNav.addEventListener('mouseout', changeDefOut);

function changeDefOver() {
   openNav();
}
function changeDefOut() {
   closeNav();
}

function openNav() {
   document.getElementById("mySidenav").style.width = "250px";
   document.getElementById("main").style.marginLeft = "250px";

}

function closeNav() {
   document.getElementById("mySidenav").style.width = "20px";
   document.getElementById("main").style.marginLeft= "0";
}
