<?php
/**
 * Template Name: Home
 * Author: Webnewday
 */
get_header();
?>
<div class="container">
    <div style="width: 500px">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên của bạn</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Điểm đón</label>
                <input type="text" class="form-control" name="pick_point">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Điểm đến</label>
                <input type="text" class="form-control" name="pick_point">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Đặt xe</button>
        </form>
    </div>
</div>
<?php get_footer();?>