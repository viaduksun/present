 <div role="tabpanel" class="tab-pane" id="profile">
    <div class="row">
					  <!-- ШАБЛОН КАРТОЧКИ ВЫВОДИТЬ ТОЖЕ ЦИКЛОМ. ЗДЕСЬ БЫЛО 5 ШТУК -->
              <?php 
            // =========================
            // Настройка пагинации
            // =========================
            if(!isset($_GET['page'])) $page = 1; else $page = $_GET['page'];                                                        
            // echo $length;
            // ==================================================
            if (isset($_COOKIE["cookie_current_category_id"])) {
            // длина пагинации для определенной категории
            $count_query = $conn->query("SELECT COUNT(*) FROM products WHERE category =" . $_COOKIE["cookie_current_category_id"]);
            $count_array = $count_query->fetch_array(MYSQLI_NUM);
            $count = $count_array[0];

            $limit = 6;
            $start = ($page*$limit)-$limit;
            $length = ceil($count/$limit);
            $p = 1;

            $sql = "SELECT * FROM products WHERE category =" . $_COOKIE["cookie_current_category_id"] ."  LIMIT $start, $limit";
            $result = $conn->query($sql);                               
            
                while ($row = mysqli_fetch_assoc($result)) {
                include $_SERVER["DOCUMENT_ROOT"] . "/parts/shop/string_card.php";                
                }
                }  else { 
            // длина пагинации для всех товаров суммарно
            $count_query = $conn->query("SELECT COUNT(*) FROM products");
            $count_array = $count_query->fetch_array(MYSQLI_NUM);
            $count = $count_array[0];

            $limit = 6;
            $start = ($page*$limit)-$limit;
            $length = ceil($count/$limit);
            $p = 1;  

            $sql = "SELECT * FROM products LIMIT $start, $limit";
            $result = $conn->query($sql);                               
            
                while ($row = mysqli_fetch_assoc($result)) {
                include $_SERVER["DOCUMENT_ROOT"] . "/parts/shop/string_card.php"; 
                }
            }                                                       
               
            ?>
        



    </div>	
</div>



                