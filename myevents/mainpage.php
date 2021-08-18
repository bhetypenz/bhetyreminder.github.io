<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title> Bhety Website Portfolio for Microlab Test </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home.css">
    
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
        <div class="sidebar">
          <div class="logo-details">
            <i class="bi bi-bootstrap-fill"></i>
              <div class="logo_name">Bhety_Codes</div>
              <i class='bx bx-menu' id="btn" ></i>
        </div>
              <ul class="nav-list">
                <li>
                    <i class='bx bx-search' ></i>
                   <input type="text" placeholder="Search...">
                   <span class="tooltip">Search</span>
                </li>
                <li>
                  <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span href="index.html" class="links_name">Home</span>
                  </a>
                   <span class="tooltip">Home</span>
                </li>
                <li>
                 <a href="login.php">
                   <i class='bi bi-calendar' ></i>
                   <span class="links_name">Event Manager</span>
                 </a>
                 <span class="tooltip">Manage your Events</span>
                </li>

                  <li>
                   <a href="#">
                     <i class="bi bi-building" ></i>
                     <span class="links_name">About Us</span>
                   </a>
                   <span class="tooltip">About Us</span>
                  </li>

                  <li class="profile">
                     <div class="profile-details">
                       <img src="profile.jpg" alt="profileImg">
                       <div class="name_job">
                         <div class="name">Bhety Penetzdorfer</div>
                         <div class="job">Web designer applicant</div>
                       </div>
                     </div>
                     <i class='bx bx-log-out' id="log_out" ></i>
                  </li>
                </ul>
          </div>



  <section class="home-section">
      <div class="text">Home</div>
      <div class="container">
        <div class="image">
           <img src="profile.jpg" alt="My Photo">
         </div>
      </div>
      <div class="container">
         <h1> Bhety Mustermann</h1>
         <h2> Application Developer Applicant Front End/Back End</h2>
         <h3>
           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
         </h3>
          <a class="text" href="#" class="btn">Please Contact Me</a>
      </div>
   </section>
  

  <script src="script.js"></script>
</body>
</html>
