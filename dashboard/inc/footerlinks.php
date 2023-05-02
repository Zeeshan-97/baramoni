<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Date Picker Calender -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script src="js/bs-custom-file-input.js"></script>
<script src="js/jquery.ui.widget.js"></script>
<script src="js/jquery.fileupload.js"></script>
<script src="js/jquery.iframe-transport.js"></script>
<script src="js/jquery.fancy-fileupload.js"></script>
<!-- Date Picker Calender -->
<!-- Wow Js CDN -->
<script src="js/wow.min.js"></script>
<script>
              new WOW().init();
              </script>
<!-- Jquery JS -->
<script src="js/app.js"></script>
<script src="js/index.js"></script>
<script>
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(pos) {
                //You have your locaton here
                console.log("Latitude: " + pos.coords.latitude + "Longitude: " + pos.coords.longitude);
            });
            var iframe = document.getElementById('gmap_canvas').src = `https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed`
        } else {
            console.log("Geolocation is not supported by this browser.");
        }
    }

    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude;
    }
    $('.search-for-patient button.btn-secondary').click(function() {
        $('.uprow .modal-wrapper').slideToggle();
        $('.uprow .modal-wrapper').click(function() {
            $(this).slideUp(400);
        })
    })
    // text Editor
    ClassicEditor.create(document.querySelector("#editor")).catch((error) => {
        console.error(error);
    });
    $('section.search-for-patient .heading-and-btn .refresh-btn').click(function() {
        $('section.search-for-patient .heading-and-btn .refresh-btn i').addClass('bill');
    });
    // file uploader js starts here
    $(document).ready(function() {
        bsCustomFileInput.init()
        $('#demo').FancyFileUpload({
            params: {
                action: 'fileuploader'
            },
            maxfilesize: 1000000
        });
    })
    // file uploader js ends here
    $(document).ready(function() {
        $(window).on('load', function() {
            $("#preloader").fadeOut(1000);
        });
        // Hiring Calender Start Here
        $("#datepicker_scnd").datepicker({
            firstDay: 1,
            // changeMonth: true,
            // changeYear: true,
            prevText: '<i class="fa fa-fw fa-angle-left"></i>',
            nextText: '<i class="fa fa-fw fa-angle-right"></i>',

            //bg
            onSelect: function() {
                var dateText = $.datepicker.formatDate("MM dd", $(this).datepicker("getDate"));
            }
        });
        // Hiring Calender End Here
    })
</script>