<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">جدول گروه ها</h3>
                    <div class="text-left">
                        <a class="btn btn-app" href="/dashboard/categories/create">
                            <i class="fa fa-plus green"></i> جدید
                        </a>
                    </div>

                </div>
                <div id="cat"></div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover" id="names">
                        <tr>
                            <th>#</th>
                            <th>نام گروه</th>
                            <th>اسلاگ</th>
                            <th>وضعیت</th>
                            <th>کاربر</th>
                            <th>گروه اصلی</th>
                            <th>تاریخ ایجاد</th>
                            <th>تاریخ ویرایش</th>
                            <th>عملیات</th>
                        </tr>
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

    var data = [];
    $(document).ready(function () {
        $.ajax({
            url: "<?php echo base_url(); ?>api/categories",
            type: 'GET',
            success: function (result) {
                $.each(result.data, function (key, val) {
                    $("<tr>" +
                        "<td>" + key + "</td>" +
                        "<td>" + val.title + "</td>" +
                        "<td>" + val.slug + "</td>" +
                        "<td>" + val.status + "</td>" +
                        "<td>" + val.user_id + "</td>" +
                        "<td>" + val.parent_id + "</td>" +
                        "<td>" + val.created_at + "</td>" +
                        "<td>" + val.updated_at + "</td>" +
                        "<td>" + "<div>" +
                        "<a id='editRecord' "+"data-id=" + val.slug +" class='btn-delete  mt-auto ml-1 mr-1' >" +
                        "<i class='fa fa-edit blue' data-toggle='tooltip' title='ویرایش'>" + "</i>"+"</a>"+  " | " +

                        "<button id='deleteRecord' "+"data-id=" + val.slug +" class='btn-delete '  >" +
                        "<i class='fa fa-trash red' data-toggle='tooltip' title='حذف'>" + "</i>" +
                        "</button>" +
                        "</a>" +
                        "</div>" +
                        "</td>" +
                        "</tr>").appendTo("#names")
                });

                // edit button a tag
                $('#names').on('click','a',function (){
                    var id = $(this).data("id");
                   //dashboard/categories/update
                });

                // delete button :button element
                $('#names').on('click','button',function (){
                    var id = $(this).data("id");
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
                            $.ajax({
                                type:'DELETE',
                                url :"<?php echo base_url();?>api/categories/"+$(this).data("id")+'/delete',
                                headers: {'Authorization': "<?php echo $this->session->userdata('token')?>"},
                                statusCode: {
                                    404:function (xhr){
                                        alert(xhr)
                                    },
                                    500:function (xhr){
                                        alert(xhr)
                                    }
                                },
                                success: function(data) {
                                    Swal.fire(
                                        'حذف!',
                                        data,
                                        'success'
                                    )
                                    window.location.replace('/dashboard/categories/');
                                },
                                error:function(jqXHR,textStatus,errorThrown ){
                                    Swal.fire(
                                        'حذف!',
                                        errorThrown,
                                        'error'
                                    )
                                }
                            });

                        }
                    });
                });




                // tooltip button
                $(document).ready(function () {
                    $('[data-toggle="tooltip"]').tooltip();
                });

            }
        });
    });


</script>