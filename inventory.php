<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>The HTML5 Herald</title>
      <meta name="description" content="The HTML5 Herald">
      <meta name="author" content="SitePoint">
      <link rel="stylesheet" type="text/css" href="css.css">
   </head>
   <body>

   <ul>
   <li style="float:left"><a href="#">Bronco</a>     
  <li><a href="homepage.php">Home</a></li>
  <li><a class="active" href="inventory.php">Inventory</a></li>
  <li><a href="phonebook.php">Phonebook</a></li>
  <li><a href="projects.php">Projects</a></li>
  <li><a href="files.php">Files</a></li>
  <li><a href="WorkCompleted.php">Work Completed</a></li>
</ul>

      <div class="form-style-6">
         <h1>Add/Modify Inventory</h1>
         <form>
            <input type="text" name="field1" placeholder="Item Name" />
            <input type="text" name="field1" placeholder="Item Description" />
            <input type="text" name="field1" placeholder="Quantity" />
            <br><br>
            <label>Choose who/where you bought it from</label>
            <select>
               <option disabled selected value> -- select an option if applicable -- </option>
               <option value="Autozone">Autozone</option>
               <option value="rich">Rich</option>
               <option value="advancedauto">Advanced Auto</option>
            </select>
            <input type="text" name="field1" placeholder="Purchase Date" />
            <input type="text" name="field1" placeholder="Purchase Price" />
            <br><br>
            <label>Choose who/where you sold it to</label>
            <select>
               <option disabled selected value> -- select an option if applicable -- </option>
               <option value="Autozone">Frank</option>
               <option value="rich">Rich</option>
               <option value="advancedauto">Mike</option>
            </select>
            <input type="text" name="field1" placeholder="Sell Price" />
            <input type="text" name="field1" placeholder="Sell Date" />
            <br><br>
            <textarea name="field3" placeholder="Comments"></textarea>
            <input type="submit" value="Submit" />
         </form>
      </div>
      <script src="js/scripts.js"></script>
   </body>
</html>