{{HTML::script('assets/js/jquery-2.1.4.min.js')}}
{{HTML::script('assets/js/vendor.min.js')}}
{{HTML::script('assets/js/scripts.min.js')}}
<<<<<<< HEAD

 <script type="text/javascript">
    $(document).ready(function()
    {
        $("#follow").click(function(e)
        {
            e.preventDefault();
            var status = $('#status').val();
            var token = "{{Session::token()}}";
            var userId = $('#userId').val();
            $.ajax({
                type: "POST",
                url: "follow/status/"+status,
                data: {token:token, userId:userId, status:status},
                success: function(){
                	//code here
                }
            });
        });
    });
</script>
=======
>>>>>>> 48c5be4b21eac2e5eab936a87c7e48bf4e4ad348
