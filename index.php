<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action = "includes/formhandler.php" method = "post">

        <label for="firstname">Firstname?</label>
        <input id="firstname" type="text" name="firstname" placeholder = "FirstName ...">

        <label for="lastname">Lastname?</label>
        <input id="lastname" type="text" name="lastname" placeholder = "LastName ...">

        <label for="favpet">FavouritePet ?</label>
        <select id="favpet" name="favpet" > 
            <option value="none">None</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="bird">Bird</option>
        </select>

        <button type = "submit">Submit</button>

    </form>
    </main>
</body>
</html>