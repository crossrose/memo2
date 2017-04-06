<html>
<head>
    <title>PHP DB write Test </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
    <form name="form1" method="post" action="view.php">
        <table>
  			<tr>
  				<td><label>제목</label></td>
  				<td><input type="text" id="memo_title" name="memo_title" /></td>
  			</tr>
  			<tr>
  				<td><label>메모내용</label></td>
  				<td><textarea id="memo_text" name="memo_text" cols="50" rows="30"><?=$memo?></textarea></td>
  			</tr>
  			<tr>
  				<td><label>작성자</label></td>
  				<td><input type="text" id="memo_name" name="memo_name"/></td>
  			</tr>
  			<tr>
  				<td><label>비밀번호</label></td>
  				<td><input type="password" id="memo_passwd" name="memo_passwd" /></td>
  			</tr>
  			<tr>
  				<td><label>연결 URL</label></td>
  				<td><input type="text" id="memo_link_url" name="memo_link_url" /></td>
  			</tr>
  			<tr>
  				<td><input type="submit" value="등록" /></td>
                <td></td>
  			</tr>
  		</table>

    </form>
</body>
</html>
