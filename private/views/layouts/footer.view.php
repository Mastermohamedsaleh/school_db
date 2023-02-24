</div>

<!-- <script src="<?=ROOT?>/assets/bootstrap.min.js"></script> -->



<div class="dark"></div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> 

<!-- <script src="jquery-3.6.3.min.js"></script> -->

<script>


function createCookie(name, value, timeInSeconds) {
       var date = new Date();
       date.setTime(date.getTime()+(timeInSeconds*1000));
       var expires = "; expires="+date.toGMTString();
    
       document.cookie = name+"="+value+expires+"; path=/";
 }

 function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function myFunction() {
      var element = document.body;
      const isDarkModeOn = element.classList.toggle("dark-mode");
      createCookie("isDarkModeOn", isDarkMode.toString(), 60 * 60 * 24); // 1 day expiry date
}

window.onload = function () {
  const isDarkModeOn = getCookie("isDarkModeOn");
  if(isDarkModeOn === "true") document.body.classList.add("dark-mode");
}

</script>

       
   
    
     
      



</body>
</html>