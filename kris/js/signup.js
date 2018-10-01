
google.maps.event.addDomListener(window, 'load', function ()
{
	var places = new google.maps.places.Autocomplete(document.getElementById('ownPlaces'));

	google.maps.event.addListener(places, 'place_changed', function ()
	{
		console.log(places.getPlace());
		var getaddress 	  = places.getPlace();				//alert(getaddress.address_components[0].long_name);
		var whole_address = getaddress.address_components;  //alert(whole_address + 'whole_address');
		$('#ownCity').val('');
		$('#ownState').val('');
		$('#ownCountry').val('');
		$('#ownPinCode').val('');

		$.each(whole_address, function(key1, value1)
		{
			//alert(value1.long_name);
			//alert(value1.types[0]);


			if((value1.types[0]) == 'locality')
			{
				var prev_long_name_city = value1.long_name;
				//alert(prev_long_name_city + '__prev_long_name_city');
				$('#ownCity').val(prev_long_name_city);
			}


			if((value1.types[0]) == 'administrative_area_level_1')
			{
				var prev_long_name_state = value1.long_name;
				//alert(prev_long_name_state + '__prev_long_name_state');
				$('#ownState').val(prev_long_name_state);
			}

			if((value1.types[0]) == 'country')
			{
				var prev_long_name_country = value1.long_name;
				//alert(prev_long_name_country + '__prev_long_name_country');
				$('#ownCountry').val(prev_long_name_country);
			}

			if((value1.types[0]) == 'postal_code')
			{
				var prev_long_name_pincode = value1.long_name;
				//alert(prev_long_name_pincode + '__prev_long_name_pincode');
				$('#ownPinCode').val(prev_long_name_pincode);
			}

		});

	});
});
