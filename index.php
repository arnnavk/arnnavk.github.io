<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shantiniketan Registration Form</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
      .form-control, .form-select {
         width: 100%;
         padding: 10px 15px;
         margin: 5px 0;
         box-sizing: border-box;
         background-color: rgb(221, 218, 218);
      }
   </style>
  </head>
<body>
    
    <div class="container mx-auto flex flex-wrap p-4 flex-col md:flex-row items-center">
      <h4 style="font-family:arial; text-align: center;">Sign up</h4><br>  
       <form action="">
        <div class="mb-3">
          <input type="text" class="form-control" id="name" placeholder="Name" required>
          <br>
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" id="email" placeholder="Email address" required>
          <br>
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" id="number" placeholder="Number" required>
        <br>
        </div>
        <div class="col-md-12">
          <select id="Course" class="form-select">
            <option selected>Select Course</option>
            <optgroup label="Intermediate Courses">
            <option>Mathematics, Physics, Chemistry (M.P.C)</option>
            <option>Mathematics, Economics, Commerce (M.E.C)</option>
            <option>Botany, Zoology, Physics, Chemistry (B.P.C)</option>
            <option>Commerce, Economics, Civics (C.E.C)</option>
            </optgroup>
            <optgroup label="Degree Courses">
              <option>B.Com. General</option>
              <option>B.Com. Honours</option>
              <option>B.Com. Computer Application</option>
              <option>B.Sc. Bio-Technology, Microbiology Chemistry</option>
              <option>B.Sc. Biochemistry, Microbiology, Computer Science</option>
              <option>B.Sc. Mathematics, Statistics, Computer Science</option>
              <option>B.Sc. Mathematics, Physics, Computer Science</option>
              <option>B.CA Bachelor of Computer Applications</option>
              <option>B.B.A Bachelor of Business Administration</option>
              </optgroup>
          </select>
        </div>
        <br>
            
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary btn-lg" id="submit"><b>Sign up</b></button>
            </div>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>