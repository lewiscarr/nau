$(document).ready(function() {
	
	$("#block-myjournal").click(function() {
	    $('html, body').animate({
	        scrollTop: $(".block_nau_learningjournal").offset().top
	    }, 2000);
	});

	$("#block-mycerts").click(function() {
	    $('html, body').animate({
	        scrollTop: $(".block_report_certificates").offset().top
	    }, 2000);
	});

	$("#block-mycourses").click(function() {
	    $('html, body').animate({
	        scrollTop: $(".block_course_overview").offset().top
	    }, 2000);
	});

	$("#block-mybadges").click(function() {
	    $('html, body').animate({
	        scrollTop: $(".block_badges").offset().top
	    }, 2000);
	});

	$("#block-myprogress").click(function() {
	    $('html, body').animate({
	        scrollTop: $(".block_progress").offset().top
	    }, 2000);
	});

});