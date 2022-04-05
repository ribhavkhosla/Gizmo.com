var autofill;
    function auto() {
        autofill = new google.maps.places.Autocomplete(
            (document.getElementById('autofill')), {
                types: ['geocode'],
                componentRestrictions: {
                    country: "ca"
                }
            });
        google.maps.event.addListener(autofill, 'place_changed', function() {

        });
    }