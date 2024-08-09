<!-- view.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Button Example</title>
</head>
<body>
    <form action="{{ route('user.pendaftaran.redirect') }}" method="get">
        <button type="submit" name="ukm" value="vg">Tes VG</button>
        <button type="submit" name="ukm" value="catur">TES CATUR</button>
        <button type="submit" name="ukm" value="ilustrasi">ilustrasi</button>
    </form>
</body>
</html>
