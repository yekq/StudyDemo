
<html>
    <title>php ajax demo</title>
    <?php
    header('Content-Type:text/html;charset=utf-8');
    ?>
    <header>
        <script type="text/javascript" src="../js/jquery-3.1.1.js"></script>
        <script type="text/javascript">
            $(function() {
                $("#backdata").hide();
                $("#subbtn").click(function() {
//                    var params = $("input").serialize();
                    var name=$("#name").val();
                    var password=$("#password").val();
                    var url = "login.php?name="+name+"&password="+password;
                    $.ajax({
                        async:true,
                        type: "get",
                        url: url,
                        dataType: "json",
//                        data: params,
                        beforeSend: beforeSendAction,
                        complete:function () {
//                            alert('完成!');
                            alert(name);
                        },
                        success: loginResult
                    });
                });

            });

            function beforeSendAction() {
                alert('开始');
            }

            function loginResult(msg) {
                var backdata = "您提交的姓名为：" + msg.name +
                    "<br /> 您提交的密码为：" + msg.password;
                $("#backdata").html(backdata);
                $("#backdata").css({color: "green"});
                $("#backdata").animate({
                    height:'toggle'
                });
            }
        </script>

        <body>
        <p><label for="name">姓名：</label>
            <input id="name" name="name" type="text" />
        </p>

        <p><label for="password">密码：</label>
            <input id="password" name="password" type="password" />
        </p>

        <span id="backdata"></span>
        <p><input id="subbtn" type="button" value="提交数据" /></p>
        <div id="div_result"></div>
        </body>
    </header>
</html>
