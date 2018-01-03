function deleteAjax(id){
    swal({
        title: "You agree to delete?",
        text: "Once deleted, you will not be able to restore this news!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((isConfirm) => {
        if (isConfirm) {
            $.ajax({
                type:'post',
                url:'models/delete_news.php',
                data:{delete_id:id},
                success:function(data){
                    $('#delete'+id).hide('slow');
                }
            })
            swal("News successfully deleted", {
                icon: "success",
            });
        }
    });
}
