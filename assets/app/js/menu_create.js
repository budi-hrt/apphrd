jQuery(function ($) {
	// scrollables
	$(".scrollable").each(function () {
		var $this = $(this);
		$(this).ace_scroll({
			size: $this.attr("data-size") || 100,
			//styleClass: 'scroll-left scroll-margin scroll-thin scroll-dark scroll-light no-track scroll-visible'
		});
	});
}); // == Ahir Function =====

// SAVE MENU =====
$("#simpan").click(function () {
	var url = $("#f_create").attr("action");
	var data = $("#f_create").serialize();
	// validate form
	var nameMenu = $("input[name=menu]");
	var iconMenu = $("input[name=icon]");
	var result = "";
	if (nameMenu.val() == "") {
		$(".alert").css("display", "block");
	} else {
		$(".alert").css("display", "none");
		result += "1";
	}
	if (iconMenu.val() == "") {
		$(".alert").css("display", "block");
	} else {
		$(".alert").css("display", "none");
		result += "2";
	}
	if (result == "12") {
		$.ajax({
			type: "ajax",
			method: "post",
			url: url,
			data: data,
			async: false,
			dataType: "json",
			success: function (response) {
				if (response.success) {
					$("#f_create")[0].reset();
					$.gritter.add({
						title: "Data berhasil disimpan",
						text: "data menu berhasil di tambhakan ke database",
						class_name: "gritter-info gritter-center",
					});
					return false;
				} else {
					alert("error");
				}
			},
			error: function () {
				alert("could not add data");
			},
		});
	}
});

$("#back").on("click", function () {
	window.location.href = base_url + "menu";
});

$("#update").click(function () {
	let url = $("#f_update").attr("action");
	let data = $("#f_update").serialize();
	// validate form
	let nameMenu = $("input[name=menu]");
	let iconMenu = $("input[name=icon]");
	let result = "";

	if (nameMenu.val() == "") {
		nameMenu.addClass("is-invalid");
		$("#f_update").find(".invalid-feedback").text("Invalid feedback");
	} else {
		nameMenu.removeClass("is-invalid");
		$("#f_update").find(".invalid-feedback").text("");
		result += "1";
	}
	if (iconMenu.val() == "") {
		iconMenu.addClass("is-invalid");
		$("#f_update").find(".invalid-feedback").text("Invalid feedback");
	} else {
		iconMenu.removeClass("is-invalid");
		$("#f_update").find(".invalid-feedback").text("");
		result += "2";
	}
	if (result == "12") {
		$.ajax({
			type: "ajax",
			method: "post",
			url: url,
			data: data,
			async: false,
			dataType: "json",
			success: function (response) {
				if (response.success) {
					$.gritter.add({
						title: "Data berhasil update",
						text: "data menu berhasil di update ke database",
						class_name: "gritter-success gritter-center",
					});
					return false;
				} else {
					alert("error");
				}
			},
			error: function () {
				alert("could not add data");
			},
		});
	}
});
