<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $.get('admin/get_location.php', function(response) {
        console.log(response.data);
        data = response.data;
        //data = $.parseJSON(response.data);
        $.each(data, function(key, value) {
            $("#tabledata").append(
                "<tr>" +
                "<td>" + value.name + "</td>" +
                "<td>" + value.lat + "</td>" +
                "<td>" + value.lon + "</td>" +        
                "</tr>"
            );
        });
    });    
});
</script>
</head>

<body>
<h1>Show location list</h1>
<table border="1" id="tabledata">
<thead>
    <th>Name</th>
    <th>Lat</th>
    <th>Lon</th>
</thead>
<tbody>
</tbody>
</table>
</body>
</html>