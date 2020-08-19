<?php 
    include "topbit.php";

    $showalll_sql="SELECT *
FROM `L1_prac_book_reviews`
ORDER BY `L1_prac_book_reviews`.`Title` DESC";
    $showalllquesry=mysqli_query($dbconnect,$showall_sql);
    $showalll_rs=mysqli_fetch_assoc($shoqall_query);
    $count=mysqli_num_rows($showallquery);
?>
        
        <div class="box main">
            
            <h2>All Items</h2>
            
            <?php
            // check id=f tere are any results
            if($count<1)
            {
                
            ?>
            <div class="error">
                Sorry! There are no results that match your search. Please use thhe search box in the sidebar to try again.
            </div>
            
            <?php
                
            } // end count 'if'
            // if there are not results, output error
            else {
                
                do{
                
                ?>
                         <!-- Results go here -->
                <div class="results">
                
                <p> Title: <span class="sub_heading"><?php echo $showall_rs['Title']; ?></span>
                </p>
                
                <p> Author: <span class="sub_heading">author holder</span>
                </p>
                
                <p> Genre: <span class="sub_heading">genre holder</span>
                </p>
                
                <p> Rating: <span class="sub_heading">rating holder</span>
                </p>
                
                <p><span class="sub_heading">Review / Response</span></p>
                
                <p>
                    Review Placeholder
                </p>
                
            </div> <!--/ end results -->

            
            <?php
                    
                } // end of 'do'
                
                while($showall_rs=mysqli_fetch_assoc($shoqall_query));
            } // end else
            //if there are results, display them
            ?>


</div>    <!-- / main -->
        
    
<?php 
    include "bottombit.php";
?>
