var dice = new Array("1", "2", "3", "4", "5", "6");
var firstRoll = "yes";
var myPoint = "";
rollPoint = "";
function craps() {
	var roll1 = Math.floor(Math.random() * dice.length);
	var roll2 = Math.floor(Math.random() * dice.length);
	if (firstRoll == "yes") {
		myPoint = dice[roll1] - (-dice[roll2]);
		rollPoint = myPoint;
		console.log(rollPoint);
		checkRoll();
		firstRoll = "no";
		document.getElementById("iRoll").innerHTML = myPoint;
	} else {
		rollPoint = dice[roll1] - (-dice[roll2]);
		checkRoll();
	}
}
function checkRoll(){
	document.getElementById("cRoll").innerHTML = rollPoint;
	if (firstRoll == "no" && myPoint == rollPoint) {
		output2.innerHTML = "You're a winner!!";
		firstRoll = "yes";
	}
	if (firstRoll == "no" && rollPoint == "7"){
		output.innerHTML = "You lose...";
		firstRoll = "yes";
	}
	if (myPoint == "7" || myPoint == "11"){
		output2.innerHTML = "You're a winner!!";
		firstRoll ="yes";
	}
	if (myPoint == "2" || myPoint == "3" || myPoint == "12"){
		output.innerHTML = "You lose...";
		firstRoll = "yes";
	}
}