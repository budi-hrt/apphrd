jQuery(function ($) {
	// ShowAllSubmenu();
	//initiate dataTables plugin
	var myTable = $("#dynamic-table")
		//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
		.DataTable({
			bAutoWidth: false,
			// aoColumns: [
			// 	{ bSortable: false },
			// 	null,
			// 	null,
			// 	null,
			// 	null,
			// 	null,

			// 	{ bSortable: false },
			// ],
			aaSorting: [],

			select: {
				style: "multi",
			},
		});
});

$("#showsubmenu").on("click", ".item-delete", function () {
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
		url: base_url + "menu/deletesubmenu",
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
					window.location.href = base_url + "menu/submenu";
				}, 2500);
			}
		},
		error: function () {
			alert("Could not data");
		},
	});
};
