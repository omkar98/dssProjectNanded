<p>Upload Images</p>
<br><br>
  <form action="upload.php" method="post" enctype="multipart/form-data">
        Select Image File to Upload:
      <input type="file" name="file"> <br>
      <label for="color">Calegory:</label>
      <select name="cat" id="cat">
          <option value="">--- Choose a color ---</option>
          <option value="women">women</option>
          <option value="health">health</option>
          <option value="water">water</option>
          <option value="addiction">addiction</option>
          <option value="skill">skill</option>
          <option value="yoga">yoga</option>
          <option value="news">news</option>
          <option value="certi">certifications</option>
          <option value="news">news</option>
          
          <input type="submit" name="submit" value="Upload">
    </select> <br> <br>
  </form>
