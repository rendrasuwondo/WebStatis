<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>From Sign Up</title>
  </head>
  <body>
    <h1>Buat Account Baru!</h1>
    <h4>Sign Up Form</h4>
    <form action="/welcome" method="POST">
        @csrf
      <label for="fname">First name:</label><br /><br />
      <input
        type="text"
        id="fname"
        name="fname"
        value=""
        autofocus
        required
      /><br /><br />
      <label for="lname">Last name:</label><br /><br />
      <input type="text" id="lname" name="lname" value="" required /><br />

      <p>Gender:</p>
      <input type="radio" id="male" name="gender" value="male" required />
      <label for="male">Male</label><br />
      <input type="radio" id="female" name="gender" value="female" required />
      <label for="female">Female</label><br />
      <input type="radio" id="other" name="gender" value="other" required />
      <label for="other">Other</label>
      <p>Nationality</p>
      <select id="Nationality" name="Nationality">
        <option value="Indonesian">Indonesian</option>
        <option value="Singaporean">Singaporean</option>
        <option value="Malaysian">Malaysian</option>
        <option value="Australian">Australian</option>
      </select>
      <p>Language Spoken:</p>
      <input type="checkbox" id="language1" name="language" value="Bahasa" />
      <label for="language1">Bahasa Indonesia</label><br />
      <input type="checkbox" id="language2" name="language" value="English" />
      <label for="language2">English</label><br />
      <input type="checkbox" id="language3" name="language" value="others" />
      <label for="language3">Others</label>
      <p>Bio</p>
      <textarea name="bio" rows="10" cols="30"></textarea>
      <br /><br />

      <input type="submit" value="Sign Up" />
    </form>
  </body>
</html>
