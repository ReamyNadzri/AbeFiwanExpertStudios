<?php include ('header.php'); ?><br>


<div class="w3-container w3-row w3-center w3-round-large" style="margin:0 auto ;width:60%;height:500px"><br>
<h1 >Find your favorites car here!</h1>
    <div class="w3-col w3-padding w3-container w3-card w3-round-large" style=" margin-bottom:10px">
        
        <form class="" method="GET" action='purchase_listing.php'>
         
            <input class="w3-col w3-input w3-round" style="width:90%" type="text" name="search"
            placeholder="What car are you looking for?">
            
            <div class="w3-col" style="width:10%">
                <button class="w3-button w3-round"><i class="material-icons" name='submit'>search</i></a>
            </div>

        </form>
    </div>
    <br><br>
    
</div>



<br>
<?PHP include ('footer.php'); ?>