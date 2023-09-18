<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script>
    function check_input(){
        if(!document.member.pass.value){
            alert("비밀번호를 입력하세요!");
            document.member.pass.focus();
            return;
        }
        if(!document.member.pass_confirm.value){
            alert("비밀번호확인을 입력하세요!");
            document.member.pass_confirm.focus();
            return;
        }
        if(!document.member.pass_confirm.value){
            alert("비밀번호확인을 입력하세요!");
            document.member.pass_confirm.focus();
            return;
        }
        if(!document.member.name.value){
            alert("이름을 입력하세요!");
            document.member.name.focus();
            return;
        }
        if(!document.member.email.value){
            alert("이메일 주소를 입력하세요!");
            document.member.email.focus();
            return;
        }
        if(document.member.pass.value !=document.member.pass_confirm.value){
            alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
            document.member.pass.focus();
            document.member.pass.select();
            return;
        }
        document.member.submit();
    }
    function reset_form(){
        document.member.id.vlaue="";
        document.member.pass.vlaue="";
        document.member.pass_confirm.vlaue="";
        document.member.name.vlaue="";
        document.member.email.vlaue="";
        document.member.id.focus();
        return;
    }
    </script>
</head>
<body>
    <?php
   session_start();
   if (isset($_SESSION["userid"]))
       $userid = $_SESSION["userid"];
   else   
       $userid = "";
       $con = mysqli_connect("localhost","root","","sample");
       $sql = "select * from members where id='$userid'";
       $result = mysqli_query($con,$sql);
?>
</body>
</html>