<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $.get('api/student.php', function(response) {
        console.log(response);
        data = $.parseJSON(response);
        $.each(data, function(key, value) {
            $("#tabledata").append(
                "<tr>" +
                "<td>" + value.name + "</td>" +
                "<td>" + value.email + "</td>" +
                "<td><img src='" + value.picture + "' width='120'/></td>" +
                "</tr>" 
            );
        });
    });    
});
</script>
</head>

<body>
<h1>Workshop Three : Get JSON by JQuery</h1>
<table border="1" id="tabledata">
<thead>
    <th>Name</th>
    <th>Email</th>
    <th>Picutrue</th>
</thead>
<tbody>
</tbody>
</table>
</body>
</html>