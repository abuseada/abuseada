<!-- Swiper File -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".swiper", {
        loop: true,
        speed: 500,
        autoPlay: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>