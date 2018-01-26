$(document).ready(function(){
    $("input[name=booking_type]:radio").change(function(){
        var booking_type = $("input[name=booking_type]:checked").val();[]
        $("#" + booking_type).toggleClass("invisible");
    })
})