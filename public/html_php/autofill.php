<script>window.onload = function(){
    auto()
};
</script>

<meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyC95Ub1JLB7GzPwnfg_90nOb3CfnSOOUIE"></script>
<script>
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
</script>

