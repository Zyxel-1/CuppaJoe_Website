var difference = 0;

var print = function () {
	for (var i = 1; i <13; i++) {
		var selector = "#image" + i;
		var imageNum = (i + difference) % 13;
		while (imageNum < 0) {
			imageNum = imageNum + 13;
		}
		var image = "../images/socialImg/image" +  imageNum + ".jpg";
		$(selector).attr("src", image);
	}
}

var hideAll = function() {
	$(".img-responsive").hide("slow");
}

var showAll = function() {
	$(".img-responsive").show("slow");
}

var showEven = function() {
	$(".odd").hide("slow");
	$(".even").show("slow");
}

var showOdd = function() {
	$(".even").hide("slow");
	$(".odd").show("slow");
}

var shiftRight = function() {
	difference = difference - 1;
	print();
}

var shiftLeft  = function() {
	difference = difference + 1;
	print();
}

$(document).ready(function(){
	print();
	$("#toggleOdd").click(function() {
		toggleOdd();
	});
	$("#toggleEven").click(function() {
		toggleEven();
	});
	$("#right").click(function() {
		shiftRight();
	});
	$("#left").click(function() {
		shiftLeft();
	});
	$("#hideImages").click(function() {
		hideAll();
	});
	$("#showImages").click(function() {
		showAll();
	});
	$("#showEven").click(function() {
		showEven();
	});
	$("#showOdd").click(function() {
		showOdd();
	});
});