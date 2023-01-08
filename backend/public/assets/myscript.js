$("#officecode").change(function () {

    var code = $(this).val();

    $.get(
        "http://localhost:8080/reports/allstuff",
        {offcode: code},
        function (data) {
            // alert(data);
            $("#show").html(data);

    });
});

$("#reportbtn").click(function () {

    var startdate = $("#startdate").val();
    var enddate = $("#enddate").val();

    // alert(startdate + enddate);

    $.get(
        "http://localhost:8080/reports/orderquery",
        {
            start:  startdate,
            end:    enddate,
        },
        function (data) {
            // alert(data);
            $("#show").html(data);

    });
});

