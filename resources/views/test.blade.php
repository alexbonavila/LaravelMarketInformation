<!DOCTYPE html>
<html>
<head>
    <title>My Title</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-rc1/core.js"></script>
</head>
<body>

<input type="button" value="Student Payments" onclick="provaAljax()"/>

<script>
    var return_first = function provaAjax() {
        var tmp = null;
        $.ajax({
            headers: {
                "X-Authorization": $('#api_key').attr('content')
            },
            async: false,
            type: "POST",
            global: false,
            dataType: 'html',
            url: "http://localhost:8000/api/history/getHistoryWithSymbol",
            data: { 'symbol_query': 'NFLX' },
            'success': function (data) {
                tmp = data;
            }
        });
        return tmp;
    }();

    console.log(return_first);
</script>

<script src="{{'js/all.js'}}"></script>

</body>
</html>