<?php defined('BASEPATH') OR exit('No direct script access allowed');

?>
<div class="card-body">
    <div >
        <div class="card-header">
            <h3 class="card-title pull-right">ایجاد دسته بندی جدید</h3>
        </div>
        <div id="error" class="alert alert-danger invisible" ></div>
        <div class="card-body offset-md-2 col-md-6">
            <div class="form-group">

                <label>نام دسته بندی</label>
                <input name="title" id="title" type="text" class="form-control" placeholder="نام دسته بندی را وارد کنید ...">
            </div>
            <div class="form-group">
                <label>سر دسته</label>
                <select name="parent_id" id="parent_id" class="form-control">
                    <option value="">بدون دسته والد</option>
                    <?php foreach ($categories as $category) {?>
                        <option value="<?php echo $category["id"]?>"><?php echo $category["title"];?></option>
                    <?php }?>
                </select>
            </div>
            <div class="form-group">
                <label>وضعیت</label>
                <select name="status" id="status" class="form-control">
                    <option value="1">منتشر شده</option>
                    <option value="0">منتشر نشده</option>
                </select>
            </div>
            <button type="submit" onclick="submitform()" class="btn btn-success pull-left ">ذخیره</button>
        </div>
    </div>
</div>
<script>


</script>
