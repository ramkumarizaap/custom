$(function(){
	var subcat = $(".sub_category option:selected").val();
	switch(subcat)
	{
		case '1':
		case '3':
			property_suit();
		break;
		case '2':
			property_shirt();
		break;
		case '4':
			property_pant();
		break;
		case '5':
			property_coat();
		break;
	}

});
function property_suit()
{
	$("label input[type='radio']:checked").each(function(i,val){
		c = $(this).parent().parent().parent().parent().attr("class");
		c = c.split(" ");
		// alert(c[1]);
		if($(this).val()=="Double Breasted" && c[1]=="style")
		{
			$("div.number_of_buttons,div.jacket_lapels").show();
			$("label.number_of_buttons-1,label.number_of_buttons-3").hide();
		}
		else if($(this).val()=="Asian"  && c[1]=="style")
		{
			$("div.jacket_lapels div.iradio_flat-pink,div.number_of_buttons div.iradio_flat-pink").removeClass('checked');
			$("div.jacket_lapels div.iradio_flat-pink input,div.number_of_buttons div.iradio_flat-pink input").prop('checked',false);
			$("div.number_of_buttons,div.jacket_lapels").hide();
		}
		else if($(this).val()=="Single Breasted" && c[1]=="style")
		{
			$("div.number_of_buttons,div.jacket_lapels").show();
			$("label.number_of_buttons-1,label.number_of_buttons-3").show();
		}

		if($(this).val()=="No Pockets" && c[1]=="hip_pockets")
		{
			$("div.pocket_style div.iradio_flat-pink").removeClass('checked');
			$("div.pocket_style div.iradio_flat-pink input").prop('checked',false);
			$("div.pocket_style").hide();
		}
		else if($(this).val()=="2 Pockets" && c[1]=="hip_pockets")
		{
			$("div.pocket_style").show();
			$("label.pocket_style-Patched").show();
			$("label.pocket_style-Patched div.iradio_flat-pink,label.pocket_style-Double-Welt div.iradio_flat-pink,label.pocket_style-with-flaps div.iradio_flat-pink").show();
		}
		else if($(this).val()=="3 Pockets" && c[1]=="hip_pockets")
		{
			$("label.pocket_style-Patched div.iradio_flat-pink,label.pocket_style-Double-Welt div.iradio_flat-pink").show();			$("label.pocket_style-Patched div.iradio_flat-pink").hide();
			$("div.pocket_style").show();
			$("label.pocket_style-Patched").hide();
		}

		if($(this).val()=="No Buttons" && c[1]=="sleeve_buttons")
		{
			$("div.button_holes div.iradio_flat-pink").removeClass('checked');
			$("div.button_holes div.iradio_flat-pink input").prop('checked',false);
			$("div.button_holes").hide();
		}

		if(($(this).val()=="2" || $(this).val()=="3" || $(this).val()=="4" ) && c[1]=="sleeve_buttons")
		{
			$("div.button_holes div.iradio_flat-pink").addClass('checked');
			$("div.button_holes div.iradio_flat-pink input").prop('checked',true);
			$("div.button_holes").show();
		}

		if(c[1]=="back_pockets" && $(this).val()=="No Pockets")
		{ 
			$("div.back_pocket_style div.iradio_flat-pink").removeClass('checked');
			$("div.back_pocket_style div.iradio_flat-pink input").prop('checked',false);
			$("div.back_pocket_style").hide();
		}
		else if(c[1]=="back_pockets" && $(this).val()!="No Pockets")
		{
			$("div.back_pocket_style").show();
		}
	});
	
	$("label.property-value").click(function(){
		input = $(this).find("input[type='radio']").val();
		clss = $(this).parent().attr("class");
		clss = clss.split(" ");
		if(input=="Double Breasted" && clss[1]=="style")
		{
			$("div.jacket_lapels div.iradio_flat-pink,div.number_of_buttons div.iradio_flat-pink").removeClass('checked');
			$("div.jacket_lapels div.iradio_flat-pink input,div.number_of_buttons div.iradio_flat-pink input").prop('checked',false);
			$("div.number_of_buttons,div.jacket_lapels").show();
			$("label.number_of_buttons-1,label.number_of_buttons-3").hide();
			$("label.jacket_lapels-Notch div.iradio_flat-pink,label.number_of_buttons-2 div.iradio_flat-pink").addClass('checked');
			$("label.jacket_lapels-Notch div.iradio_flat-pink input,label.number_of_buttons-2 div.iradio_flat-pink input").prop('checked',true);

		}
		else if(input=="Asian"  && clss[1]=="style")
		{
			$("div.jacket_lapels div.iradio_flat-pink,div.number_of_buttons div.iradio_flat-pink").removeClass('checked');
			$("div.jacket_lapels div.iradio_flat-pink input,div.number_of_buttons div.iradio_flat-pink input").prop('checked',false);
			$("div.number_of_buttons,div.jacket_lapels").hide();
		}
		else if(input=="Single Breasted" && clss[1]=="style")
		{
			$("div.jacket_lapels div.iradio_flat-pink,div.number_of_buttons div.iradio_flat-pink").removeClass('checked');
			$("div.jacket_lapels div.iradio_flat-pink input,div.number_of_buttons div.iradio_flat-pink input").prop('checked',false);
			$("div.number_of_buttons,div.jacket_lapels").show();
			$("label.number_of_buttons-1,label.number_of_buttons-3").show();
			$("label.jacket_lapels-Notch div.iradio_flat-pink,label.number_of_buttons-2 div.iradio_flat-pink").addClass('checked');
			$("label.jacket_lapels-Notch div.iradio_flat-pink input,label.number_of_buttons-2 div.iradio_flat-pink input").prop('checked',true);
		}

		if(input=="No Pockets" && clss[1]=="hip_pockets")
		{
			$("div.pocket_style div.iradio_flat-pink").removeClass('checked');
			$("div.pocket_style div.iradio_flat-pink input").prop('checked',false);
			$("div.pocket_style").hide();
		}
		else if(input=="2 Pockets" && clss[1]=="hip_pockets")
		{
			$("div.pocket_style").show();
			$("label.pocket_style-Patched").show();
			$("label.pocket_style-Patched div.iradio_flat-pink,label.pocket_style-Double-Welt div.iradio_flat-pink,label.pocket_style-with-flaps div.iradio_flat-pink").show();
			$("div.pocket_style div.iradio_flat-pink").removeClass('checked');
			$("div.pocket_style div.iradio_flat-pink input").prop('checked',false);
			$("label.pocket_style-with-flaps div.iradio_flat-pink").addClass('checked');
			$("label.pocket_style--with-flaps div.iradio_flat-pink input").prop('checked',true);
		}
		else if(input=="3 Pockets" && clss[1]=="hip_pockets")
		{
			$("label.pocket_style-Patched").hide();
			$("label.pocket_style-Patched div.iradio_flat-pink,label.pocket_style-Double-Welt div.iradio_flat-pink").show();
			$("label.pocket_style-Patched div.iradio_flat-pink").hide();
			$("div.pocket_style").show();
			$("div.pocket_style div.iradio_flat-pink").removeClass('checked');
			$("div.pocket_style div.iradio_flat-pink input").prop('checked',false);
			$("label.pocket_style-with-flaps div.iradio_flat-pink").addClass('checked');
			$("label.pocket_style--with-flaps div.iradio_flat-pink input").prop('checked',true);
		}

		if(input=="No Buttons" && clss[1]=="sleeve_buttons")
		{
			$("div.button_holes div.iradio_flat-pink").removeClass('checked');
			$("div.button_holes div.iradio_flat-pink input").prop('checked',false);
			$("div.button_holes").hide();
		}

		if((input=="2" || input=="3" || input=="4" ) && clss[1]=="sleeve_buttons")
		{
			$("div.button_holes div.iradio_flat-pink").addClass('checked');
			$("div.button_holes div.iradio_flat-pink input").prop('checked',true);
			$("div.button_holes").show();
		}

		if(clss[1]=="back_pockets" && input=="No Pockets")
		{ 
			$("div.back_pocket_style div.iradio_flat-pink").removeClass('checked');
			$("div.back_pocket_style div.iradio_flat-pink input").prop('checked',false);
			$("div.back_pocket_style").hide();
		}
		else if(clss[1]=="back_pockets" && input!="No Pockets")
		{
			$("label.back_pocket_style-piped-pocket-with-button div.iradio_flat-pink").addClass('checked');
			$("label.back_pocket_style-piped-pocket-with-button div.iradio_flat-pink input").prop('checked',true);
			$("div.back_pocket_style").show();
		}
	});
}

function property_shirt()
{
	$("label input[type='radio']:checked").each(function(i,val){
		c = $(this).parent().parent().parent().parent().attr("class");
		c = c.split(" ");
		// alert(c[1]);
		if($(this).val()=="Short" && c[1]=="sleeves")
		{
			$("div.cuff_style div.iradio_flat-pink").removeClass('checked');
			$("div.cuff_style div.iradio_flat-pink input").prop('checked',false);
			$("div.cuff_style").hide();
		}
		else if($(this).val()!="Short" && c[1]=="sleeves")
		{
			$("div.cuff_style").show();
		}


		if($(this).val()=="Stand-up collar" && c[1]=="collar_style")
		{
			$("div.collar_buttons").show();
			$("label.collar_lining-No-Soft div.iradio_flat-pink input").prop('checked',true);
		}
		else if($(this).val()=="Wing collar" && c[1]=="collar_style")
		{
			$("div.collar_buttons").hide();
			$("label.collar_lining-No-Soft div.iradio_flat-pink input").prop('checked',true);
			$("div.collar_lining div.iradio_flat-pink,div.collar_buttons div.iradio_flat-pink").removeClass('checked');
			$("div.collar_lining div.iradio_flat-pink input,div.collar_buttons div.iradio_flat-pink input").prop('checked',false);
		}
		else if(($(this).val()=="Kent Collar" || $(this).val()=="Cutaway Collar" || $(this).val()=="Long Collar" ||
				$(this).val()=="Button Down" || $(this).val()=="Rounded Collar") && c[1]=="collar_style")
		{
			$("div.collar_buttons,div.collar_lining").show();
		}


		if($(this).val()=="Soft" && c[1]=="collar_lining")
		{
			$("label.collar_style-Stand-up-collar,label.collar_style-Wing-collar").hide();
		}
		else if($(this).val()=="No Soft" && c[1]=="collar_lining")
		{
			$("label.collar_style-Stand-up-collar,label.collar_style-Wing-collar").show();
		}

		if($(this).val()=="No Pockets" && c[1]=="chestpocket")
		{
			$("div.pocket_style div.iradio_flat-pink").removeClass('checked');
			$("div.pocket_style div.iradio_flat-pink input").prop('checked',false);
			$("div.pocket_style").hide();
		}
		else if($(this).val()!="No Pockets" && c[1]=="chestpocket")
		{
			$("div.pocket_style").show();
		}
	});
	$("label.property-value").click(function(){
		input = $(this).find("input[type='radio']").val();
		clss = $(this).parent().attr("class");
		clss = clss.split(" ");
		if(input=="Short" && clss[1]=="sleeves")
		{
			$("div.cuff_style div.iradio_flat-pink").removeClass('checked');
			$("div.cuff_style div.iradio_flat-pink input").prop('checked',false);
			$("div.cuff_style").hide();
		}
		else if(input!="Short" && clss[1]=="sleeves")
		{
			$("div.cuff_style div.iradio_flat-pink").removeClass('checked');
			$("div.cuff_style div.iradio_flat-pink input").prop('checked',false);
			$("label.cuff_style-Single-Cuff-1-Button div.iradio_flat-pink").addClass('checked');
			$("label.cuff_style-Single-Cuff-1-Button div.iradio_flat-pink input").prop('checked',true);
			$("div.cuff_style").show();
		}


		if(input=="Stand-up collar" && clss[1]=="collar_style")
		{
			$("div.collar_buttons").show();
			$("label.collar_lining-No-Soft div.iradio_flat-pink input").prop('checked',true);
			$("label.collar_buttons-1 div.iradio_flat-pink").addClass('checked');
			$("label.collar_buttons-1 div.iradio_flat-pink input").prop('checked',true);
		}
		else if(input=="Wing collar" && clss[1]=="collar_style")
		{
			$("div.collar_buttons").hide();
			$("label.collar_lining-No-Soft div.iradio_flat-pink input").prop('checked',true);
			$("div.collar_buttons div.iradio_flat-pink").removeClass('checked');
			$("div.collar_buttons div.iradio_flat-pink input").prop('checked',false);
		}
		else if((input=="Kent Collar" || input=="Cutaway Collar" || input=="Long Collar" ||
				input=="Button Down" || input=="Rounded Collar") && clss[1]=="collar_style")
		{
			$("label.collar_buttons-1 div.iradio_flat-pink").addClass('checked');
			$("label.collar_buttons-1 div.iradio_flat-pink input").prop('checked',true);
			$("div.collar_buttons,div.collar_lining").show();
		}


		if(input=="Soft" && clss[1]=="collar_lining")
		{
			$("div.collar_style div.iradio_flat-pink").removeClass('checked');
			$("div.collar_style div.iradio_flat-pink input").prop('checked',false);
			$("label.collar_style-Kent-Collar div.iradio_flat-pink").addClass('checked');
			$("label.collar_style-Kent-Collar div.iradio_flat-pink input").prop('checked',true);
			$("label.collar_style-Stand-up-collar,label.collar_style-Wing-collar").hide();
		}
		else if(input=="No Soft" && clss[1]=="collar_lining")
			$("label.collar_style-Stand-up-collar,label.collar_style-Wing-collar").show();

		if(input=="No Pockets" && clss[1]=="chestpocket")
		{
			$("div.pocket_style div.iradio_flat-pink").removeClass('checked');
			$("div.pocket_style div.iradio_flat-pink input").prop('checked',false);
			$("div.pocket_style").hide();
		}
		else if(input!="No Pockets" && clss[1]=="chestpocket")
		{
			$("label.pocket_style-Flap-Pockets div.iradio_flat-pink").addClass('checked');
			$("label.pocket_style-Flap-Pockets div.iradio_flat-pink input").prop('checked',true);
			$("div.pocket_style").show();
		}
	});
}

function property_pant()
{
	$("label input[type='radio']:checked").each(function(i,val){
		c = $(this).parent().parent().parent().parent().attr("class");
		c = c.split(" ");
		if($(this).val()=="No Pockets" && c[1]=="back_pockets")
		{
			$("div.back_pocket_style div.iradio_flat-pink").removeClass('checked');
			$("div.back_pocket_style div.iradio_flat-pink input").prop('checked',true);
			$("div.back_pocket_style").hide();
		}
	});
	$("label.property-value").click(function(){
		input = $(this).find("input[type='radio']").val();
		clss = $(this).parent().attr("class");
		clss = clss.split(" ");
		if(input=="No Pockets" && clss[1]=="back_pockets")
		{
			$("div.back_pocket_style div.iradio_flat-pink").removeClass('checked');
			$("div.back_pocket_style div.iradio_flat-pink input").prop('checked',true);
			$("div.back_pocket_style").hide();
		}
		else if(input!="No Pockets" && clss[1]=="back_pockets")
			$("div.back_pocket_style").show();
	});
}


function property_coat()
{
	$("label input[type='radio']:checked").each(function(i,val){
		c = $(this).parent().parent().parent().parent().attr("class");
		c = c.split(" ");
		if($(this).val()=="Single-breasted" &&
			($("label.collar-Classic input").is(":checked") || $("label.collar-Standup input").is(":checked")) 
			&& c[1]=="style")
		{
			$("div.lapels_width").hide();
			$("div.lapels_width label div.iradio_flat-pink").removeClass('checked');
			$("div.lapels_width input").prop('checked',false);
		}

		if($(this).val()=="Double-breasted" && $("label.collar-Lapels input").is(":checked") && c[1]=="style")
		{
			$("div.lapels_width").hide();
			$("div.lapels_width input").prop('checked',false);
			$("div.lapels_width label div").removeClass('checked');
			$("label.fastening-Buttons").show();
			$("label.fastening_style-Hidden,label.fastening-Zipper,label.fastening-Horn-toggle").hide();
			//$("label.fastening_style-Standard,label.fastening-Buttons").trigger('click');
			$("label.fastening_style-Standard div.iradio_flat-pink,label.fastening-Buttons div.iradio_flat-pink").addClass('checked');
			$("label.fastening_style-Standard div.iradio_flat-pink input,label.fastening-Buttons div.iradio_flat-pink input").prop('checked',true);
		}
		else if($(this).val()=="Double-breasted" && $("label.collar-Standup input").is(":checked") && c[1]=="style")
		{
			$("div.lapels_width").hide();
			$("div.lapels_width input").prop('checked',false);
			$("div.lapels_width label div").removeClass('checked');
			$("label.fastening-Zipper div.iradio_flat-pink").addClass('checked');
			$("label.fastening-Zipper div.iradio_flat-pink input").prop('checked',true);
			//$("label.fastening-Zipper").trigger('click');
			$("label.fastening-Zipper").show();
			$("label.fastening-Horn-toggle").hide();
		}

		else if($(this).val()=="Double-breasted" && $("label.collar-Classic input").is(":checked") && c[1]=="style")
		{
			$("div.lapels_width").hide();
			$("div.lapels_width input").prop('checked',false);
			$("div.lapels_width label div").removeClass('checked');
			$("label.fastening-Zipper div.iradio_flat-pink").addClass('checked');
			$("label.fastening-Zipper div.iradio_flat-pink input").prop('checked',true);
			//$("label.fastening-Zipper").trigger('click');
			$("label.fastening-Zipper").show();
			$("label.fastening-Buttons,label.fastening-Horn-toggle").hide();
		}

		if($(this).val()=="Single-breasted" && $("label.collar-Lapels input").is(":checked") && c[1]=="style")
		{
			$("label.fastening-Buttons").show();
			$("label.fastening_style-Hidden").show();
			$("label.fastening-Zipper,label.fastening-Horn-toggle").hide();
			//$("label.fastening_style-Standard,label.fastening-Buttons").trigger('click');
			$("label.fastening-Buttons div.iradio_flat-pink").addClass('checked');
			$("label.fastening-Buttons div.iradio_flat-pink input").prop('checked',true);

		}
		else if($(this).val()=="Single-breasted" && 
				($("label.collar-Classic input").is(":checked") || $("label.collar-Standup input").is(":checked"))
			 && c[1]=="style")
		{
			//$("label.fastening-Zipper").trigger('click');
 			$("label.fastening_style-Hidden,label.fastening-Zipper,label.fastening-Buttons,label.fastening-Horn-toggle").show();
		}

		if($(this).val()=="No Pockets" && c[1]=="pockets")
		{
			$("div.pocket_style  div.iradio_flat-pink").removeClass("checked");
			$("div.pocket_style div.iradio_flat-pink input").prop('checked',false);
			$("div.pocket_style").hide();
		}
		else if($(this).val()=="2 pockets" && c[1]=="pockets")
		{
			$("div.pocket_style").show();
			$("label.pocket_style-Patched,label.pocket_style-Diagonal,label.pocket_style-Diagonal-zipper").show();
		}
		else if($(this).val()=="3 pockets" && c[1]=="pockets")
		{
			$("div.pocket_style").show();
			$("label.pocket_style-Patched,label.pocket_style-Diagonal,label.pocket_style-Diagonal-zipper").hide();
			//$("label.pocket_style-Flap-Pocket").trigger('click');
		}

		if($(this).val()=="Loose" && c[1]=="belt")
		{
			$("label.pockets-3-pockets").hide();
			//$("label.pocket_style-Flap-Pocket").trigger('click');
		}
		else if($(this).val()!="Loose" && c[1]=="belt")
		{
			$("label.pockets-3-pockets").show();
		}
		if($(this).val()=="Lapels" && c[1]=="collar")
		{
			$("label.fastening-Buttons").show();
			$("label.fastening_style-Hidden,label.fastening-Zipper,label.fastening-Horn-toggle").hide();
			//$("label.fastening_style-Standard,label.fastening-Buttons").trigger('click');
			$("label.fastening-Buttons div.iradio_flat-pink").addClass('checked');
			$("label.fastening-Buttons div.iradio_flat-pink input").prop('checked',true);
		}
		else if( ($(this).val()=="Standup" || $(this).val()=="Classic") && c[1]=="collar" && $("label.style-Double-breasted input").is(":checked"))
		{
			$("div.lapels_width").hide();
			$("div.lapels_width input").prop('checked',false);
			$("div.lapels_width label div").removeClass('checked');
			$("div.fastening div.iradio_flat-pink").removeClass('checked');
			$("div.fastening div.iradio_flat-pink input").prop('checked',false);
			//$("label.fastening-Zipper").trigger('click');
			$("label.fastening-Zipper div.iradio_flat-pink").addClass('checked');
			$("label.fastening-Zipper div.iradio_flat-pink input").prop('checked',true);
			$("label.fastening-Zipper").show();
			$("label.fastening-Buttons,label.fastening-Horn-toggle").hide();
			$("label.fastening_style-Hidden").show();
		}

		if($(this).val()=="Lapels" && c[1]=="collar" && $("label.style-Single-breasted input").is(":checked"))
		{
			$("label.fastening_style-Hidden,div.lapels_width,label.fastening-Buttons").show();
			$("label.fastening-Zipper,label.fastening-Horn-toggle").hide();
			//$("label.fastening_style-Standard,label.fastening-Buttons").trigger('click');
			$("label.fastening-Buttons div.iradio_flat-pink").addClass('checked');
			$("label.fastening-Buttons div.iradio_flat-pink input").prop('checked',true);
		}
		else if( ($(this).val()=="Standup" || $(this).val()=="Classic") && c[1]=="collar" && $("label.style-Single-breasted input").is(":checked"))
		{
			$("div.lapels_width").hide();
			$("div.lapels_width input").prop('checked',false);
			$("div.lapels_width label div.iradio_flat-pink").removeClass('checked');
			//$("label.fastening-Zipper").trigger('click');
			$("label.fastening-Zipper").show();
			$("label.fastening-Buttons,label.fastening-Horn-toggle").show();
			$("label.fastening_style-Hidden").show();
		}
		else if( $(this).val()=="Lapels" && c[1]=="collar" && $("label.style-Double-breasted input").is(":checked"))
		{
			$("div.fastening div.iradio_flat-pink").removeClass('checked');
			$("div.fastening div.iradio_flat-pink input").prop('checked',false);
			$("div.lapels_width").hide();
			$("div.lapels_width input").prop('checked',false);
			$("div.lapels_width label div.iradio_flat-pink").removeClass('checked');
			//$("label.fastening-Zipper").trigger('click');
			$("label.fastening-Buttons div.iradio_flat-pink").addClass('checked');
			$("label.fastening-Buttons div.iradio_flat-pink input").prop('checked',true);
			$("label.fastening-Buttons").show();
			$("label.fastening-Zipper,label.fastening-Horn-toggle").hide();
			$("label.fastening_style-Hidden").hide();
		}

	});
	$("label.property-value").click(function(){
		input = $(this).find("input[type='radio']").val();
		clss = $(this).parent().attr("class");
		clss = clss.split(" ");
		if(input=="Single-breasted" && $("label.collar-Lapels input").is(":checked") && clss[1]=="style")
		{
			$("div.lapels_width").show();
			$("label.lapels_width-Wide div.iradio_flat-pink input").prop('checked',true);
			$("label.lapels_width-Wide div.iradio_flat-pink").addClass('checked');
		}
		else if(input=="Single-breasted" &&
			($("label.collar-Classic input").is(":checked") || $("label.collar-Standup input").is(":checked")) 
			&& clss[1]=="style")
		{
			$("div.lapels_width").hide();
			$("div.lapels_width input").prop('checked',false);
			$("div.lapels_width label div").removeClass('checked');
		}

		if(input=="Double-breasted" && $("label.collar-Lapels input").is(":checked") && clss[1]=="style")
		{
			$("div.lapels_width").hide();
			$("div.lapels_width input").prop('checked',false);
			$("div.lapels_width label div").removeClass('checked');
			$("label.fastening-Buttons").show();
			$("label.fastening_style-Hidden,label.fastening-Zipper,label.fastening-Horn-toggle").hide();
			//$("label.fastening_style-Standard,label.fastening-Buttons").trigger('click');
			$("label.fastening_style-Standard div.iradio_flat-pink,label.fastening-Buttons div.iradio_flat-pink").addClass('checked');
			$("label.fastening_style-Standard div.iradio_flat-pink input,label.fastening-Buttons div.iradio_flat-pink input").prop('checked',true);
		}
		else if(input=="Double-breasted" && $("label.collar-Standup input").is(":checked") && clss[1]=="style")
		{
			$("div.lapels_width").hide();
			$("div.lapels_width input").prop('checked',false);
			$("div.lapels_width label div").removeClass('checked');
			$("label.fastening-Zipper div.iradio_flat-pink").addClass('checked');
			$("label.fastening-Zipper div.iradio_flat-pink input").prop('checked',true);
			//$("label.fastening-Zipper").trigger('click');
			$("label.fastening-Zipper").show();
			$("label.fastening-Horn-toggle").hide();
		}

		else if(input=="Double-breasted" && $("label.collar-Classic input").is(":checked") && clss[1]=="style")
		{
			$("div.lapels_width").hide();
			$("div.lapels_width input").prop('checked',false);
			$("div.lapels_width label div").removeClass('checked');
			$("label.fastening-Zipper div.iradio_flat-pink").addClass('checked');
			$("label.fastening-Zipper div.iradio_flat-pink input").prop('checked',true);
			//$("label.fastening-Zipper").trigger('click');
			$("label.fastening-Zipper").show();
			$("label.fastening-Buttons,label.fastening-Horn-toggle").hide();
		}

		if(input=="Single-breasted" && $("label.collar-Lapels input").is(":checked") && clss[1]=="style")
		{
			$("label.fastening-Buttons").show();
			$("label.fastening_style-Hidden").show();
			$("label.fastening-Zipper,label.fastening-Horn-toggle").hide();
			//$("label.fastening_style-Standard,label.fastening-Buttons").trigger('click');
			$("label.fastening_style-Standard div.iradio_flat-pink,label.fastening-Buttons div.iradio_flat-pink").addClass('checked');
			$("label.fastening_style-Standard div.iradio_flat-pink input,label.fastening-Buttons div.iradio_flat-pink input").prop('checked',true);

		}
		else if(input=="Single-breasted" && 
				($("label.collar-Classic input").is(":checked") || $("label.collar-Standup input").is(":checked"))
			 && clss[1]=="style")
		{
			//$("label.fastening-Zipper").trigger('click');
			$("label.fastening-Zipper div.iradio_flat-pink").addClass('checked');
			$("label.fastening-Zipper div.iradio_flat-pink input").prop('checked',true);
			$("label.fastening_style-Hidden,label.fastening-Zipper,label.fastening-Buttons,label.fastening-Horn-toggle").show();
		}

		if(input=="No Pockets" && clss[1]=="pockets")
		{
			$("div.pocket_style  div.iradio_flat-pink").removeClass("checked");
			$("div.pocket_style div.iradio_flat-pink input").prop('checked',false);
			$("div.pocket_style").hide();
		}
		else if(input=="2 pockets" && clss[1]=="pockets")
		{
			$("div.pocket_style").show();
			$("label.pocket_style-Patched,label.pocket_style-Diagonal,label.pocket_style-Diagonal-zipper").show();
			$("label.pocket_style-Flap-Pocket div.iradio_flat-pink").addClass('checked');
			$("label.pocket_style-Flap-Pocket div.iradio_flat-pink input").prop('checked',true);
		}
		else if(input=="3 pockets" && clss[1]=="pockets")
		{
			$("div.pocket_style").show();
			$("label.pocket_style-Patched,label.pocket_style-Diagonal,label.pocket_style-Diagonal-zipper").hide();
			//$("label.pocket_style-Flap-Pocket").trigger('click');
			$("label.pocket_style-Flap-Pocket div.iradio_flat-pink").addClass('checked');
			$("label.pocket_style-Flap-Pocket div.iradio_flat-pink input").prop('checked',true);
		}

		if(input=="Loose" && clss[1]=="belt")
		{
			$("div.pocket_style  div.iradio_flat-pink").removeClass("checked");
			$("div.pocket_style div.iradio_flat-pink input").prop('checked',false);
			$("label.pockets-3-pockets").hide();
			//$("label.pocket_style-Flap-Pocket").trigger('click');
			$("label.pocket_style-Flap-Pocket div.iradio_flat-pink").addClass('checked');
			$("label.pocket_style-Flap-Pocket div.iradio_flat-pink input").prop('checked',true);
		}
		else if(input!="Loose" && clss[1]=="belt")
		{
			$("div.pocket_style  div.iradio_flat-pink").removeClass("checked");
			$("div.pocket_style div.iradio_flat-pink input").prop('checked',false);
			$("label.pockets-3-pockets").show();
			$("label.pocket_style-Flap-Pocket div.iradio_flat-pink").addClass('checked');
			$("label.pocket_style-Flap-Pocket div.iradio_flat-pink input").prop('checked',true);
		}
		if(input=="Lapels" && clss[1]=="collar")
		{
			$("div.fastening_style div.iradio_flat-pink").removeClass('checked');
			$("div.fastening_style div.iradio_flat-pink input").prop('checked',false);
			$("label.fastening-Buttons").show();
			$("label.fastening_style-Hidden,label.fastening-Zipper,label.fastening-Horn-toggle").hide();
			//$("label.fastening_style-Standard,label.fastening-Buttons").trigger('click');
			$("label.fastening_style-Standard div.iradio_flat-pink,label.fastening-Buttons div.iradio_flat-pink").addClass('checked');
			$("label.fastening_style-Standard div.iradio_flat-pink input,label.fastening-Buttons div.iradio_flat-pink input").prop('checked',true);
		}
		else if( (input=="Standup" || input=="Classic") && clss[1]=="collar" && $("label.style-Double-breasted input").is(":checked"))
		{
			$("div.lapels_width").hide();
			$("div.lapels_width input").prop('checked',false);
			$("div.lapels_width label div").removeClass('checked');
			$("div.fastening div.iradio_flat-pink").removeClass('checked');
			$("div.fastening div.iradio_flat-pink input").prop('checked',false);
			//$("label.fastening-Zipper").trigger('click');
			$("label.fastening-Zipper div.iradio_flat-pink").addClass('checked');
			$("label.fastening-Zipper div.iradio_flat-pink input").prop('checked',true);
			$("label.fastening-Zipper").show();
			$("label.fastening-Buttons,label.fastening-Horn-toggle").hide();
			$("label.fastening_style-Hidden").show();
		}

		if(input=="Lapels" && clss[1]=="collar" && $("label.style-Single-breasted input").is(":checked"))
		{
			$("div.fastening div.iradio_flat-pink").removeClass('checked');
			$("div.fastening div.iradio_flat-pink input").prop('checked',false);
			$("label.fastening_style-Hidden,div.lapels_width,label.fastening-Buttons").show();
			$("label.fastening-Zipper,label.fastening-Horn-toggle").hide();
			//$("label.fastening_style-Standard,label.fastening-Buttons").trigger('click');
			$("label.lapels_width-Wide div.iradio_flat-pink,label.fastening_style-Standard div.iradio_flat-pink,label.fastening-Buttons div.iradio_flat-pink").addClass('checked');
			$("label.lapels_width-Wide div.iradio_flat-pink input,label.fastening_style-Standard div.iradio_flat-pink input,label.fastening-Buttons div.iradio_flat-pink input").prop('checked',true);
		}
		else if( (input=="Standup" || input=="Classic") && clss[1]=="collar" && $("label.style-Single-breasted input").is(":checked"))
		{
			$("div.lapels_width").hide();
			$("div.lapels_width input").prop('checked',false);
			$("div.lapels_width label div.iradio_flat-pink").removeClass('checked');
			$("div.fastening div.iradio_flat-pink").removeClass('checked');
			$("div.fastening div.iradio_flat-pink input").prop('checked',false);
			//$("label.fastening-Zipper").trigger('click');
			$("label.fastening-Zipper").show();
			$("label.fastening-Buttons,label.fastening-Horn-toggle").show();
			$("label.fastening_style-Hidden").show();
			$("label.fastening-Zipper div.iradio_flat-pink").addClass('checked');
			$("label.fastening-Zipper div.iradio_flat-pink input").prop('checked',true);
		}
		else if( input=="Lapels" && clss[1]=="collar" && $("label.style-Double-breasted input").is(":checked"))
		{
			$("div.fastening div.iradio_flat-pink").removeClass('checked');
			$("div.fastening div.iradio_flat-pink input").prop('checked',false);
			$("div.lapels_width").hide();
			$("div.lapels_width input").prop('checked',false);
			$("div.lapels_width label div.iradio_flat-pink").removeClass('checked');
			//$("label.fastening-Zipper").trigger('click');
			$("label.fastening_style-Standard div.iradio_flat-pink,label.fastening-Buttons div.iradio_flat-pink").addClass('checked');
			$("label.fastening_style-Standard div.iradio_flat-pink input,label.fastening-Buttons div.iradio_flat-pink input").prop('checked',true);
			$("label.fastening-Buttons").show();
			$("label.fastening-Zipper,label.fastening-Horn-toggle").hide();
			$("label.fastening_style-Hidden").hide();
		}		
	});
}