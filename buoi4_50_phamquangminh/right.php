<div class="right-sidebar" style="background-color: #a9d08e; padding: 15px; height: 100%;">
    <h3 style="border-bottom: 1px solid #333; padding-bottom: 5px;">Tin tức mới nhất</h3>
    <ul style="padding-left: 20px;">
        <?php
        // Gọi hàm lấy 5 tin tức mới nhất
        $tinTucMoi = getLatestNews($conn, 5);
        
        if ($tinTucMoi && mysqli_num_rows($tinTucMoi) > 0) {
            while ($tin = mysqli_fetch_assoc($tinTucMoi)) {
                // Đã sửa lại idTinTuc thành id để đồng bộ với file detail_news.php
                echo "<li style='margin-bottom: 10px;'>";
                echo "<a href='index.php?page=detail_news&id=" . $tin['id'] . "' style='text-decoration: none; color: #000;'>" . $tin['tieuDe'] . "</a>";
                echo "</li>";
            }
        } else {
            echo "<li>Chưa có tin tức nào.</li>";
        }
        
        ?>
    </ul>
</div>