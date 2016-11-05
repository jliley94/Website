$(document).ready(function() {
    $( ".readMore" ).click(function() {
        $( ".earlierWork" ).toggle( "slow" );
        if ($(".readMore").text() == "Show Less") {
            $('.readMore').text('Show More');
        }
        else
        {
            $('.readMore').text('Show Less');
        }   
  });

});