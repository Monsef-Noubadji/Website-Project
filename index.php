<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/cd80b326fb.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="styles/styl.css">
    <title>Tech community - A place for Geeks</title>
</head>
<body>
    <div>
        <?php
        include("nav.php");
        ?>
    </div>


 <!-- --- GET STARTED ---  -->
 

 
 <section class="get-started"  id="started">
    <div class="start">
        <h2> < TCT/ > </h2>
        <p>Where technology</p>
        <p>meets the people in one</p>
        <p>big place</p>
        <h3>Get Started</h3>
    </div>
 
 </section>

 <!-- --- ABOUT US ---  -->

 <section class="about-us">
     <div class="about-img">
            <img src="images/about-us.png" alt="" srcset="">
     </div>
     <div class="about-content">
            <h2>ABOUT US < / ></h2>
            <p>  the < TCT/ > is an online community for technology related news, facts & also a good 
            place to enjoy your morning coffee or even find solutins for your buggy code</p>
            <a href="">READ MORE</a>
     </div>

 </section>

 <!-- --- LATEST NEWS --- -->

 <section class="news">
    
        <h2>Latest News</h2>
    
    <div class="news-content">
            <div class="news-element">
                <img src="images/news1.jpg" alt="" srcset="">
                <h3>june 21st, 2021</h3>
                <h2>What is BTC ? why we should care ?</h2>
                <input type="button" value="Read more">
                <p>by <a href="">vlad</a></p>
            </div>
            <div class="news-element">
                <img src="images/news2.jpg" alt="" srcset="">
                <h3>june 25th, 2021</h3>
                <h2>Hackers destroy a full warehouse using malwares</h2>
                <input type="button" value="Read more">
                <p>by <a href="">vlad</a></p>
            </div>
            <div class="news-element">
                <img src="images/news3.jpg" alt="" srcset="">
                <h3>june 28th, 2021</h3>
                <h2>Gow to become a UX designer in 2021 ? - Full roadmap -</h2>
                <input type="button" value="Read more">
                <p>by <a href="">vlad</a></p>
            </div>
    </div>
 
 </section>
 


 <!-- testimonials --- -->

 <section class="testimonials">
        <h2>Our Members</h2>




        <div class="testim-main">
         <div class="points">
             <h3 id="n1">.</h3>
             <h3 id="n2">.</h3>
             <h3 id="n3">.</h3>
             <h3 id="n4">.</h3>
         </div>   
        <div class="flech">
        <i class="fas fa-chevron-left" onclick="lleft()" id="left"></i>
        <i class="fas fa-chevron-right" onclick="rright()" id="right"></i>

        </div>
        <div class="testim-content" id="testim1" onclick="show1()">
            <img src="images/person1.jpg" alt="">
            <h4>Yousfi Yanis</h4>
            <i class="fas fa-quote-right"></i>
            <p id="p1">print("Hello , i'm a back end developer , passionate about coding & solving problems")
            </p>
            <div class="icons">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-instagram"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            
            </div>
        </div>
        <div class="testim-content" id="testim2" onclick="show2()">
            <img src="images/person2.jpg" alt="">
            <h4>Mohammed Dellihr</h4>
            <i class="fas fa-quote-right"></i>
            <p id="p2"> console.log("How are you doing eveybody ? I'm good with all the javascript around.")
            <div class="icons">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-instagram"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            
            </div>
        </div>
        <div class="testim-content" id="testim3" onclick="show3()">
            <img src="images/person3.jpg" alt="">
            <h4>Benblidia Yasmine</h4>
            <i class="fas fa-quote-right"></i>
            <p id='p3'> Have A good time beautiful user , i'll make sure you're smiling here with my designs ^ _ ^ .
            </p>
            <div class="icons">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-instagram"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            
            </div>
        </div>
        <div class="testim-content" id="testim4" onclick="show4()">
            <img src="images/person4.jpg" alt="">
            <h4>Monsef Noubaji</h4>
            <i class="fas fa-quote-right"></i>
            <p id="p4"> I'm the leader here but a teammate in reality, Our team will make sure deliver the best experience for you.
            </p>
            <div class="icons">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-instagram"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            
            </div>
        </div>

        </div>


        
        
    </section>
   







  <script type="text/javascript">
     var testim1 = document.getElementById("testim1");
            var testim2 = document.getElementById("testim2");
            var testim3 = document.getElementById("testim3");
            var testim4 = document.getElementById("testim4");
            var p1 = document.getElementById("p1");
            var p2 = document.getElementById("p2");
            var p3 = document.getElementById("p3");
            var p4 = document.getElementById("p4"); 
            var left = document.getElementById("left");
            var right = document.getElementById("right"); 
            var n1 = document.getElementById("n1");
            var n2 = document.getElementById("n2");
            var n3 = document.getElementById("n3");
            var n4 = document.getElementById("n4"); 
            



            function show( testim, p){
                
                testim.style.opacity = "100%";
                testim.style.width = "30%";
                testim.style.height = "40vh";
                testim.style.cursor = "default";
                p.style.display = "block";
                               
            }
            function hide (testim, p){
                testim.style.opacity = "40%";
                testim.style.width = "17%";
                testim.style.height = "30vh";
                testim.style.cursor = "pointer";
                p.style.display = "none";

                
            }



            function show1(){
                show(testim1, p1);
                hide(testim2,p2);
                hide(testim3,p3);
                hide(testim4,p4);
            }
            function show2(){
                show(testim2, p2);
                hide(testim1,p1);
                hide(testim3,p3);
                hide(testim4,p4);
            }
            function show3(){
                show(testim3, p3);
                hide(testim2,p2);
                hide(testim1,p1);
                hide(testim4,p4);
            }
            function show4(){
                show(testim4, p4);
                hide(testim2,p2);
                hide(testim1,p1);
                hide(testim3,p3);
            }

             function showcont(p , testim)
             {
                testim.style.display = "block";
                testim.style.width = "80%";
                testim.style.height = "40vh";
                testim.style.opacity = "100%";
                p.style.display = "block"
             }
            
            showcont(testim1 , p1);
             function showpoints(){
                 n1.style.color = "grey";
                 n2.style.color = "grey";
                 n3.style.color = "grey";
                 n4.style.color = "grey";
             }
            
            
            
            function rright() {
                

                if(testim1.style.display == "block")
                {
                    testim1.style.display = "none";
                    showcont(p2, testim2);
                    left.style.color = "black";
                    showpoints();
                    n2.style.color = "black";
                }
                else {
                    if(testim2.style.display == "block")
                   { 
                        testim2.style.display = "none";
                        showcont(p3, testim3);
                        showpoints();
                        n3.style.color = "black";
                        
                    }
                    else {
                        if(testim3.style.display == "block")
                        {
                            testim3.style.display = "none";
                            showcont(p4, testim4);}
                            right.style.color ="grey"; 
                            showpoints();
                            n4.style.color = "black";       
                    }
                }
                
                }     



                function lleft() {
                

                if(testim4.style.display == "block")
                {
                    testim4.style.display = "none";
                    showcont(p3, testim3);
                    right.style.color = "black";
                    showpoints();
                    n3.style.color = "black";
                }
                else {
                    if(testim3.style.display == "block")
                   { 
                        testim3.style.display = "none";
                        showcont(p2, testim2);
                        showpoints();
                        n2.style.color = "black";
                    }
                    else {
                        if(testim2.style.display == "block")
                        {
                            testim2.style.display = "none";
                            showcont(p1, testim1);}
                            left.style.color ="grey";  
                            showpoints();
                            n1.style.color = "black";      
                    }
                }
                
                }     
                 
    
    
     </script>
</body>
</html>