function updateAjax(id){
    swal({
        title: "You agree to confirm?",
        text: "You have seen the information and decided to confirm the order!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((isConfirm) => {
        if (isConfirm) {
            $.ajax({
                type:'post',
                url:'models/update_bill.php',
                data:{update_id:id},
                success:function(data){
                    swal({
                        title: "Confirm Success!",
                        text: "The order was approved by you!",
                        type: "success"
                    }).then(function () {
                    location.reload();
                    });
                }
            })
        }
    });
}
