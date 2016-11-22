//countdown

function getTimeRemaining(endtime){
	var time = Date.parse(endtime) - (new Date());
	var seconds = Math.floor((time / 1000) % 60);
	var minutes = Math.floor((time / 1000 / 60) % 60);
	var hours = Math.floor((time / (1000 * 60 * 60)) % 24);
	var days = Math.floor(time / (1000 * 60 * 60 * 24));

	return {
		"total":time,
		"days":days,
		"hours":hours,
		"minutes":minutes,
		"seconds":seconds
	};
}

function initializeClock(clockcontainer, endtime){
	var clock = document.getElementById(clockcontainer);
	var daysSpan = clock.querySelector('.days');
	var hoursSpan = clock.querySelector('.hours');
	var minutesSpan = clock.querySelector('.minutes');
	var secondsSpan = clock.querySelector('.seconds');

	function updateClock(){
	    var time = getTimeRemaining(endtime);

	    daysSpan.innerText = time.days;
	    hoursSpan.innerText = ('0' + time.hours).slice(-2);
	    minutesSpan.innerText = ('0' + time.minutes).slice(-2);
	    secondsSpan.innerText = ('0' + time.seconds).slice(-2);

		if (time.total <= 0) {
			clearInterval(timeinterval);
		}
	}

	updateClock(); // run function once at first to avoid delay
	var timeinterval = setInterval(updateClock, 1000);
}

//Count down to Internship
var internship = "2018-01-15T08:00:00";
initializeClock('clockLIA', internship);

//Count down to Internship
var graduation = "2018-05-31T12:00:00";
initializeClock('clockGraduation', graduation);
