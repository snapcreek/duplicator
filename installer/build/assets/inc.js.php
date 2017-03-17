<script type="text/javascript">
	//Unique namespace
	Duplicator = new Object();
    DUPX = new Object();

	DUPX.showProgressBar = function ()
    {
		DUPX.animateProgressBar('progress-bar');
		$('#ajaxerr-area').hide();
		$('#progress-area').show();
	}

	DUPX.hideProgressBar = function ()
    {
		$('#progress-area').hide(100);
		$('#ajaxerr-area').fadeIn(400);
	}

	DUPX.animateProgressBar = function(id)
    {
		//Create Progress Bar
		var $mainbar   = $("#" + id);
		$mainbar.progressbar({ value: 100 });
		$mainbar.height(25);
		runAnimation($mainbar);

		function runAnimation($pb) {
			$pb.css({ "padding-left": "0%", "padding-right": "90%" });
			$pb.progressbar("option", "value", 100);
			$pb.animate({ paddingLeft: "90%", paddingRight: "0%" }, 3500, "linear", function () { runAnimation($pb); });
		}
	}

    DUPX.toggleAll = function(id)
    {
		$(id + " *[data-type='toggle']").each(function() {
			$(this).trigger('click');
		});
	}


    DUPX.toggleClick = function()
    {
		var id     = $(this).attr('data-target');
		var text   = $(this).text().replace(/\+|\-/, "");
		var icon   = $(this).find('i.dupx-plus-square, i.dupx-minus-square');
		var target = $(id);
		$(icon).removeClass('dupx-plus-square dupx-minus-square');

		if (target.is(':hidden') ) {
			(icon.length)
				? $(icon).addClass('dupx-minus-square')
				: $(this).html("- " + text );
			target.show();
		} else {
			(icon.length)
				? $(icon).addClass('dupx-plus-square')
				: $(this).html("+ " + text );
			target.hide();
		}
	}
	
	$(document).ready(function()
    {

		
	});
</script>
