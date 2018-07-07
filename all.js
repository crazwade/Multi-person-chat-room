 var config = {
    apiKey: "AIzaSyB6qHL0hKU0dramV-nByi5YlilvPVnBVLs",
    authDomain: "test-75796.firebaseapp.com",
    databaseURL: "https://test-75796.firebaseio.com",
    projectId: "test-75796",
    storageBucket: "test-75796.appspot.com",
    messagingSenderId: "1032154742059"
  };
// 初始化
  firebase.initializeApp(config);
  
//資料庫標頭
  var todo = firebase.database().ref('todo');
//使用者
  var txt = document.getElementById('txt');
//message
  var message = document.getElementById('message');
//按鈕
  var send = document.getElementById('send');
//標籤
  var list = document.getElementById('list');
//按鈕事件
  send.addEventListener('click',function(e){
    console.log();
    //存入資料庫user:使用者名稱
    todo.push({user:txt.value,message:message.value});
  })
todo.on('value',function(snapshot){
   list.innerHTML = '';
    var str = '';
      snapshot.forEach(function(data){
        str+='<font color="white">'+data.val().user+'&nbsp;&nbsp;:&nbsp;&nbsp;'+data.val().message+'</font><br>'
      })
    list.innerHTML = str; 
});

function join_check() {
  var name = document.getElementById('txt');
  var join_name = name.value;
  if (join_name=="") {
    alert("請先輸入您的名稱");
  }else if(join_name!==""){
    alert("welcome "+join_name);
    document.getElementById('join_part').style.display = "none";
    document.getElementById('message_part').style.display = "block";
  }
}
