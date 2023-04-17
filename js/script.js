$(document).ready(function(){

    $('.slider').slick({
        dots:true,
        adaptiveHeight:true,
        slidesToShow:2,
        autoplay:true,
        autoplaySpeed:4000,
        pauseOnFocus:true,/*пауза автопроигрывания - клик куда-то*/
        pauseOnHover:true,/*пауза - при наведении слайдера*/
        pauseOnDotsHover:true,/*пауза - при наведении точек управления*/
        waitForAnimate:true,/*при множественном нажатии на стрелку сначала прогружается анимация, а потом перелистывается*/
        centerMode:true,/* при true появляется slick-center */
        //rows:2, //количество рядов
        //slidesPerRow:2, /*количество объектов в ряду*/
    });
});
