jQuery(function ($) {
	$(".chosen-select").chosen({ allow_single_deselect: true });
	//resize the chosen on window resize
	$(".scrollable").each(function () {
		var $this = $(this);
		$(this).ace_scroll({
			size: $this.attr("data-size") || 100,
			//styleClass: 'scroll-left scroll-margin scroll-thin scroll-dark scroll-light no-track scroll-visible'
		});
	});
	tampil_update_sb_menu();
}); // == Ahir Function =====

$("#back").on("click", function () {
	window.location.href = base_url + "menu/submenu";
});

// Tampil epdate

const tampil_update_sb_menu = () => {
	let id = $("#sb_id").val();
	$.ajax({
		type: "get",
		url: base_url + "menu/getsubmenu",
		data: {
			id: id,
		},
		dataType: "json",
		success: function (data) {
			let induk = data.sc;
			$("#menu").val(data.menu_id).trigger("chosen:updated");
			$("#sc").val(data.sc).trigger("chosen:updated");
			// kalau select2 ('#id').val(5).trigger('change');
			$('input[name="title"]').val(data.title);
			$('input[name="url"]').val(data.url);
			$('input[name="icon"]').val(data.icon);

			if (induk == "single") {
				$("#sb").val(0).trigger("chosen:updated");
				$(".induk").hide();
			} else if (induk == "parent") {
				$("#sb").val(0).trigger("chosen:updated");
				$(".induk").hide();
			} else if (induk == "child") {
				$("#sb").val(data.sub_menu_id).trigger("chosen:updated");
				$(".induk").show();
			}
		},
	});
};

$("#sc").on("change", function () {
	let sc = $("#sc").find(":selected").val();
	if (sc == "child") {
		$(".induk").show();
	} else {
		$(".induk").hide();
		$("#sb").val(0).trigger("chosen:updated");
	}
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
