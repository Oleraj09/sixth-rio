document.addEventListener("DOMContentLoaded", function() {
    var preloader = document.getElementById('preloader');
    var home = document.getElementById('home');
    var stickey = document.getElementById('stickey');
    preloader.style.display = 'block';
    setTimeout(function() {
        preloader.style.display = 'none';
        home.classList.remove("hide");
        stickey.classList.add("stickey-top"); 
    }, 2000);

});
