jQuery(function ($) {
	$(".easy-pie-chart.percentage").each(function () {
		var $box = $(this).closest(".infobox");
		var barColor =
			$(this).data("color") ||
			(!$box.hasClass("infobox-dark")
				? $box.css("color")
				: "rgba(255,255,255,0.95)");
		var trackColor =
			barColor == "rgba(255,255,255,0.95)"
				? "rgba(255,255,255,0.25)"
				: "#E2E2E2";
		var size = parseInt($(this).data("size")) || 50;
		$(this).easyPieChart({
			barColor: barColor,
			trackColor: trackColor,
			scaleColor: false,
			lineCap: "butt",
			lineWidth: parseInt(size / 10),
			animate: ace.vars["old_ie"] ? false : 1000,
			size: size,
		});
	});

	//flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
	//but sometimes it brings up errors with normal resize event handlers
	$.resize.throttleWindow = false;

	var placeholder = $("#piechart-placeholder").css({
		width: "90%",
		"min-height": "150px",
	});
	// let sakit = <?= $data['sakittahunan']; ?>;
	// var alpa = <?= $data['alpatahunan']; ?>;
	// var cuti = <?= $data['cutitahunan']; ?>;
	// var izin = <?= $data['izintahunan']; ?>;
	console.log(sakit);
	var data = [
		{
			label: "cuti =" + cuti + " hari",
			data: cuti,
			color: "#68BC31",
		},
		{
			label: "izin =" + izin + " hari",
			data: izin,
			color: "#2091CF",
		},

		{
			label: "alpa = " + alpa + " hari",
			data: alpa,
			color: "#DA5430",
		},
		{
			label: "Sakit = " + sakit + " hari",
			data: sakit,
			color: "#FEE074",
		},
	];

	function drawPieChart(placeholder, data, position) {
		$.plot(placeholder, data, {
			series: {
				pie: {
					show: true,
					tilt: 0.8,
					highlight: {
						opacity: 0.25,
					},
					stroke: {
						color: "#fff",
						width: 2,
					},
					startAngle: 2,
				},
			},
			legend: {
				show: true,
				position: position || "ne",
				labelBoxBorderColor: null,
				margin: [-30, 15],
			},
			grid: {
				hoverable: true,
				clickable: true,
			},
		});
	}
	drawPieChart(placeholder, data);

	/**
        we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
        so that's not needed actually.
        */
	placeholder.data("chart", data);
	placeholder.data("draw", drawPieChart);

	//pie chart tooltip example
	var $tooltip = $(
		"<div class='tooltip top in'><div class='tooltip-inner'></div></div>"
	)
		.hide()
		.appendTo("body");
	var previousPoint = null;

	placeholder.on("plothover", function (event, pos, item) {
		if (item) {
			if (previousPoint != item.seriesIndex) {
				previousPoint = item.seriesIndex;
				var tip = item.series["label"];
				$tooltip.show().children(0).text(tip);
			}
			$tooltip.css({
				top: pos.pageY + 10,
				left: pos.pageX + 10,
			});
		} else {
			$tooltip.hide();
			previousPoint = null;
		}
	});

	/////////////////////////////////////
	$(document).one("ajaxloadstart.page", function (e) {
		$tooltip.remove();
	});

	var d1 = [];
	for (var i = 0; i < Math.PI * 2; i += 0.5) {
		d1.push([i, Math.sin(i)]);
	}

	var d2 = [];
	for (var i = 0; i < Math.PI * 2; i += 0.5) {
		d2.push([i, Math.cos(i)]);
	}

	var d3 = [];
	for (var i = 0; i < Math.PI * 2; i += 0.2) {
		d3.push([i, Math.tan(i)]);
	}

	var sales_charts = $("#sales-charts").css({
		width: "100%",
		height: "220px",
	});
	$.plot(
		"#sales-charts",
		[
			{
				label: "Domains",
				data: d1,
			},
			{
				label: "Hosting",
				data: d2,
			},
			{
				label: "Services",
				data: d3,
			},
		],
		{
			hoverable: true,
			shadowSize: 0,
			series: {
				lines: {
					show: true,
				},
				points: {
					show: true,
				},
			},
			xaxis: {
				tickLength: 0,
			},
			yaxis: {
				ticks: 10,
				min: -2,
				max: 2,
				tickDecimals: 3,
			},
			grid: {
				backgroundColor: {
					colors: ["#fff", "#fff"],
				},
				borderWidth: 1,
				borderColor: "#555",
			},
		}
	);

	$('#recent-box [data-rel="tooltip"]').tooltip({
		placement: tooltip_placement,
	});

	function tooltip_placement(context, source) {
		var $source = $(source);
		var $parent = $source.closest(".tab-content");
		var off1 = $parent.offset();
		var w1 = $parent.width();

		var off2 = $source.offset();
		//var w2 = $source.width();

		if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
			return "right";
		return "left";
	}

	$(".dialogs,.comments").ace_scroll({
		size: 300,
	});

	//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
	//so disable dragging when clicking on label
	var agent = navigator.userAgent.toLowerCase();
	if (ace.vars["touch"] && ace.vars["android"]) {
		$("#tasks").on("touchstart", function (e) {
			var li = $(e.target).closest("#tasks li");
			if (li.length == 0) return;
			var label = li.find("label.inline").get(0);
			if (label == e.target || $.contains(label, e.target))
				e.stopImmediatePropagation();
		});
	}

	$("#tasks").sortable({
		opacity: 0.8,
		revert: true,
		forceHelperSize: true,
		placeholder: "draggable-placeholder",
		forcePlaceholderSize: true,
		tolerance: "pointer",
		stop: function (event, ui) {
			//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
			$(ui.item).css("z-index", "auto");
		},
	});
	$("#tasks").disableSelection();
	$("#tasks input:checkbox")
		.removeAttr("checked")
		.on("click", function () {
			if (this.checked) $(this).closest("li").addClass("selected");
			else $(this).closest("li").removeClass("selected");
		});

	//show the dropdowns on top or bottom depending on window height and menu position
	$("#task-tab .dropdown-hover").on("mouseenter", function (e) {
		var offset = $(this).offset();

		var $w = $(window);
		if (offset.top > $w.scrollTop() + $w.innerHeight() - 100)
			$(this).addClass("dropup");
		else $(this).removeClass("dropup");
	});
});
