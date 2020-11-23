<div class="shop-all-tab">
    <div class="two-part">
        <ul class="nav tabs" role="tablist">
            <li class="vali">Вид:</li>
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-align-justify"></i></a></li>
        </ul>
    </div>
    <div class="re-shop">
       <div class="sort-by">
            <div class="shop6">
                <label>Отсортировать по :</label>
                <select>
                    <option value="">Default sorting</option>
                    <option value="">Sort by popularity</option>
                    <option value="">Sort by average rating</option>
                    <option value="">Sort by newness</option>
                    <option value="">Sort by price: low to high</option>
                </select>
            </div>
        </div>
        <div class="shop5">
            <label>Отобразить :</label>
            <select onchange="pagination_change(this)">
                <?php 
                if (isset($_COOKIE["current_limit"]) && ($_COOKIE["current_limit"]) == 6 ) { ?>
                  <option value="<?php echo $_POST['current_limit']?>"><?php echo $_COOKIE["current_limit"] ?> </option>
                  <option value="12">12</option>
                  <option value="24">24</option>
                <?php } elseif (isset($_COOKIE["current_limit"]) && ($_COOKIE["current_limit"]) == 12 ) { ?>                  
                  <option value="<?php echo $_POST['current_limit']?>"><?php echo $_COOKIE["current_limit"] ?> </option>
                  <option value="6">6</option>
                  <option value="24">24</option>
                <?php } elseif (isset($_COOKIE["current_limit"]) && ($_COOKIE["current_limit"])  == 24 ) { ?>
                  <option value="<?php echo $_POST['current_limit']?>"><?php echo $_COOKIE["current_limit"] ?> </option>
                  <option value="6">6</option>                  
                  <option value="24">12</option> 
                <?php } else { ?>
                <option value="6">6</option>
                <option value="12">12</option>
                <option value="24">24</option>
                <?php
                }
                ?>           
                
            </select>      
        </div>
    </div>
</div>