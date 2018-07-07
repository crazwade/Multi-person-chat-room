<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <title>JS Bin</title>
</head>

<body bgcolor="black">
<div id="all" style="background-color: black;">
  <div id="join_part" style="display: block;background-color: black;">
    <center>
      <font color="red" size="28px" face="Microsoft JhengHei">
        神 MI 的 聊 天 4
      </font>
    </center>
    <center><br>
      <table border="1" style="background-color:  #D200D2;">
        <tr>
          <td><center><font color="black" size="5" face="Microsoft JhengHei">請先輸入您的名稱</font></center></td>
        </tr>
        <tr>
          <td><br>
            <center>
              <input type="text" id="txt" placeholder="user"><br><br>
            </center>
            <center>
              <input type="button" name="join" value="登入聊天室" onclick="join_check();" class="btn btn-primary" style="width: 140px;height: 50px;font-size: 24px;"><br>&nbsp;
            </center>
          </td>
        </tr>
      </table>
    </center>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </div>
  
  <div id="message_part" style="display: none;background-color: black;">
    <center>
      <font color="white" size="28px">
        開 4 聊 天 ㄅ
      </font><br><br>
      <input type="text" id="message" placeholder="message"><br><br>
      <input type="button" id="send" value="送出訊息" class="btn btn-primary" style="width: 140px;height: 50px;font-size: 24px;"><br><br>
      </center>
      <div style="margin-left: 41%;">
        <ul id="list"></ul>
      </div>
    <br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;
  </div>
</div>
</body>
</html>
<!-- 外部資源 -->
<script src="https://www.gstatic.com/firebasejs/4.6.0/firebase.js"></script>
<script src="all.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>