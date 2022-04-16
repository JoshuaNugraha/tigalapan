<section class="footer pt-5 pb-4">
  <div class="container-fluid">
    <div class="container">
      <div class="footer-sec">
        <div class="row">
          <div class="c1">
          <p>ABOUT US</p>
          </div>
          <div class="c2">
            <p>OUTLET ADDRESS</p>
          </div>
        </div>
        <div class="row">
            <div class="isi1">
              <div class="more">
                Selengkapnya
              </div>
              <div class="isi1-text">
                <p id="about-us"> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
          </div>
            <div class="isi2">
              <div class="more">
                Selengkapnya
              </div>
              <div class="isi2-text">
                <p id="outlet">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
          </div>
        </div>
      </div>
    </div>
  </diva>
</section>



  </body>
</html>


<script>  
 
var text = document.getElementById("about-us").innerText;
var textLength = text.trim().length;
if(textLength>200){
  var trimmedString = text.substring(0, 201);
  document.getElementById('about-us').innerHTML = trimmedString;
}
</script>