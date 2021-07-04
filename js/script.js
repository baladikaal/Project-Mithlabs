// untuk sidenav
const sideNav = document.querySelectorAll(".sidenav");
M.Sidenav.init(sideNav);

// untuk slider
const sliider = document.querySelectorAll('.slider');
        M.Slider.init(sliider, {
            indicators: false,
            height: 500,
            duration: 600,
            interval: 4000
        });

// untuk pop-window (modal)
const popWindow = document.querySelectorAll(".modal");
M.Modal.init(popWindow);


// untuk sticky nav
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() > 30) {
            $('nav').addClass('ubahnav');
        } else {
            $('nav').removeClass('ubahnav');
        }
    });
});

// untuk fab
const Fab = document.querySelectorAll(".fixed-action-btn");
M.FloatingActionButton.init(Fab);

// untuk slecet item
const Elems = document.querySelectorAll('select');
M.FormSelect.init(Elems);

// parallax
const paralllax = document.querySelectorAll('.parallax');
M.Parallax.init(paralllax);



