

 <style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #02cc9f;
 
 position:absolute;
  right:0;
  left:0;
  top:0;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: black;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 100px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>

<br><br><br>



<div class="header">
  <a href="/" class="logo">Home</a>
  <div class="header-right">
    <!-- <a  href="#home">Account</a> -->
    <a href="/contact-us">Contact</a>
    <a href="/about">About</a>
  </div>
</div>

