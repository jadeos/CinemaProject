<!Doctype html>
<head>
    <title>Edit Movie List</title>
</head>
<body>
    <h1> Add Movie to database</h1>
    <?php echo form_open('film/create'); ?>
    <label>Movie Title  </label><nbsp> <input type ="text" name ="title"/><br/>
    <label>Description  </label><nbsp> <input type ="text" name ="description"/><br/>
            <label>Length      </label><nbsp>  <input type ="text" name ="length/"><br/>
    <label> Age Group   </label><nbsp><input type ="text" name ="agegroup"/><br/>
    <label>Release Date </label><nbsp> <input type ="text" name ="releasedate"/><br/>
    <label>Features     </label><nbsp><input type ="text" name ="features"/><br/>
    <label>Date         </label><nbsp> <input type ="text" name ="date"/><br/>
    <label>Time         </label><nbsp> <input type ="text" name ="time"/><br/>
    <button type ="submit" name ="submit"value="submit">Add a film</button><br/>


    <?php echo form_close();?>


    <h1> Delete a movie from the database</h1>


    <h1> Update the movie database</h1>


<b> Return to <a href="home.php">Hompage</a> </b>

</body>
</html>
