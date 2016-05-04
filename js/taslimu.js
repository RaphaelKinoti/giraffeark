/*
**Author - Raphael Kinoti
**Date	-	06 Feb 2016
*/

var base_url = "http://taslimu.mymsanii.com/";

$('#topbtn').click(function(e){
	e.preventDefault();


	var amount = $('#amount').val();

	console.log(amount);

	if(amount)
	{
		$('.payamount').text(amount);

		$('#loadmoney').modal('show');
	}
	else
	{
		$('#amount').css('border-color', 'red');

		setTimeout(function(){
			$('#amount').css('border-color', '#ccc');
		},3000);
	}
})