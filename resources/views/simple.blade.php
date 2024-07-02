<html>
<title>Simple Violence</title>
<body>
<p>This is pretty simple - just one deprecation notice repeated 100k times.</p>
@php
for($i=0;$i<100000;$i++) {
    var_dump(str_contains("foobar", null));
    // Deprecated: Passing null to parameter #2 ($needle) of type string
    //             is deprecated
    echo "<br>";
}

@endphp
</body>
</html>
