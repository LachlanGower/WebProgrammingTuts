function test()
{
    var x = document.getElementById("afloat");
    x.innerHTML = "Baby dont hurt me";
    var j = document.getElementsByClassName("floater");
    var i;
    for (i = 0; i < j.length; i++) { 
        j[i].innerHTML = "What is Love";
    }
}
function rotate()
{
    var x = document.getElementsByTagName("main");
    x[0].style.animationName = "example";
    x[0].style.animationDuration = "1s"; x[0].style.animationIterationCount = "infinite";
   var j = document.getElementById("pink");
    j.style.animationDuration = "0.2s"; 
	j.style.animationIterationCount = "infinite";
    j.style.animationName = "color";  
}
function jsHero()
{
    var x = document.getElementById("containthejs");
    x.style.animationName = "example";
    x.style.animationDuration = "1s"; x.style.animationIterationCount = "infinite";
    var j = document.getElementById("jsButton");
    j.style.animationDuration = "0.2s"; j.style.animationIterationCount = "infinite";
    j.style.animationName = "color"; 
    j.style.fontSize = "50px";
    j.style.color = "white";
    j.style.fontFamily = "Verdana";
    j.innerHTML = "<marquee scrollamount = '100px'> YOU DID IT</marquee>";
   
    setTimeout(funTime(), 1000);
}
function funTime()
{
    var x = document.getElementsByClassName("dancingQueen");
    var j = document.getElementById("fun");
    j.style.animationName = "example";
    j.style.animationDuration = "5s"; j.style.animationIterationCount = "infinite";
    j.style.visibility = "visible";
    var i;
    for(i = 0; i < x.length; i++)
    {
        if(((i + 1) % 2) == 0)
        {
            x[i].style.backgroundColor = "blue";
            x[i].style.transform = "rotate(45deg)";    
        }
        x[i].style.animationName = "scale";
    x[i].style.animationDuration = "2s"; x[i].style.animationIterationCount = "infinite";
    x[i].style.fontSize = "10px";
    x[i].style.color = "white";
    x[i].innerHTML = "<marquee scrollamount = '1px'>AMAZING</marquee>";
    } 
}

//
/*
*/
var map = ['I', 'never', 'wanna', 'give', 'you', 'up'];
var x = parseInt(0);

function rickRoll()
{
	document.getElementById("rickroll").innerHTML = map[x];
	x++;
	if(x >= map.length){
		x = 0;	
	}
}