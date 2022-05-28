jQuery(function ($) {
	ShowAllMenu();
	var myTable = $("#dynamic-table")
		//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
		.DataTable({
			bAutoWidth: false,
			aoColumns: [
				{
					bSortable: false,
				},
				null,
				null,
				null,
				null,
				null,
				{
					bSortable: false,
				},
			],
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
					' <a class="green item-edit" href="javascript:;" data="' +
					data[i].id +
					'">' +
					'<i class="ace-icon fa fa-pencil bigger-130"></i>' +
					"</a>" +
					'  <a class="red item-hapus" href="javascript:;" data="' +
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
