<!DOCTYPE html>
<html>
    <head>
   <title>@yield('title')</title>
<link rel="stylesheet" href="{{asset('Home/style.css')}}">
      <link rel="stylesheet" href="bootstrap.css">
      <link rel="icon" href="{{asset('Home/upload/WhatsApp Image 2025-03-01 at 18.22.44_561f28ac.jpg')}}" type="image/x-icon">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     @yield('css')
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
    function searchDepartments() {
    const searchTerm = document.getElementById('search').value;
    if (searchTerm.length > 0) {
        fetch(`/search-departments?query=${searchTerm}`)
            .then(response => response.json())
            .then(data => {
                let results = '<ul>';

                if (data.length > 0) {
                    data.forEach(department => {
                        const url = `/course/department/${department.id}`;
                        results += `<li><a href="${url}">${department.name}</a></li>`;
                    });
                } else {
                    results = '<p>لا توجد نتائج</p>';
                }

                results += '</ul>';
                document.getElementById('results').innerHTML = results;
            })
            .catch(error => console.log(error));
    } else {
        document.getElementById('results').innerHTML = ''; 
    }
}
    </script>
    </head>
    <body>
      <head>
        <header>
        <div class="logo"><img src="{{asset('Home/upload/WhatsApp Image 2025-03-01 at 18.22.44_561f28ac.jpg')}}"></div>
        <div class="reservation">
          <input type="text" id="search" placeholder="بحث عن قسم" onkeyup="searchDepartments()">
          <div id="results"></div> 
      </div> 
   <nav>
       <ul>
         <li><a href="#">معلومات</a></li>
           <li><a href="#">تواصل</a></li>
           <li><a href="{{route('course.index')}}">الفيديوهات</a></li>
           <li><a href="{{route('home.index')}}">الرئيسية</a></li>
            @auth
            <li><a href="{{route('profile.edit')}}" class="fa-solid fa-user"></a></li>
            @endauth
           
       </ul>
   </nav>
   @guest
   <a href="{{route('login')}}" class="sign">تسجيل الدخول</a>
   @endguest
   
</header>
        @yield('content')
        
<footer>
    <div class="column">
      <div class="logo"><img src="{{asset('Home/upload/WhatsApp Image 2025-03-01 at 18.22.44_561f28ac.jpg')}}"></div>
      A site to learn sign language in Arabic
      <div class="icons">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-youtube"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-square-instagram"></i>
      </div>
    </div>
    <div class="column2">
      <div class="about">
        <h5>About</h5>
        <div>Features</div>
        <div>portnership</div>
        <div>contact</div>
      </div>
      <div class="about">
        <h5>Community</h5>
        <div>Events</div>
        <div>Blogs</div>
        <div>Workshop</div>
      </div>
      <div class="about">
        <h5>Facebook</h5>
        <div>Instagram</div>
        <div>portnership</div>
        <div>contact</div>
      </div>
    </div>
  </footer>
      </body>
              <script src="popper.min.js"></script>
              <script src="jquery-3.7.1.js"></script>
      <script src="bootstrap.js"></script>
      <script src="main.js"></script>
      @yield('js')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      </html>