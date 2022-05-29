jQuery(function ($) {
	// ShowAllMenu();
	var myTable = $("#dynamic-table")
		//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
		.DataTable({
			bAutoWidth: false,

			aaSorting: [],
			select: {
				style: "multi",
			},
		});
});

function ShowAllMenu() {
	$.ajax({
		type: "ajax",
		url: base_url + "menu/showallmenu",
		asycn: false,
		dataType: "json",
		success: function (data) {
			var html = "";
			var i;
			var no = 1;
			for (i = 0; i < data.length; i++) {
				html +=
					"<tr>" +
					'<td class="text-center">' +
					no++ +
					"</td>" +
					"<td>" +
					'<div class="hidden-sm hidden-xs action-buttons">' +
					' <a class="blue" href="javascript:;">' +
					'<i class="ace-icon fa fa-search-plus bigger-130"></i>' +
					"</a>" +
					' <a class="green item-edit" href="' +
					base_url +
					"menu/update/" +
					data[i].id +
					'" data="' +
					data[i].id +
					'">' +
					'<i class="ace-icon fa fa-pencil bigger-130"></i>' +
					"</a>" +
					'  <a class="red item-delete" href="javascript:;" data="' +
					data[i].id +
					'">' +
					'<i class="ace-icon fa fa-trash-o bigger-130"></i>' +
					"</a>" +
					"</div>" +
					"</td>" +
					'<td class="text-center">' +
					data[i].menu +
					"</td>" +
					"<td>" +
					'<i class="fa ' +
					data[i].icon +
					'"></i>' +
					" " +
					data[i].icon +
					"</td>" +
					"</tr>";
			}
			$("#showMenu").html(html);
		},
		error: function () {
			alert("Cousld not get data from database");
		},
	});
}

$("#showMenu").on("click", ".item-delete", function () {
	let id = $(this).attr("data");

	bootbox.dialog({
		message: "<span class='bigger-110'>Yakin akan dihapus ?</span>",
		buttons: {
			danger: {
				label: "<i class='ace-icon fa fa-trash-o'></i> Hapus!",
				className: "btn-sm btn-danger",
				callback: function () {
					hapus(id);
				},
			},

			button: {
				label: "Batal",
				className: "btn-sm",
			},
		},
	});
});

const hapus = (id) => {
	$.ajax({
		type: "ajax",
		method: "get",
		url: base_url + "menu/deletemenu",
		data: {
			id: id,
		},
		async: false,
		dataType: "json",
		success: function (response) {
			if (response.success) {
				$.gritter.add({
					title: "Berhasil",
					text: "Data berhasil dihapus",
					image: base_url + "assets/images/avatars/avatar3.png", //in Ace demo ./dist will be replaced by correct assets path
					sticky: false,
					class_name: "gritter-warning",
				});
				setTimeout(function () {
					window.location.href = base_url + "menu";
				}, 2500);
			}
		},
		error: function () {
			alert("Could not data");
		},
	});
};
