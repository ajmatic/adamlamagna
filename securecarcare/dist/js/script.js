
headerArray = ["Did you buy a used car that isn’t protected by a manufacturer’s warranty?", "Can you afford to pay for expensive on-going repairs to your vehicle?", "Enroll Now - Call us at <span class='number'>(800) 989-8086</span>", "Do you plan to own your vehicle longer than the manufacturer's warranty will cover?"];

headerIndex = 0;

function changeHeader() {

	var myHeader = document.getElementById("myHeader");

	$('#myHeader').fadeOut(500, changeWords).fadeIn(500);

	//myHeader.innerHTML = headerArray[headerIndex];
	
}

function changeWords() {
	
	$('#myHeader').html(headerArray[headerIndex]);
	headerIndex++;
	if (headerIndex >= headerArray.length) {
		//clearInterval(intervalHandle);
		headerIndex = 0;
	}
}

intervalHandle = setInterval(changeHeader, 5000);



