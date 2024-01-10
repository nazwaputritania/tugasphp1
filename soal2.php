<!DOCTYPE html>
<html>
    <head>
        <title>Formulir</title>
    </head>
        <body>
<h3> Buat Account Baru</h3>
<h5>Sign up form</h5>

<form method="POST" action="soal3.php">
<label for="name"> FirstName</label><br>
<input type="text" name="FirstName"><br>
<label for="name"> LastName<label><br>
    <input type="text" name="LastName"><br>
    <p>Gender</p>
    <input type="radio" id="gender" name="gender" value="Male">
    <label for="Male">Male</label><br>
    <input type="radio" id="gender" name="gender" value="Female">
    <label for="Female">Female</label><br>
    
    <label for="country">Pilih Negara:</label><br>
    <select id="country" name="negara">>
        <option value="Indonesia">Indonesia</option>
        <option value="Amerika">Amerika</option>
        <option value="Inggris">Inggris</option>
    </select>
            <p>Language Spoken</p>
        <input type="checkbox" name="bahasa[]" value="Bahasa Indonesia">
        <label for="Bahasa Indonesia">Bahasa Indonesia</label><br>
        <input type="checkbox" name="bahasa[]" value="Bahasa Inggris">
        <label for="English">Bahasa Inggris</label><br>
        <input type="checkbox" name="bahasa[]" value="Bahasa Jepang">
        <label for="jepang">Bahasa Jepang</label><br> 
        
        <label for="message">Bio:</label></br>
    <textarea id="message" name="message" rows="10" cols="30"></textarea>
        
    <div>
            <button>Sign up</button>
</div>
        </form>
        </body>
</html>