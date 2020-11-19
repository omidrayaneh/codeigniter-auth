<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">جدول کاربرها</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="جستجو">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tr>
                            <th>#</th>
                            <th>نام کاربری</th>
                            <th>ایمیل</th>
                            <th>نقش</th>
                            <th>وضعیت</th>
                            <th>عملیات</th>
                        </tr>
                        <?php  foreach ($users as $user){ ?>
                        <tr>
                            <td><?php echo$user['id'];  ?></td>
                            <td><?php echo$user['username'];  ?></td>
                            <td><?php echo$user['email'];  ?></td>
                            <td><?php if ($user['is_admin']=='admin') {echo '<span class="badge badge-success">ادمین سایت</span>';}
                                else {echo '<span class="badge badge-danger">کاربر عادی</span>';}?></td>
                            <td><?php if ($user['status']==1) {echo '<span class="badge badge-success">تایید شده</span>';}
                            else {echo '<span class="badge badge-danger">تایید نشده</span>';}?>
                            <td>
                                <div >
                                    <a class="btn-delete blue mt-auto ml-1 mr-1"
                                       href="">
                                        <i class="fa fa-edit" data-toggle="tooltip" title="ویرایش"></i>
                                    </a>
                                    |
                                    <button data-id="<?php echo$user['id'];  ?>" class="btn-delete deleteRecord">
                                        <i class="fa fa-trash red" data-toggle="tooltip" title="حذف"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <?php  } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery/jquery.min.js"></script>

<script src="<?php echo base_url(); ?>assets/admin/dist/js/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script href="https://cdn.jsdelivr.net/npm/promise-polyfill@7/dist/polyfill.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/dist/js/sweetalert210.js"></script>
<script>

    $(".deleteRecord").click(function () {
        Swal.fire({
            title: 'هشدار!',
            text: "آیا از حذف سطر جاری مطمئن هستید؟",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'بله, حذف کن!',
            cancelButtonText: 'خیر'
        }).then((result) => {
            if (result.value) {
                var id = $(this).data("id");
                $.ajax(
                    {
                        url: <?php echo base_url(); ?>+"/dashboard/users/" + $(this).data("id"),
                        type: 'GET',
                        success: function (result) {
                            window.location.replace('/dashboard/users/');
                        }
                    });
                Swal.fire(
                    'حذف!',
                    'با موفقیت حذف شد.',
                    'success'
                )
            }
        });

    });

</script>