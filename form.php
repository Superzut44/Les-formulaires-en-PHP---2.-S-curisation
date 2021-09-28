<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Findtheprecious</title>
    
    <link rel="stylesheet" href="form.css" />
  </head>
  <body>
    <form class="form"  action="thanks.php"  method="post">
        <div class="form-div">
            <label  for="name">Name :</label>
            <input  type="text"  id="name"  name="user_name" required>
        </div class="form-div">
        <div class="form-div">
            <label  for="firstname">Firstame :</label>
            <input  type="text"  id="firstname"  name="user_firstname" required>
        </div class="form-div">
        <div class="form-div">
            <label  for="e-mail"><e-mail></e-mail>e-mail :</label>
            <input  type="email"  id="courriel"  name="user_email" required=>
        </div class="form-div">
        <div class="form-div">
            <label for="phone">Phone number :</label>
            <input type="tel" id="phone" name="user_phone" required>
        </div class="form-div">
         <div class="form-div">
             <label for="topic">Your Topic:</label>
             <select id="topic" name="user_topic">
                <option value="information">information</option>
                <option value="question">question</option>
                <option value="technical_problem">technical problem</option>
                <option value="making_appointments">making appointments</option>
             </select>
         </div class="form-div">
         <div class="form-div">
              <label  for="message">Message :</label>
              <textarea  id="message"  name="user_message" required></textarea>
        </div class="form-div">
        <div class="form-div"  class="button">
            <button  type="submit">Submit</button>
        </div class="form-div">
    </form>
  </body>
</html>