<!DOCTYPE html>
<html>
<head>
<style>
h1{
font-size: 30px;
color: yellow;
font-style: Times New Roman;
}
h2{
font-size: 30px;
color: yellow;
font-style: Times New Roman;
}
p{
font-size: 20px;
color: yellow;
font-style: bold;
}
</style>
<script>
alert("Welcome to my interactive Lego wabpage ");
</script>
</head>
<body style="background-color:red;">
<h1>Hi hello welcome to my interactive lego webpage</h1>
<img src="lego.jpg" title="plastic bricks" alt="bricked" width="400" height="400"/></td>
<img src="brick.jpg" title="plastic bricks" alt="bricked" width="400" height="400"/></td>
<h2> Click here to learn the brief history of Lego</h2>
<button type="button" onclick='document.getElementById("demo").innerHTML = "LEGO, plastic building-block toys that rose to massive popularity in the mid-20th century. LEGO blocks originated in the Billund, Denmark, workshop of Ole Kirk Christiansen, who began making wooden toys in 1932"'>Click this first!</button>
<button type="button" onclick='document.getElementById("demo").innerHTML = "Two years later he named his company LEGO after the Danish phrase leg godt (“play well”)."'>Click this second</button>
<button type="button" onclick='document.getElementById("demo").innerHTML = "In 1949 LEGO produced its first plastic brick, a precursor to its signature brick with interlocking studs on the top and tubes on the bottom."'>Click this third!</button>
<button type="button" onclick='document.getElementById("demo").innerHTML = "It was patented in 1958 by Christiansen’s son Godtfred Kirk, who replaced his father as the head of the company."'>then click the last!</button>
<p id="demo">Description</p>
<h2> Fun LEGO facts</h2>
<button onclick="fc1()">Fun Facts</button>
<button onclick="fc2()">Fun Facts</button>
<button onclick="fc3()">Fun Facts</button>
<button onclick="fc4()">Fun Facts</button>
<button onclick="fc5()">Fun Facts</button>
<script>
function fc1() {
  alert("Did you know that LEGO is one of the most popular, and best-selling, toys of all time and is a household name all over the world.");
}
function fc2() {
  alert("Did you know that the plural of LEGO is LEGO. It doesn’t matter if you have one or one hundred pieces of LEGO, it’s still LEGO – although many people call them LEGOs.");
}
function fc3() {
  alert("Did you know that LEGO was originally called “Automatic Binding Bricks”. LEGO were not actually the first company to market the bricks. They modified and improved the original Kiddicraft bricks to create their own.");
}

function fc4() {
  alert("Did you know that LEGO sued a Chinese company who made “Coko bricks” in 2002. These blocks were very similar to LEGO bricks and Coko were forced to cease production and issue a formal apology as well.");
}
function fc5() {
  alert("Did you know that In 2012, 45.7 billion LEGO bricks were produced. This actually works out to be a rate of 5.2 million LEGO bricks per hour.");
}
</script>

</body>
</html>
