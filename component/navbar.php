<nav>
    <ul class="sidebar">
        <li onclick=closeSidebar()><a  ><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>  
        <li><a href=""> about</a></li>  
        <li><a href=""> product</a></li>  
        <li><a href=""> contact</a></li>
        <li><a href="signup.php">Sign up</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
    <ul>
        <li><a href=""> WeFarm</a></li>  
        <li class="hideOnMobile"><a href=""> about</a></li>  
        <li class="hideOnMobile"><a href=""> product</a></li>  
        <li class="hideOnMobile"><a href=""> contact</a></li>
        <li class="hideOnMobile"><a href="signup.php">Sign up</a></li>
        <li class="hideOnMobile"><a href="login.php">Login</a></li>
        <li class="menu_button" onclick=showSidebar()><a ><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
    </ul>
</nav>
    <script>
        function showSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'flex'
        }
        function closeSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'none'
        }
    </script>