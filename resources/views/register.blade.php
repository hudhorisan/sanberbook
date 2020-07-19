<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form lat 1</title>
</head>

<body>
    <form action="/congrat" method="POST">
        @csrf
        <h1>Buat Acount Baru!</h1>
        <h3>Sign Up Form</h3>
        <p>First Name:</p>
        <input type="text" name="fName" id="fName" required>
        <p>Last Name:</p>
        <input type="text" name="lName" id="lName" required>
        <p>Gender:</p>
        <input type="radio" name="gender" id="male" value="male" checked>
        <label for="male">Male</label><br>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label><br>
        <input type="radio" name="gender" id="other" value="other">
        <label for="other">Other</label><br>
        <p>Nationality:</p>
        <select name="nat" id="nat">
            <option value="indonesia" selected>Indonesia</option>
            <option value="jepang">Jepang</option>
            <option value="ingris">Inggris</option>
        </select>
        <p>Language Spoken</p>
        <input type="checkbox" name="lSpoke" id="bIdn" value="Bahasa Indonesia" checked>
        <label for="bIdn">Bahasa Indonesia</label><br>
        <input type="checkbox" name="lSpoke" id="bEng" value="English">
        <label for="bEng">English</label><br>
        <input type="checkbox" name="lSpoke" id="bOth">
        <label for="bOth">Other</label><br>
        <p>Bio:</p>
        <textarea name="bio" id="bio" cols="30" rows="10" required></textarea><br>
        <input type="submit" value="kirim">
    </form>

</body>

</html>