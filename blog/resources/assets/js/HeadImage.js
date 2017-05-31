/**
 * Created by dudenglan on 2017/5/25.
 */
var className;
var imageTop;
var imageLeft;
var imageBottom;
var imageRight;
function HeadImage(className) {
    this.className = className;
    this.imageLeft = $("." + this.className + ">.head-image").offset().left;
    this.imageRight = this.imageLeft + $("." + this.className + ">.head-image").width();
    this.imageTop = $("." + this.className + ">.head-image").offset().top;
    this.imageBottom = this.imageTop + $("." + this.className + ">.head-image").height();
    this.setImageDirection = function () {
        $("." + this.className + ">.head-image").css("z-index", "0");
        if (mouseX >= this.imageLeft && mouseX <= this.imageRight && mouseY <= this.imageTop) {
            $("." + this.className + ">.1").css("z-index", "1");
        } else if (mouseX < this.imageLeft && mouseY < this.imageTop) {
            $("." + this.className + ">.2").css("z-index", "1");
        } else if (mouseX <= this.imageLeft && mouseY >= this.imageTop && mouseY <= this.imageBottom) {
            $("." + this.className + ">.3").css("z-index", "1");
        } else if (mouseX < this.imageLeft && mouseY > this.imageBottom) {
            $("." + this.className + ">.4").css("z-index", "1");
        } else if (mouseX >= this.imageLeft && mouseX <= this.imageRight && mouseY >= this.imageBottom) {
            $("." + this.className + ">.5").css("z-index", "1");
        } else if (mouseX > this.imageRight && mouseY > this.imageBottom) {
            $("." + this.className + ">.6").css("z-index", "1");
        } else if (mouseX >= this.imageRight && mouseY >= this.imageTop && mouseY <= this.imageBottom) {
            $("." + this.className + ">.7").css("z-index", "1");
        } else if (mouseX > this.imageRight && mouseY < this.imageTop) {
            $("." + this.className + ">.8").css("z-index", "1");
        } else {
            $("." + this.className + ">.front").css("z-index", "1");
            $(".text-holder").css("display", "none");
            $("." + this.className + ".text-holder").css("display", "block");
        }
    };
}

var mouseX;
var mouseY;
var imageOne;
$(window).resize(imageInit);

/* Setting the mousemove event caller */
$(window).mousemove(getMousePosition);

/* This function is called on document ready, on load and on resize
 * and initiallizes all the images */
function imageInit() {

    /* Instanciate the mouse position variables */
    mouseX = 0;
    mouseY = 0;

    /* Instanciate a HeadImage class for every image */
    imageOne = new HeadImage("one");

}
$(imageInit());
/* This function is called on mouse move and gets the mouse position.
 * It also calls the HeadImage function to display the correct image*/
function getMousePosition(event) {

    /* Setting the mouse position variables */
    mouseX = event.pageX;
    mouseY = event.pageY;

    /*Calling the setImageDirection function of the HeadImage class
     * to display the correct image*/
    imageOne.setImageDirection();

}