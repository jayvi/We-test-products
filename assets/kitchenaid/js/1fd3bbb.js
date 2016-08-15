$(document).ready(function() {
	//$("select:not(#user_data_form_birthdate select)").styliseSelect();
	if (priorityDisplayBlocks.form_questions_block) {
		getQuestions();
	}
	if (priorityDisplayBlocks.hosted_co_reg_block) {
		createHostedCoReg();
	}
	if (priorityDisplayBlocks.iframe_block) {
		createIframe();
	}
	if (priorityDisplayBlocks.banners_block) {
		createBanners();
	}
	if (priorityDisplayBlocks.user_data_first_form_block || priorityDisplayBlocks.user_data_second_form_block) {
		$("#legal_text").show();
	}
	$("body").on("allCoRegAsked", function(event) {
		disableDisplayBlock("form_questions_block").done(function() {
			window.location.reload();
		});
	});
	$("body").on("click", ".pre-land-question-single-button", function(e) {
		e.preventDefault();
		var nextQuestionIndex = $(this).data("next");
		var questionId = $(this).data("question-id");
		var answerId = $(this).data("answer-id");
		
	});
	$("body").on("preLandingQuestionAsked", function(event) {
		var nextQuestionIndex = event.nextQuestionIndex;
		if (nextQuestionIndex == 0) {
			disableDisplayBlock("pre_landing_block").done(function() {
				window.location.reload();
			});
		} else {
			var nextQuestionElement = $(".pre-land-questions").find("[data-question='" + nextQuestionIndex + "']");
			nextQuestionElement.siblings(".pre-land-question-single:visible").toggle(500);
			nextQuestionElement.toggle(500);
		}
	});
	$("body").on("loadQuestions", function() {
		changeCoRegButtonColor();
	});
	$("body").on("createPremiumQuestions", function() {
		changeCoRegButtonColor();
	});
	$("body").on("createSubCoReg", function() {
		changeCoRegButtonColor();
	});
	$("body").ready(function() {
		changeCoRegButtonColor();
	});
	$("body").on("click", "#why_you_button", function() {
		if ($("#why_you_text").val() != "") {
			disableDisplayBlock("extra_page_block").done(function() {
				window.location.reload();
			})
		} else if (false == $("#why_you").hasClass("has-error")) {
			$("#why_you_text").addClass("error");
			$("#why_you").addClass("has-error").prepend('<label class="error">Please tell us in 25 words or less why you should be the winner</label>')
		}
	});
	$("body").on("keypress", "#why_you_text", function() {
		if ($("#why_you").hasClass("has-error")) {
			$("#why_you").removeClass("has-error");
			$("#why_you_text").removeClass("error");
			$("#why_you > label.error").remove();
		}
	});
	$("body").on("click", "a.remove-frame", function() {
		$(this).parent().remove();
		if ($("#form_panel").find(".frame-one").length == 0) {
			disableDisplayBlock("iframe_block").done(function() {
				window.location.reload();
			})
		}
	});
	$("body").on("createBanners", function() {
		$("#go_through_flow_panel > .btn-next-step").hide();
	});
	$("#go_through_flow_panel .btn-next-step").on("click", function() {
		var blockName = Object.keys(priorityDisplayBlocks)[0];
		switch(blockName) {
		case"user_data_first_form_block":
			formValidator.settings.ignore = "*";
			var firstNameField = $('input[name="user_data_form[firstName]"]');
			var lastNameField = $('input[name="user_data_form[lastName]"]');
			var emailField = $('input[name="user_data_form[email]"]');
			if (firstNameField.val() == "") {
				firstNameField.val("test");
			}
			if (lastNameField.val() == "") {
				lastNameField.val("test");
			}
			if (emailField.val() == "") {
				emailField.val("test@test.com");
			}
			$("#user_data_form").submit();
			break;
		case"user_data_second_form_block":
			formValidator.settings.ignore = "*";
			$("#user_data_form").submit();
			break;
		default:
			disableDisplayBlock(blockName).done(function() {
				window.location.reload();
			});
		}
	});
	$("#go_through_flow_panel .btn-refresh").on("click", function() {
		
	});
});
function getCurrentDisplayBlock(priorityDisplayBlocks) {
	for (var key in priorityDisplayBlocks) {
		if (priorityDisplayBlocks[key]) {
			return key;
		}
	}
}

function disableDisplayBlock(blockName) {
	var d = $.Deferred();
	$.ajax({
		method : "POST",
		url : routeDisableDisplayBlockAjax,
		data : {
			blockName : blockName
		}
	}).done(function(data) {
		d.resolve();
	});
	return d
}

function createIframe() {
	// $.ajax({
		// method : "POST",
		// url : routeGetIframesAjax,
		// statusCode : {
			// 408 : function() {
				// window.location.reload()
			// }
		// }
	// }).done(function(data) {
		// $(".frame-top, .frame-top > .container").css("height", "auto");
		// if (false !== data) {
			// var html = "";
			// for (var i in data) {
				// if (data[i]["width"] == null) {
					// data[i]["width"] = "100%"
				// }
				// if (data[i]["height"] == null) {
					// data[i]["height"] = "500";
					// var styleHeight = ' style="height:100vh;" '
				// }
				// html = html + '<div class="frame-one center-block" style="max-width:' + data[i]["width"] + 'px;">';
				// if ("" == data[i]["src"]) {
					// html = html + '<iframe srcdoc="' + data[i]["srcdoc"] + '" width="' + data[i]["width"] + '" height="' + data[i]["height"] + '"' + styleHeight + "></iframe>"
				// } else {
					// html = html + '<iframe src="' + data[i]["src"] + '" width="' + data[i]["width"] + '" height="' + data[i]["height"] + '"' + styleHeight + "></iframe>"
				// }
				// html = html + '<br><div class="text-center"><a class="btn btn-success remove-frame">Continue</a></div></div>'
			// }
			// $("#iframe_panel").append(html);
			// $("body").trigger({
				// type : "createIframe"
			// })
		// } else {
			// createBanners()
		// }
	// })
}

function createHostedCoReg() {
	if (document.referrer != document.documentURI) {
		disableDisplayBlock("hosted_co_reg_block").done(function() {
			window.location.reload()
		});
		return false
	}
	$.ajax({
		method : "POST",
		url : routeGetHostedCoRegAjax,
		statusCode : {
			408 : function() {
				window.location.reload()
			}
		}
	}).done(function(data) {
		if (false !== data) {
			var html = "";
			if (data["width"] == null) {
				data["width"] = "100%"
			}
			if (data["height"] == null) {
				data["height"] = "500"
			}
			html += '<div class="center-block" style="max-width:' + data["width"] + 'px;">';
			html += '<iframe id="offer_frame" src="' + data["src"] + '" width="' + data["width"] + '" height="' + data["height"] + '" frameborder="0" scrolling="auto">' + "Sorry, your browser doesn't support this method. Please upgrade.</iframe>";
			html += "</div>";
			$("#hosted_co_reg_panel").append(html);
			$("body").trigger({
				type : "createHostedCoReg"
			})
		} else {
			disableDisplayBlock("hosted_co_reg_block").done(function() {
				window.location.reload()
			})
		}
	})
}

function createBanners() {
	$.ajax({
		method : "POST",
		url : routeGetBannersAjax
	}).done(function(data) {
		var html = "";
		for (var i in data) {
			html = '<a href="' + data[i]["banner_url"] + '" target="blank" class="banner-wrapper col-sm-6"><img src="' + data[i]["img_src"] + '"/></a>';
			$("#banners_panel").append(html)
		}
		$("body").trigger({
			type : "createBanners"
		})
	})
}


$(document).ready(function() {
	if ($("#user_data_form_block_signUpTwo").length) {
		var questionsBlockHtml = createQuestionsHtmlBlock(premiumQuestions);
		$("#user_data_form_block_signUpTwo").prepend(questionsBlockHtml);
		$("#user_data_form_block_signUpTwo").find("select").styliseSelect();
		$("body").trigger({
			type : "createPremiumQuestions"
		})
	}
	var errorMessages = {
		"user_data_form[gender]" : "Please select gender",
		agree : "Accepting the terms and conditions is required",
		"user_data_form[mobilePhonenumber]" : {
			required : "Mobile number must begin with 04",
			regx : "Mobile number must begin with 04",
			minlength : "You must enter 10 digits for Mobile",
			maxlength : "You must enter 10 digits for Mobile"
		}
	};
	var fieldsWithErrorMessage = [];
	$.each(errorMessages, function(index, value) {
		fieldsWithErrorMessage.push(index)
	});
	$.validator.addMethod("regx", function(value, element, regexpr) {
		return regexpr.test(value)
	}, "Please enter a valid value.");
	$.validator.methods.email = function(value, element) {
		return this.optional(element) || /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value)
	};
	formValidator = $("#user_data_form").validate({
		errorPlacement : function(error, element) {
			if (-1 != $.inArray(element.attr("name"), fieldsWithErrorMessage)) {
				error.prependTo(element.parents("div:first"))
			}
			element.parent("div").addClass("has-error")
		},
		success : function(label) {
			$("#" + label.attr("for")).parent("div.has-error").removeClass("has-error")
		},
		onfocusout : false,
		rules : {
			"user_data_form[mobilePhonenumber]" : {
				regx : /^04.*$/,
				required : true,
				minlength : 10,
				maxlength : 10
			}
		},
		messages : errorMessages
	});
	$("#user_data_form select").on("change", function() {
		$(this).valid()
	});
	$("body").on("input", "#user_data_form_zipcode", function() {
		$.ajax({
			method : "POST",
			url : routeLocationByZipcodeAjax,
			data : {
				zipcode : $(this).val()
			}
		}).done(function(data) {
			var citySelect = $("#user_data_form_city");
			$("#user_data_form_region").val(data["region"]);
			citySelect.find("option").not(":first").remove();
			$.each(data["cities"], function(key, value) {
				citySelect.append($("<option></option>").attr("value", value).text(value))
			});
			citySelect.styliseSelect()
		})
	})
});
$(document).ready(function() {
	$("body").on("change", ".answer", function() {
		var questionId = $(this).attr("data-question-id");
		var answerId = $(this).val();
		var abTestId = $(this).parents("div.question-one:first").attr("data-ab-test-id");
		if (answerId != "") {
			saveAnswersForQuestion(questionId, [answerId], abTestId)
		}
	});
	$("body").on("click", "a.answer", function() {
		var questionId = $(this).attr("data-question-id");
		var answerId = $(this).attr("data-answer-id");
		var abTestId = $(this).parents("div.question-one:first").attr("data-ab-test-id");
		saveAnswersForQuestion(questionId, [answerId], abTestId)
	});
	$("body").on("click", "button.skip_grid", function() {
		var questionId = $(this).attr("data-question-id");
		var abTestId = $(this).parents("div.question-one:first").attr("data-ab-test-id");
		saveAnswersForQuestion(questionId, [], abTestId)
	});
	$("body").on("click", "button.choose_grid", function() {
		if ($(this).hasClass("disabled")) {
			return
		}
		var checked = $(this).parent().find("input:checked");
		var questionId = $(this).attr("data-question-id");
		var answers = [];
		var abTestId = $(this).parents("div.question-one:first").attr("data-ab-test-id");
		$.each(checked, function() {
			answers.push($(this).val())
		});
		$(this).addClass("disabled").parent().find("input").attr("disabled", "disabled");
		saveAnswersForQuestion(questionId, answers, abTestId)
	});
	$("body").on("createSubCoReg", function(event) {
		var progressBar = $("#progress_bar");
		var unansweredCoRegCount = parseInt(progressBar.attr("data-unanswered-count")) + 1;
		progressBar.attr("data-unanswered-count", unansweredCoRegCount.toString())
	});
	$("body").on("loadQuestions", function(event) {
		var divProgressBarObject = $("#progress_bar");
		var percent = event.answeredCount * 70 / (event.answeredCount + event.unansweredCount) + 30;
		var divPercentObject = $("#percent");
		divProgressBarObject.attr("data-unanswered-count", event.unansweredCount.toString()).attr("data-answered-count", event.answeredCount.toString());
		divProgressBarObject.css({
			width : "" + percent + "%"
		});
		divPercentObject.text("" + Math.round(percent) + "  %");
		if (Math.round(percent) > "53") {
			divPercentObject.css({
				color : "#fff"
			})
		}
		$(".question-one").slice(0, 4).addClass("active")
	});
	$("body").on("answerAsked", function() {
		var divProgressBarObject = $("#progress_bar");
		var divPercentObject = $("#percent");
		var answeredCoRegCount = parseInt(divProgressBarObject.attr("data-answered-count")) + 1;
		var unansweredCoRegCount = parseInt(divProgressBarObject.attr("data-unanswered-count")) - 1;
		var percent = answeredCoRegCount * 70 / (answeredCoRegCount + unansweredCoRegCount) + 30;
		divProgressBarObject.css({
			width : "" + percent + "%"
		});
		divPercentObject.text("" + Math.round(percent) + "%");
		if (Math.round(percent) > "53") {
			divPercentObject.css({
				color : "#fff"
			})
		}
		divProgressBarObject.attr("data-answered-count", answeredCoRegCount.toString()).attr("data-unanswered-count", unansweredCoRegCount.toString())
	})
});
function saveAnswersForQuestion(questionId, answers, abTestId) {
	var element = $('div.question-one[data-question-id="' + questionId + '"]');
	element.find(".answer").attr("disabled", "disabled").addClass("disabled");
	$.ajax({
		method : "POST",
		url : routeSaveAnswerAjax,
		data : {
			questionId : questionId,
			answers : answers,
			abTestId : abTestId
		},
		statusCode : {
			408 : function() {
				window.location.reload()
			}
		}
	}).done(function(data) {
		if (data.length > 0) {
			createSubQuestions(data, element)
		}
		removeQuestion(element);
		$("body").trigger({
			type : "answerAsked"
		})
	})
}

function createSubQuestions(data, element) {
	for (var i in data) {
		if (data[i]["direct"]) {
			createDirectSubQuestion(data[i], element)
		} else {
			createSubQuestionInHisPosition(data[i])
		}
	}
}

function createDirectSubQuestion(data, element) {
	var html = createOneQuestion(data);
	element.after(html);
	var newCoReg = element.next("div.question-one");
	newCoReg.hide();
	newCoReg.find("select").styliseSelect();
	newCoReg.animate({
		height : "toggle"
	}, 400);
	$("body").trigger({
		type : "createSubCoReg"
	})
}

function createSubQuestionInHisPosition(data) {
	var html = createOneQuestion(data);
	var questions = $("div.question-one");
	var firstQuestionBigerPos = $();
	questions.each(function() {
		if ($(this).data("position") > data["position"]) {
			firstQuestionBigerPos = $(this);
			return false
		}
	});
	if (firstQuestionBigerPos.prev("div.question-one").data("question-id") != data["question_id"]) {
		firstQuestionBigerPos.before(html);
		var newCoReg = firstQuestionBigerPos.prev("div.question-one");
		newCoReg.find("select").styliseSelect();
		if (firstQuestionBigerPos.hasClass("active")) {
			newCoReg.animate({
				height : "toggle"
			}, 400);
			newCoReg.addClass("active")
		}
		$("body").trigger({
			type : "createSubCoReg"
		})
	}
}

function removeQuestion(element) {
	element.animate({
		height : "toggle"
	}, 200, function() {
		element.remove();
		if ($("div").is("#questions") == true && $("#questions").find(".question-one").length == 0) {
			$("body").trigger({
				type : "allCoRegAsked"
			})
		}
		if ($("div").is("#questions") == true && $("#questions").find(".active").length == 0) {
			$(".question-one").slice(0, 4).addClass("active")
		}
	})
}

function getQuestions() {
	$.ajax({
		method : "POST",
		url : routeGetQuestionsAjax,
		statusCode : {
			408 : function() {
				window.location.reload()
			}
		}
	}).done(function(data) {
		if (data["questions"].length == 0) {
			$("body").trigger({
				type : "allCoRegAsked"
			})
		} else {
			for (var i in data["questions"]) {
				var html = createOneQuestion(data["questions"][i]);
				$("#questions").append(html)
			}
			$("#questions select").styliseSelect();
			$("body").trigger({
				type : "loadQuestions",
				answeredCount : data["answered_count"],
				unansweredCount : data["questions"].length
			})
		}
	})
}

function createQuestionsHtmlBlock(data) {
	var html = "";
	for (var i in data) {
		html = html + createOneQuestion(data[i])
	}
	return html
}

function createOneQuestion(questionData) {
	var imageHtml = createQuestionImage(questionData);
	var html = '<div class="question-one clearfix" ' + 'data-position="' + questionData["position"] + '" ' + 'data-question-id="' + questionData["question_id"] + '" ' + 'data-ab-test-id="' + questionData["ab_test_id"] + '">' + imageHtml + '<div class="question-one-content">' + '<h4 class="question-one-header">' + questionData["header"] + "</h4>" + '<p class="question-one-text">' + questionData["text"] + "</p>";
	switch(questionData["answers_type"]) {
	case 0:
		html += '<div class="question-one-answers type-radio">' + createQuestionRadio(questionData["answers"], questionData["question_id"]) + "</div>";
		break;
	case 1:
		html += '<div class="question-one-answers type-dropdown">' + createQuestionDropdown(questionData) + "</div>";
		break;
	case 2:
		html += '<div class="question-one-answers type-click-button">' + createQuestionButton(questionData["answers"], questionData["question_id"]) + "</div>";
		break;
	case 3:
		html += '<div class="question-one-answers type-grid">' + createQuestionGrid(questionData) + "</div>";
		break;
	case 4:
		html += '<div class="question-one-answers type-fresh-button">' + createQuestionFreshButton(questionData) + "</div>";
		break
	}
	html += '<p class="question-one-sub-text">' + questionData["sub_text"] + '</p></div><br style="clear:both;"></div>';
	return html
}

function createQuestionImage(questionData) {
	if ("" == questionData["image_url"]) {
		return ""
	}
	var imageHtmlDiv = '<div class="question-one-img" id="question_one_img_' + questionData["question_id"] + '"></div>';
	var baseUrl = location.protocol + "//" + location.hostname;
	var imageHtml = "<style>" + "#question_one_img_" + questionData["question_id"] + ' {background-image: url("' + baseUrl + questionData["image_url"] + '");}' + "</style>";
	return imageHtml + imageHtmlDiv
}

function createQuestionGrid(questionData) {
	var answersData = questionData["answers"];
	var gridHtml = "<div>";
	for (var i in answersData) {
		gridHtml = gridHtml + '<div class="checkbox">' + '<label><input value="' + answersData[i]["answer_id"] + '" type="checkbox">' + '<span class="cr"><i class="cr-icon fa fa-check"></i></span>' + answersData[i]["answer_text"] + "</label></div>"
	}
	gridHtml = gridHtml + "</div>" + '<button type="button" class="choose_grid btn btn-success" data-question-id="' + questionData["question_id"] + '">' + questionData["choose_text"] + "</button>" + '<button type="button" class="skip_grid btn btn-link" data-question-id="' + questionData["question_id"] + '">' + questionData["skip_text"] + "</button>";
	return gridHtml
}

function createQuestionFreshButton(questionData) {
	var answersData = questionData["answers"];
	var questionId = questionData["question_id"];
	var buttonHtml = '<div class="btn-group">';
	for (var i in answersData) {
		var oneAnswer = "";
		switch(answersData[i]["answer_text"].toLowerCase()) {
		case"no":
			oneAnswer = '<a class="answer btn btn-no" data-answer-id="' + answersData[i]["answer_id"] + '" data-question-id="' + questionId + '">' + answersData[i]["answer_text"] + "</a>";
			break;
		default:
			oneAnswer = '<a class="answer btn btn-yes" data-answer-id="' + answersData[i]["answer_id"] + '" data-question-id="' + questionId + '">' + answersData[i]["answer_text"] + "</a>"
		}
		buttonHtml += oneAnswer
	}
	return buttonHtml + "</div>"
}

function createQuestionRadio(answersData, questionId) {
	var radioHtml = "";
	for (var i in answersData) {
		radioHtml = radioHtml + '<div class="radio">' + '<label><input class="answer" name="q' + questionId + '" data-answer-id="' + answersData[i]["answer_id"] + '" data-question-id="' + questionId + '" value="' + answersData[i]["answer_id"] + '" type="radio" ><span class="cr"><i class="cr-icon fa fa-circle"></i></span>' + answersData[i]["answer_text"] + "</label></div>"
	}
	return radioHtml
}

function createQuestionDropdown(questionData) {
	var answersData = questionData["answers"];
	var dropdownHtml = '<select name="Choose" class="answer form-control" data-question-id="' + questionData["question_id"] + '">' + '<option data-answer-id="" value="">' + questionData["choose_text"] + "</option>";
	for (var i in answersData) {
		dropdownHtml = dropdownHtml + '<option data-answer-id="' + answersData[i]["answer_id"] + '" value="' + answersData[i]["answer_id"] + '">' + answersData[i]["answer_text"] + "</option>"
	}
	dropdownHtml = dropdownHtml + "</select>";
	return dropdownHtml
}

function createQuestionButton(answersData, questionId) {
	var buttonHtml = '<div class="btn-group">';
	for (var i in answersData) {
		var oneAnswer = "";
		switch(answersData[i]["answer_text"].toLowerCase()) {
		case"yes":
			oneAnswer = '<a class="answer btn btn-success" data-answer-id="' + answersData[i]["answer_id"] + '" data-question-id="' + questionId + '"><span class="glyphicon glyphicon-ok"></span>&nbsp;' + answersData[i]["answer_text"] + "</a>";
			break;
		case"no":
			oneAnswer = '<a class="answer btn btn-danger" data-answer-id="' + answersData[i]["answer_id"] + '" data-question-id="' + questionId + '"><span class="glyphicon glyphicon-remove"></span>&nbsp;' + answersData[i]["answer_text"] + "</a>";
			break;
		default:
			oneAnswer = '<a class="answer btn btn-warning" data-answer-id="' + answersData[i]["answer_id"] + '" data-question-id="' + questionId + '">' + answersData[i]["answer_text"] + "</a>"
		}
		buttonHtml = buttonHtml + oneAnswer
	}
	return buttonHtml + "</div>"
}