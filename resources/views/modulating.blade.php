<html>
<title>Modulating Violence</title>
<body>
<p>This is designed to change the specific error message we're getting, so that any caching or 'uniqueifiers' will break.</p>
@php
for($i=0;$i<100000;$i++) {
    var_dump(str_contains("foobar".$i, null));
    // Deprecated: Passing null to parameter #2 ($needle) of type string
    //             is deprecated
    echo "<br>";
}

@endphp
</body>
</html>
