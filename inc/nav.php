
<!-- Desk top Nav bar-->
<div id="navContainer">
<!-- Header Div-->

         <div id="label"> Zoe's Vacation  to Puerto Rico 
            </div>
            
            <!-- Nav div -->

         <nav class="nav">
            <ul>
               <li>
               <!-- Determine if page is active -->

                  <div <?php echo ($page == 'home') ? "class='on'" : ""; ?>> <a href="home.php"> Home </a> </div>
               </li>
               <li>
                  <div <?php echo ($page == 'index' || $page == 'hotspots' || $page == 'historicalsites') ? "class='on'" : ""; ?>> <a href="index.php"> Location </a> </div>
                 <!-- Sub sections -->
                  <ul>
                     <li><a href="hotspots.php"> Hot Spots </a> </li>
                     <li><a href="historicalsites.php"> Historical Sites </a> </li>
                  </ul>
               </li>
               <li>
                  <div <?php echo ($page == 'food' || $page == 'restaurants' || $page == 'culfood') ? "class='on'" : ""; ?>> <a href="food.php"> Food </a> </div>
                  <ul>
                     <li><a href="restaurants.php"> Best Restaurants </a> </li>
                     <li><a href="culfood.php"> Cultural Food History </a> </li>
                  </ul>
               </li>
               <li>
                  <div <?php echo ($page == 'history' || $page == 'tainos' || $page == 'ny') ? "class='on'" : ""; ?>> <a href="history.php"> History </a> </div>
                  <ul>
                     <li><a href="tainos.php"> Tainos </a> </li>
                     <li><a href="ny.php"> NewYoricans </a> </li>
                  </ul>
               </li>
               <li>
                  <div <?php echo ($page == 'map' || $page == 'sj' || $page == 'neighbors') ? "class='on'" : ""; ?>> <a href="map.php"> Map </a> </div>
                  <ul>
                     <li><a href="sj.php"> Old VS New San Juan </a> </li>
                     <li><a href="neighbors.php"> Neighboring Countries </a> </li>
                  </ul>
               </li>
               <li>
                  <div <?php echo ($page == 'experience' || $page == 'family' || $page == 'recommendations') ? "class='on'" : ""; ?>> <a href="experience.php"> Experience </a> </div>
                  <ul>
                     <li><a href="family.php"> Family History </a> </li>
                     <li><a href="recommendations.php"> Recommendations </a> </li>
                  </ul>
            </ul>
         </nav>
         	<!-- end of nav-->
      </div>
      	<!-- end of desktop header -->
      
          
<!-- Mobile Nav-->
<div id="mobileNav"> 
<div> Zoe's Vacation  to Puerto Rico 
</div>
<!-- cute icon -->
  	<a href="javascript:void(0);" class="icon" onclick="openNav()">
  	&#8801;</a> 
  	<br>   
  	<!-- Links-->
  <div id="mobileLinks">
  		<a href="home.php">Home</a>
        <a href="index.php">Location</a>		
        <a href="hotspots.php">Hot Spots</a>
      <a href="historicalsites.php">Historical Sites</a>
       <a href="food.php"> Food </a>
            <a href="restaurants.php">Best Restaurants</a>
            <a href="culfood.php">Cultural Food History</a>
      <a href="history.php"> History </a>
            <a href="tainos.php">Tainos</a>
            <a href="ny.php">NewYoricans</a>
     <a href="map.php"> Map </a>
            <a href="sj.php"> Old Vs New San Juan </a>
            <a href="neighbors.php">Neighboring Countries</a>
        <a href="experience.php"> Experience </a>
            <a href="family.php">Family History </a>
            <a href="recommendations.php">Recommendations</a>
    </div>
    </div>
    
    <script>
    function openNav() {
	var x=document.getElementById("mobileLinks");
	if(x.style.display==="block"){
		x.style.display="none";
	}
	else{
		x.style.display="block";
	}
}
</script>
      