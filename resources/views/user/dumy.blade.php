<!-- view.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Button Example</title>
</head>
<body>
    <form action="{{ route('user.pendaftaran.redirect') }}" method="get">
        <button type="submit" name="ukm" value="dance">Klik Saya</button>
        <button type="submit" name="ukm" value="catur">Klik Sayas</button>
        <button type="submit" name="ukm" value="ilustrasi">Klik Sayass</button>
    </form>
</body>
</html>
