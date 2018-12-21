/* html slider....
<div class="slider">
					<button  onclick="prev()"> Prev </button>
        			<img id="slider" src="certhtml.jpg" width="550px" height="350px" />
       				<button onclick="next()"> Next </button>
				</div>

*/



var images=[
    "certhtml.jpg",
    "certcss.jpg",
	"certjavascript.jpg",
    "certphp.jpg",
    "certjquery.jpg"
];
var num=0

function next(){
var slider=document.getElementById("slider");
num++;
if(num>=images.length){

    num=0;
    }
    slider.src=images[num];
    }

function prev(){
var slider=document.getElementById("slider");
num--;
if(num<0){
    num=images.length-1;
    }
    slider.src=images[num];
    }
