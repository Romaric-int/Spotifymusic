$(document).ready(function() {
    $("a.btn-song").click(function(e) {
         e.preventDefault();
         var audio = $('#audio')[0]
         audio.src =  $(this).attr('data-file')
         audio.play();
    })
})

$(".theme-switch").on("click", () => {
  $("body").toggleClass("light-theme");
});
$(".theme-switch").on("click", () => {
  $("#content").toggleClass("light-theme");
});
$(".theme-switch").on("click", () => {
  $("#content").toggleClass("light-theme");
});
