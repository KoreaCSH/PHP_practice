<!DOCTYPE html>
<html lang="ko">
<head>
	<title>고려증권</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<form action="stock_list.php" method="post">
	<div class='navbar fixed'>
		<div class='container'>
			<a class='pull-left title' href="index.php">고려증권</a>
			<ul class='pull-right'>
				<li>
					<input type="text" name="search_keyword" placeholder="종목검색">
				</li>
				<li>종목목록</li>
				<li><a href='stock_list.php'>관심종목</a></li>
				<li>매수주문</li>
				<li>매도주문</li>
				<li>계좌정보조회</li>
			</ul>
		</div>
	</div>
</form>
