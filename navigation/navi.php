

<nav>
	<ul class="navi_class" id="navi_top">
		<li>	
        <a class="active" href="index.php">Home</a>
		</li>
		<li>	
        <a  href="#news" onclick="myNaviFunction()">News</a>
		</li>
        <li>	
        <a  href="#contact" onclick="myFunction()">Kontakt</a>
		</li>
		<li class="icon"> <a href="javascript:void(0);" style="font-size:15px;" onclick="myNaviFunction()">☰</a>
		</li>
	</ul>
</nav>

<script>
function myNaviFunction() {
    var x = document.getElementById("navi_top");
    if (x.className === "navi_class") {
        x.className += " responsive";
    } else {
        x.className = "navi_class";
    }
}
</script>

