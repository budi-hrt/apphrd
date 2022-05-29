jQuery(function ($) {
	$(".chosen-select").chosen({ allow_single_deselect: true });
	//resize the chosen on window resize
}); // == Ahir Function =====

// SAVE MENU =====
$("#simpan").click(function () {
	let url = $("#f_create").attr("action");
	let data = $("#f_create").serialize();
	// validate form
	let Menu = $("#menu option:selected").attr("value");
	let title = $("input[name=title]");
	let url_sb = $("input[name=url]");
	let result = "";
	if (Menu == "") {
		$(".alert").css("display", "block");
	} else {
		$(".alert").css("display", "none");
		result += "1";
		console.log(Menu);
	}
	if (title.val() == "") {
		$(".alert").css("display", "block");
	} else {
		$(".alert").css("display", "none");
		result += "2";
	}
	if (url_sb.val() == "") {
		$(".alert").css("display", "block");
	} else {
		$(".alert").css("display", "none");
		result += "3";
	}
	if (result == "123") {
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
						text: "data submenu berhasil di tambhakan ke database",
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
	window.location.href = base_url + "menu/submenu";
});

$("#update").click(function () {
	let url = $("#f_update").attr("action");
	let data = $("#f_update").serialize();
	// validate form

	let Menu = $("#menu option:selected").attr("value");
	let title = $("input[name=title]");
	let url_sb = $("input[name=url]");
	let result = "";
	if (Menu == "") {
		$(".alert").css("display", "block");
	} else {
		$(".alert").css("display", "none");
		result += "1";
		console.log(Menu);
	}
	if (title.val() == "") {
		$(".alert").css("display", "block");
	} else {
		$(".alert").css("display", "none");
		result += "2";
	}
	if (url_sb.val() == "") {
		$(".alert").css("display", "block");
	} else {
		$(".alert").css("display", "none");
		result += "3";
	}
	if (result == "123") {
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
