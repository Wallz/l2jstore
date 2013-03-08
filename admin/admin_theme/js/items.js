$(document).ready(function(){
	$(
		function()
		{
			$('input[name=item_date_available]').datepicker();
			$('input[name=item_date_available]').tooltip(
				{
					placement : 'right',
					trigger : 'hover'
				}
			)
			
			$('input[name=credit]').tooltip(
				{
					placement : 'right',
					trigger : 'hover'
				}
			)
		}
	);
})