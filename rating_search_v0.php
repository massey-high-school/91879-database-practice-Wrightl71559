<?php 
    include "topbit.php";

// if find button pushed
if(isset ($_POST['find_rating']))
    
{

    // Retrieves rating and snitises it.
$amount=test_input(mysqli_real_escape_string($dbconnect, $_POST['amount']));
$stars=test_input(mysqli_real_escape_string($dbconnect, $_POST['stars']));

if ($amount=="exactly")
    
{
    $findall_sql="SELECT *
    FROM `L1_prac_book_reviews`
    WHERE `Rating` =$stars ORDER BY `title` ASC";  
}
    
    

$findall_query= mysqli_query($dbconnect, $findall_sql);
$findall_rs= mysqli_fetch_assoc($findall_query);
$count= mysqli_num_rows($findall_query);
    

?>
        
        <div class="box main">
            
            <h2>Rating search</h2>
            
            <?php
            // check if there are any results
            if($count<1)
            {
                
            ?>
            <div class="error">
                Sorry! There are no results that match your search. Please use the search box in the sidebar to try again.
            </div>
            
            <?php
                
            } // end count 'if'
            // if there are no results, output error
            else {
                
                do{
                
                ?>
                <!-- Results go here -->
                <div class="results">
                
                <p> Title: <span class="sub_heading"><?php echo $findall_rs['Title']; ?></span>
                </p>
                
                <p> rating: <span class="sub_heading"><?php echo $find_rs['Author']; ?></span>
                </p>
                
                <p> Genre: <span class="sub_heading"><?php echo $find_rs['Genre']; ?></span>
                </p>
                
                <p> Rating: <span class="sub_heading">
                    
                    <?php 
                    for ($x=0; $x < $find_rs['Rating']; $x++)
                    
                    {
                        echo "&#9733;";
                    }
                    
                    ?>
                    
                    </span></p>
                
                <p><span class="sub_heading">Review / Response</span></p>
                
                <p>
                    <?php echo $find_rs['Review']; ?>
                </p>
                
                </div> <!--/ end results -->

                <br />
            
                <?php
                    
                } // end of 'do'
                
                while($find_rs=mysqli_fetch_assoc($find_query));
            } // end else
            //if there are results, display them
    
            }//end isset

            ?>


</div>    <!-- / main -->
        
    
<?php 
    include "bottombit.php";
?>
