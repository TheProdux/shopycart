window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("scrollToTop").style.display = "block";
    } else {
        document.getElementById("scrollToTop").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

var images = ['cloud1.png', ' '];

$('<img class="fade-in" src="img/' + images[Math.floor(Math.random() * images.length)] + '">').appendTo('#cloud1');



var illu = ["illustrate1", "illustrate2"];
var cloud1 = ["cloud1", "boy-kite"];
var cloud2 = ["cloud2", "boy-cycle"];
var cloud3 = ["cloud3", "girl-dog"];
var cloud5 = ["cloud5", "tree1"];
var bird1 = ["bird1", "tree2"];
var bird2 = ["bird2", "tree3"];
var bird3 = ["bird3", " "];
var bird4 = ["bird4", " "];
var bird5 = ["bird5", " "];
var tree = ["tree", " "];

var src1 = ["img/boy-kite.png", "img/cloud1.png"];
var src2 = ["img/cloud2.png", "img/boy-cycle.png"];
var src3 = ["img/cloud3.png", "img/girl-dog.png"];
var src4 = ["img/cloud-5.png", "img/Tree-1.png"];
var src5 = ["img/bird1.png", "img/Tree-2.png"];
var src6 = ["img/bird2.png", "img/Tree-3.png"];
var src7 = ["img/bird3.png", " "];
var src8 = ["img/bird4.png", " "];
var src9 = ["img/bird5.png", " "];
var src10 = ["img/tree.png", " "];


//$('<div class="' + illu[Math.floor(Math.random() * illu.length)] + '" style="display:block;"></div>').appendTo('#banner');

//$('<div class="' + illu[Math.floor(Math.random() * illu.length)] + '" id="' + illu[Math.floor(Math.random() * illu.length)] + '"><img class="' + cloud1[Math.floor(Math.random() * cloud1.length)] + ' floating1"  src=' + src1[Math.floor(Math.random() * src1.length)] + '><img class="' + cloud2[Math.floor(Math.random() * cloud2.length)] + ' floating2"  src=' + src2[Math.floor(Math.random() * src2.length)] + '><img class="' + cloud3[Math.floor(Math.random() * cloud3.length)] + ' floating3" src="' + src3[Math.floor(Math.random() * src3.length)] + '"><img class="' + cloud5[Math.floor(Math.random() * cloud5.length)] + ' floating5" src="' + src4[Math.floor(Math.random() * src4.length)] + '"><img class="' + bird1[Math.floor(Math.random() * bird1.length)] + '" src="' + src5[Math.floor(Math.random() * src5.length)] + '"><img class="' + bird2[Math.floor(Math.random() * bird2.length)] + '" src="' + src6[Math.floor(Math.random() * src6.length)] + '"><img class="' + bird3[Math.floor(Math.random() * bird3.length)] + '" src="' + src7[Math.floor(Math.random() * src7.length)] + '"><img class="' + bird4[Math.floor(Math.random() * bird4.length)] + '" src="' + src8[Math.floor(Math.random() * src8.length)] + '"><img class="' + bird5[Math.floor(Math.random() * bird5.length)] + '" src="' + src9[Math.floor(Math.random() * src9.length)] + '"><img class="' + tree[Math.floor(Math.random() * tree.length)] + '" src="' + src10[Math.floor(Math.random() * src10.length)] + '"></div>').appendTo('#banner');